<?php
class Sql
{
	// connection detals
	const url = "localhost";
	const userName = "te14luha_Lucas";
	const password = "dratard123";
	const db = "te14luha_cars";
	private $con;
	//end connection details
	
	public function connect()
	{
		$this->con = new mysqli(self::url, self::userName, self::password, self::db);
		
		if($this->con->connect_errno > 0)
		{
			die('Unable to connect to database [' . $this->con->connect_error . ']');
		}
		
		else
		{
			return "connection succeeded";		
		}	
		
	}
	
	public function insertUser($user)
	{
		//sql-fråga
		
		$query = "INSERT INTO USERS (name, email, password) VALUES('".$user['userName']."', '".$user['email']."', '".$user['password']."')";
		
		
		
	}	
	
	
	
	
	
	
	
	
}