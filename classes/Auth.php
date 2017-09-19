<?php

class Auth{
	
	public function checkUser($password, $passwordHash)
	{		
		if(password_verify($password, $passwordHash))
		{
			return true;
			
		}
		
		else
		{
			return false;
		}
	}
}