<?php

	//Process ajax call
include_once("../class/user.class.php");
	$u = new User();
	session_start();
	
	//controleer of username bestaat
	
	$username = $_POST['username'];
	$usernameavaileble = $u->Check($username);


	if ($usernameavaileble == "free") 
	{
		echo "free";
	}
	else
	{
		echo "This e-mail adres is already taken";
	}
	

?>