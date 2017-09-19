<?php
require("config.php"); // hämtar alla klasser vid behov.
	
// skapar lokala php-variabler som hämtar post-variabler
// dessa skall kontrolleras med olika säkerhetslösningar senare...

//if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
	
if(isset($_POST['email']) && $_POST['email'] != null && isset($_POST['password']) && $_POST['password'] != null)
{
	if(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL))
	{
		$email = $_POST['email'];
	}
	else
	{
		header("Location:loginForm.php?mes=auth denied");		
	}
	
	//Kolla password likadant som email.
	$password = $_POST['password'];
	
	$oassword = filter_var($password, FILTER_SANITIZE_STRING);
	
	$myFile = new Files();
	$userInfo = $myFile->getUserFromFile($email);

	if($userInfo !=  false)
	{
		$auth = new Auth(); 
		$loginCheck = $auth->checkUser($password, $userInfo->password);	
		
		if(!$loginCheck)
		{
			header("Location:loginForm.php?mes=auth denied");		
		}	

	}
}

?>