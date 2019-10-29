<?php

//Assign database details to variables
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'oranges11');
define('DBNAME', 'cms-wbd5100');

//Setup database connection
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

//Check if connection was successful
if(!$conn){
    die("error connecting to db");
}else{
    //"connected successfully";
}

session_start(); //Run session

define('DIR', 'http://localhost/ultrasound-festival-custom-cms/');//Attach root to DIR variable
define('DIR_ADMIN', 'http://localhost/ultrasound-festival-custom-cms/admin/');//Attach admin to DIR_ADMIN variable

define('SITE_TITLE', 'Ultrasound Festival'); //site title

define('included', 1);

include("../includes/functions.php"); // Include functions file

?>
