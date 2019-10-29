<?php
    include('../config/config.php');
    include('../config/functions.php');

    //Check if user is logged in
	if(!(logged_in())){
		header("Location: ../login.php");
		exit();
	}
    //Check id has been passed in url
    if(isset($_GET['id'])){
        //Assign variable to id value
        $delPost = $_GET['id'];
        
        //Delete post with selected id
        $sql = "DELETE FROM blogs WHERE id='$delPost'";
        $result = $conn->query($sql);
        
        //Return to blogs.php
        header('Location: ../blogs.php');
        exit();
    }
?>