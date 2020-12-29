<?php 
    error_reporting(0);
	//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	//header("Cache-Control: post-check=0, pre-check=0", false);
	//header("Pragma: no-cache");
	//header('X-Frame-Options: SAMEORIGIN');
	$host="127.0.0.1"; // Host name
	
	$username="root"; // Mysql username //root
	$password=""; // Mysql password //test
	$db_name="udise"; // Database name
	// connect to server and select database.	
	$con=mysqli_connect($host, $username, $password);//or die("cannot connect");

	if (!$con)
	{
		die('Could not connect to Database: ' . mysqli_error());
	}
	else
	{
		mysqli_select_db($con, $db_name);
		$s="connected to DB";
	}
?>