<!-------------------------PHP Code----------------------------------->
<?php
    include('../config/config.php');
    include('../config/functions.php');
    include('header.php');

    $reset = "";

    //Check if submit button was pressed
    if(isset($_POST['forgotPass'])){
        
        //Assign variable to email input
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        //Select row id based on submitted email
        $sql = "SELECT id FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        
        //Generate a random character sequence for token column
        $str = "0123456789qwertyuiopasdfghjklzxcvbnm";
        $str = str_shuffle($str);
        $str = substr($str, 0, 10);
        
        //Create url including values for email and token
        $url = "http://localhost/ultrasound-festival-custom-cms/controls/resetPassword.php?token=$str&email=$email";
        
        //echo $url;
        
        //Display link
        $reset = "To reset password please click the link: <a href='$url'>$url</a>";
        
        //Update token based on email input
        $sql = "UPDATE users SET token='$str' WHERE email='$email'";
        $result = $conn->query($sql);
    }
?>

<!------------------------HTML Code--------------------------------->

<!--Alternate Stylesheet Link-->
<link type="text/css" href="../assets/css/style.css" rel="stylesheet">

<div class="container" style="padding-top:20px;">
    
    <div class="col-sm-3"></div>
    
    <!--Forgot Password Form Box-->
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12" id="formInput">
                <!--Forgot Password Form-->
                <form method="post" action="" enctype="multipart/form-data">
                    
                    <h2>Forgot your password?</h2>
                    <!--Email Entry-->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter your email:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" required>
                    </div>
                    
                    <!--Submit Button-->
                    <button type="submit" name="forgotPass" class="btn btn-danger">Submit</button>
                    
                    <!--Return To Login Button-->
                    <button type="submit" name="" class="btn btn-primary"><a href="<?php echo DIR ?>login.php" style="text-decoration: none;color: white;">Return to Login</a></button>

                    <!--Display error message-->		
                    <p id="errorCheckResult" style="<?php if($reset !== ""){ ?>display:block;<?php } ?>"><?php echo $reset; ?></p>
                    
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-sm-3"></div>
    
</div>