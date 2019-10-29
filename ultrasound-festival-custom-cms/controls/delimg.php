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
        $delImg = $_GET['id'];

        //Delete image with selected id
        $sql = "DELETE FROM gallery WHERE id='$delImg'";
        $result = $conn->query($sql);
        
        //Redirect to gallery.php
        header('Location: ../gallery.php');
        exit();
    }
?>