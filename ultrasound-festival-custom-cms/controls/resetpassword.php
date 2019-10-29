<?php
    include('../config/config.php');
    include('../views/header.php');

    //Check if there is a value for email and token in url
    if(isset($_GET['email']) && isset($_GET['token'])){
        //Declare variables for values taken from url
        $email = mysqli_real_escape_string($conn, $_GET['email']);
        $token = mysqli_real_escape_string($conn, $_GET['token']);
        
        //Select row based on token and email value
        $sql = "SELECT id FROM users WHERE token='$token' AND email='$email'";
        $result = $conn->query($sql);
        //Variable for error checking
        $errorCheckResult = "";
        //Run if change password button is pressed
        if(isset($_POST['passwordNew'])){
            //Declare variable
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $passwordConfirm = $_POST['passwordConfirm'];
            //Check password is at least 8 chars.
            if(strlen($password) < 8){
                $errorCheckResult = "Password must be at least 8 characters";
            }//Check if password matches confirm password
            else if($password !== $passwordConfirm){
                $errorCheckResult = "Passwords must match.";
            }else{
                //encrypt password
                $password = password_hash($password, PASSWORD_DEFAULT);
                
                //Write update statement for password of logged in user
                $sql = "UPDATE users SET password='$password' WHERE email='$email'";
                $result = $conn->query($sql);
                //If error checking is successful
                if($result){
                    $errorCheckResult = "Password changed successfully, <a href='../home.php'>click here</a> to return home";
                }
            }
        }
        
        
        
        
    }else{
        //Redirect to login.php
        header("Location: ../login.php");
        exit();
    }
?>
<!--Alternate Stylesheet Link-->
<link type="text/css" href="../assets/css/style.css" rel="stylesheet">

<div class="container" style="padding-top:20px;">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" id="formBox">
                <div class="row">
                    <div class="col-sm-12" id="formInput" style="padding-bottom: 10px;">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputPassword1">New Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" name="passwordConfirm" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <button type="submit" name="passwordNew" class="btn btn-danger">Submit</button>
                            <button type="submit" name="" class="btn btn-primary"><a href="<?php echo DIR ?>home.php" style="text-decoration: none;color: white;">Return Home</a></button>

                            <!--Display error message-->		
                            <p id="errorCheckResult" style="<?php if($errorCheckResult !== ""){ ?>display:block;<?php } ?>"><?php echo $errorCheckResult; ?></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>     
        </div>