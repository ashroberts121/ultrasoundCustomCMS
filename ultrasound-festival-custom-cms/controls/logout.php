<?php

	include('../admin/config.php');//Call in config for db connection
  include('../controller/functions.php');//Call in custom function file
  include('../model/head.php');//Call in head.php for head tags

	//start session
	session_start();

	//Unset cookie
	setcookie('email', $email, time() - 86400, "/MajorProjectApp");

	//end session - logout
	session_destroy();

	//redirect to login page
	header("Location: ../login.php");

?>
