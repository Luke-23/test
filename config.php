<?php

error_reporting(-1);                   // Report all type of errors
ini_set("display_errors", 1);

//Autoloadfunktion för att när en klass anropas så inkluderas dess fil vid behov
spl_autoload_register(function ($class) 
{
	$path = "classes/"."{$class}.php"; //skapar sökvägsvariablen
	if (is_file($path))  //om filsökvägen existerar
	{
		include($path);  //inkludera aktuella filen
	}
});
	
?>