/********* READ ME - WBD5100.1 PHP Custom CMS - Ultrasound Festival **********************\

DATABASE SETUP
users - a table of registered users including: first name, last name, email, and password
blogs - a table of blog posts that are added by logged in users
gallery - a table of images uploaded to the gallery by logged in users

///////////////////////////////////////////////////////////////////////////////////////////////

PHP Techniques used

SQL INSERT, UPDATE for creating users and changing password

SQL SELECT, INSERT, UPDATE, DELETE for blogs and gallery

$_POST method used to send data to database for security
$_GET method used to retrieve page id to run sql statements on

msqli_real_escape_string() php function used to help prevent sql injection by stopping code from being uploaded to DB

logged_in() function created to use as a check to prevent users from accessing pages without being logged in

password_hash() php function used to encrypt password before entering it into database

$_SESSION and $_COOKIE used to set logged in user based on email

 

