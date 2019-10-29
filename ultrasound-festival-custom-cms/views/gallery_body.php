<?php
	include('config/config.php');
	include('config/functions.php');

    //Check if user is logged in
	if(!(logged_in())){
		header("Location: login.php");
		exit();
	}
    //error display variable
    $error = "";
    //Check if submit button was pressed
    if(isset($_POST['submit'])){
        
        //Declare variables for file attributes
        $image = $_FILES['fileToUpload']['name'];
        $tmp_image = $_FILES['fileToUpload']['tmp_name'];
        $img_size = $_FILES['fileToUpload']['size'];
        
        //If no image is uploaded
        if($image == ""){
            $error = "Please upload your image.";
        //If img is more than 50MB
        }else if($img_size > 52428800){
            $error = "Image must be less than 50mb";
        }
        
        //Insert uploaded image into database
        $sql = "INSERT INTO gallery(image) VALUES ('$image')";
        $result = $conn->query($sql);
        
        //Check if image was inserted into database
        if($result){
            //If image was uploaded to gallery uploads folder
            if(move_uploaded_file($tmp_image, 'assets/img/gallery_uploads/'.$image)){
                //Redirect to gallery.php
                header("Location: gallery.php");
                exit();
                //Display success message
                $error = "Successfully uploaded";
                
            }else{
                //Display error message
                $error = "Error uploading image";
            }
        }
    }
    ?>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs" style="background-color:#222222; height:100%; position: fixed;">
      
      <ul class="nav nav-pills nav-stacked">
          <a href="<?php DIR ?>home.php"><li> <img src="<?php DIR ?>assets/img/ultrasound_logo_white.png" alt="ultrasound_logo" width="100%" height="auto"></li></a>
        <li><a href="<?php echo DIR ?>home.php">Home</a></li>
        <li><a href="<?php echo DIR ?>blogs.php">Blogs</a></li>
        <li><a href="<?php echo DIR ?>artists.php">Artists</a></li>
        <li class="active"><a href="<?php echo DIR ?>gallery.php">Gallery</a></li>
        <li><a href="<?php echo DIR ?>contact.php">Contact</a></li>
      </ul><br>
    </div>
    <br>
	  
    <div class="col-sm-3"></div>
	  
    <div class="col-sm-8">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" id="upload-div">
                <form method="post" action="" enctype="multipart/form-data">
                    <input type="file" id="fileToUpload" name="fileToUpload" multiple="multiple"/>
                    <p style="text-align: left; margin-top: 20px;">
                        <input type="submit" value="Upload Image" name="submit" class="btn btn-lg btn-primary" />
                    </p>
                    <p><?php echo $error; ?></p>
                </form>
            </div>
            <div class="col-md-4"></div>    
        </div>
        <div class="row">
            <?php
            //Select all data from gallery table and order by id in descending order
            $sql = "SELECT * FROM gallery ORDER BY id DESC";
            $result = $conn->query($sql);
            //Run while there is data available - Display all rows as an image gallery
            while($row = $result->fetch_object()){
                ?>
                <a href="<?php echo DIR ?>assets/img/gallery_uploads/<?php echo $row->image ?>">
                    <div class="col-md-4 col-sm-6 col-xs-12" >
                        <img class="img-responsive" src="<?php echo DIR ?>assets/img/gallery_uploads/<?php echo $row->image ?>" width="auto" height="250"/>
                        <a href="controls/delimg.php?id=<?php echo $row->id ?>" style="color:red">Delete</a>
                    </div>
                </a>
                <?php } ?>
        </div>  
    </div>
		
	  
      <div class="col-sm-1"></div>
	  
  </div>
</div>
<br><br><br><br><br><br><br><br><br>