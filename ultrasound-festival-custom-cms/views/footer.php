<br><br><br><br><br><br>
<div class="col-sm-2"></div>
<div class="col-sm-10" style="padding: 0;">
<footer class="footer" id="footer">
    <div class="container" style="padding: 7px 0;">
        <?php
            //Check if user is logged in
           if(logged_in()){
            //assign variable for session value
            $email = mysqli_real_escape_string($conn, $_SESSION['email']);
            //Select logged in users first and last name based on their email
            $sql = "SELECT firstName, lastName FROM users WHERE email='$email'";
            $result = $conn->query($sql);
               
            while($row = $result->fetch_object()){
                //Display first and last name of logged in user
                echo "You are logged in as ".$row->firstName." ".$row->lastName.".";
            }
               
            ?>
        
            <p id="footerControls"><a href="controls/logout.php">Logout</a></p>
            <p id="footerControls"><a href="views/changepwd.php">Change Password</a></p>
            
            <?php

            }/*else{
                //Redirect to login.php if not logged in
                header("Location: login.php");
                exit();
            }*/
        ?>
    </div>
    
</footer>
</div>
</body>
</html>