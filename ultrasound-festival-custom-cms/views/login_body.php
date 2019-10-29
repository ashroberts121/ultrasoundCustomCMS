<?php
	include('config/config.php');
	include('config/functions.php');
	
	//Check if user is logged in
	if(logged_in()){
		header("Location: home.php");
		exit();
	}

	$errorCheckResult = "";

	if(isset($_POST['submit'])){
		//Assign variables to login inputs
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$keep = isset($_POST['keep']);
		
		//Check if email is in database
		if(email_exists($email, $conn)){
			
			//$errorCheckResult = "Email exists";
			$sql = "SELECT password FROM users WHERE email='$email'";
			$result = $conn->query($sql);
			
			//Retrieve password column from database
			$getPassword = mysqli_fetch_assoc($result);
			
			//Check if password matches database for the user with the entered email
			if(!password_verify($password, $getPassword['password'])){
				
				$errorCheckResult = "Password is incorrect";
				
			}else{
				//$errorCheckResult = "Password is correct";
				
				//Set email value as session value
				$_SESSION['email'] = $email;
				
				//If user checks 'keep me logged in', set cookie to last an hour
				if($keep == "on"){
					setcookie('email', $email, time()+3600);
				}
				//Redirect to homepage
				header("Location: home.php");
			}
		
		}else{
			
			$errorCheckResult = "Email does not exist";
		}
	}
?>

<div class="container" style="padding-top:20px;">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" id="formBox">
        <div class="row">
            <div class="col-sm-12" id="formTab">
                <div class="col-sm-6" id="formTabInactive"><a href="register.php" id="formTabText">Sign Up</a></div>
                <div class="col-sm-6" id="formTabActive"><a href="login.php" id="formTabText">Login</a></div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12" id="formInput">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        <a href="views/forgotpwd.php">   Forgot password?</a>
                    </div>
                    
                    
                    
                    <br>
                    
                    <div class="form-check">
                        <input type="checkbox" name="keep" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Keep me logged in.</label>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                    
                    
                    <!--Display error message-->		
                    <p id="errorCheckResult" style="<?php if($errorCheckResult !== ""){ ?>display:block;<?php } ?>"><?php echo $errorCheckResult; ?></p>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-3"></div>     
</div>

