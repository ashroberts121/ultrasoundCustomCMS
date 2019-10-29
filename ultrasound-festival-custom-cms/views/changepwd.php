<!-------------------------PHP Code---------------------------------->
<?php
	
	include('../config/config.php');
	include('../config/functions.php');

    include('header.php');
?>
    
<?php
    //Declare error message variable
	$errorCheckResult = "";
	
//Run if change password button is pressed
	if(isset($_POST['passwordNew'])){
        
        //Declare variables for input entries
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$passwordConfirm = $_POST['passwordConfirm'];
		
        //Check password is at least 8 chars.
		if(strlen($password) < 8){
			$errorCheckResult = "Password must be at least 8 characters";
		}
        
        //Check if password matches confirm password
		else if($password !== $passwordConfirm){
			$errorCheckResult = "Passwords must match.";
		}else{
            
			//encrypt password
			$password = password_hash($password, PASSWORD_DEFAULT);
			
            //Set email variable to session value
			$email = $_SESSION['email'];
			
            //Write update statement for password of logged in user
			$sql = "UPDATE users SET password='$password' WHERE email='$email'";
			$result = $conn->query($sql);
			
            //if successful, display message
			if($result){
				$errorCheckResult = "Password changed successfully, <a href='../home.php'>click here</a> to go to return home";
			}
		}
	}

	//Check if user is logged in
	if(logged_in()){
		?>

<!----------------------------HTML Code------------------------------------->

<!--Alternate Stylesheet Link-->
<link type="text/css" href="../assets/css/style.css" rel="stylesheet">

<!--Page Displayed Content-->
<div class="container" style="padding-top:20px;">

    <div class="col-sm-3"></div>

    <!--Change Password Form Box-->
    <div class="col-sm-6" id="formBox">
        <div class="row">
            <div class="col-sm-12" id="formInput" style="border-radius: 10px; padding-bottom: 10px;">
                
                <!--Change password form-->
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        
                        <!--New Password Field-->
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        
                        <!--Confirm Password Field-->
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="passwordConfirm" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    
                    <!--Submit Button-->
                    <button type="submit" name="passwordNew" class="btn btn-danger">Submit</button>
                    
                    <!--Return Home Button-->
                    <button type="submit" name="" class="btn btn-primary"><a href="<?php echo DIR ?>home.php" style="text-decoration: none;color: white;">Return Home</a></button>

                    <!--Display error message-->		
                    <p id="errorCheckResult" style="<?php if($errorCheckResult !== ""){ ?>display:block;<?php } ?>"><?php echo $errorCheckResult; ?></p>
                </form>
            </div>
        </div>
    </div>

    <div class="col-sm-3"></div>   

</div>

		<?php		
	}else{
        //Go to home.php if not logged in
		header("Location: ../home.php");
	}

?>

