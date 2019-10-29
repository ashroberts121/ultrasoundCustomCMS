<?php
	include('config/config.php');
	include('config/functions.php');

	if(logged_in()){
		header("Location: home.php");
		exit();
	}

    //Set variable for error display message
	$errorCheckResult = "";

    //check if submit button was pressed
	if(isset($_POST['submit'])){
        
        //set form input values to variables and make sure it is a string 
		$firstName = mysqli_real_escape_string($conn, $_POST['fname']);
		$lastName = mysqli_real_escape_string($conn, $_POST['lname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$passwordConfirm = $_POST['passwordConfirm'];
		$conditions = isset($_POST['conditions']);
		
        //Check first name is at least 3 letters
		if(strlen($firstName) < 3){
			$errorCheckResult = "First name must be at least 3 characters long.";
		}
        
        //Check last name is at least 3 letters
		else if(strlen($lastName) < 3){
			$errorCheckResult = "Last name must be at least 3 characters long.";
		}
        
        //Check that email is a valid email format
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errorCheckResult = "Please use a valid email.";
		}
       
        //Check if email is already in database using function from functions.php
		else if(email_exists($email, $conn)){
			$errorCheckResult = "This email is taken.";
		}
        
        //Make sure password is at least 8 letters
		else if(strlen($password) < 8){
			$errorCheckResult = "Password must be at least 8 characters long.";
		}
        
        //Check confirm matches password
		else if($password !== $passwordConfirm){
			$errorCheckResult = "Passwords do not match.";
		}
       
        //Make sure terms and conditions checkbox is checked
		else if(!($conditions == "on")){
			$errorCheckResult = "You must agree to the terms and conditions.";
		}
		
		else{
			
            //encrypt password
			$password = password_hash($password, PASSWORD_DEFAULT);
			
            //Create query - insert values from inputs into a new row in users table
			$sql = "INSERT INTO users(id, firstName, lastName, email, password, token) VALUES (NULL, '$firstName', '$lastName', '$email', '$password', '')";
			if(mysqli_query($conn, $sql)){
				$errorCheckResult = "Successfully registered!";
			}
		}
	}

?>

<div class="container" style="padding-top:20px;">
    
    <div class="col-sm-3"></div>
    
    <
    <div class="col-sm-6" id="formBox">
        <div class="row">
            <div class="col-sm-12" id="formTab">
                <div class="col-sm-6" id="formTabActive"><a href="register.php" id="formTabText">Sign Up</a></div>
                <div class="col-sm-6" id="formTabInactive"><a href="login.php" id="formTabText">Login</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="formInput">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="fname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter E-mail" required>
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password (Min. 8 Characters)" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">Password must be at least 8 characters.</small>-->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="passwordConfirm" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="conditions" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1" required>I accept the Terms and Conditions.</label>
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