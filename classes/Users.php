<?php

class Users
{
	private $userName;
	private $email;
	private $password;
	
	private $userArr = array();
	
	public function __construct($name, $email, $password)
	{
		$this->userName = $name; //tilldelar instans värde skickat från index
		$this->email = $email;
		$this->password = password_hash($password, PASSWORD_DEFAULT);
		
		$this->userArr['userName'] = $this->userName;
		$this->userArr['email'] = $this->email;
		$this->userArr['password'] = $this->password;

	}
	
	public function getUserInfo()
	{
		return $this->userArr;	
	}

	
}  //end class Users








?>