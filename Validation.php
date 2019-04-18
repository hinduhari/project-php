<?php
namespace classes\business;
use class\entity\User;
class Validation
{
public function check_name($input, &$error)
{
	if($input =="")
	{
	$error ="cannot be empty";	
	return false;
	}
	if (!preg_match("/^[a-zA-Z]*$/",$input))
	{
		$error = "Enter valid input";
		return false;
	}
	return true;
}
public function check_mail($input,&$error)
{
	if($input==""){
		$error="enter the value";
		return false;
	}
	if (!filter_var($input,FILTER_VALIDATE_EMAIL))
	{
		$error ="invalid";
		return false;
	}
	return true;
}
public function check_comments($input,&$error)
{
	if($input==""){
		$error="enter the input";
	return false;
	}
	return true;
}
public function check_password($input,&$error)
{
	if(!preg_match("/^(?=,"[a-z])(?=,"[A-Z])(?=,*\d)[a-zA-Z\d]{6,}$/",$input))
		{
			$error="enter valid password";
			return false;
		}
		return true;
}
	
	