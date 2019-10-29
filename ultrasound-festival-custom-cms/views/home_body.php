<?php
	include('config/config.php');
	include('config/functions.php');

    //Check if user is logged in
	if(!(logged_in())){
		header("Location: login.php");
		exit();
	}
?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs" style="background-color:#222222; height:100%; position: fixed;">

      <ul class="nav nav-pills nav-stacked">
          <a href="<?php DIR ?>home.php"><li> <img src="<?php DIR ?>assets/img/ultrasound_logo_white.png" alt="ultrasound_logo" width="100%" height="auto"></li></a>
        <li class="active"><a href="<?php echo DIR ?>home.php">Home</a></li>
        <li><a href="<?php echo DIR ?>blogs.php">Blogs</a></li>
        <li><a href="<?php echo DIR ?>artists.php">Artists</a></li>
        <li><a href="<?php echo DIR ?>gallery.php">Gallery</a></li>
        <li><a href="<?php echo DIR ?>contact.php">Contact</a></li>
      </ul><br>
    </div>
    <br>

    <div class="col-sm-3"></div>

    <div class="col-sm-8">
      <div class="row">
	  	<div style="width:100%; height:50%; text-align:center;">
		   <span style="display: inline-block; height: 100%; vertical-align: middle;"></span>
		   <img style="display: inline-block; vertical-align: middle;" src="<?php DIR ?>assets/img/ultrasound_logo.png" alt="ultrasound_logo" style="margin:0 auto 20px auto;">
	  	</div>
      </div>

      <div class="row">
        <div class="col-sm-12">


			  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 30px; box-shadow: 5px 5px 10px grey">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				  <div class="item active">
					<img src="<?php DIR ?>assets/img/ultrasound_carousel_crowd.jpg" alt="Los Angeles" style="width:100%;">
				  </div>

				  <div class="item">
					<img src="<?php DIR ?>assets/img/ultrasound_carousel_camping.jpg" alt="Chicago" style="width:100%;">
				  </div>

				  <div class="item">
					<img src="<?php DIR ?>assets/img/ultrasound_carousel_band.jpg" alt="New york" style="width:100%;">
				  </div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
        </div>
      </div>
        <div class="row">

    <?php
        //Select all data from blogs table and display row with highest id
        $sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 0,1";
        $result = $conn->query($sql);

        while($row = $result->fetch_object()){
        //Variable with value of random number between 1 and 3
        $randPic = rand(1,3);?>
      	<div class="col-lg-3" style="text-align: center" id="home-blog-div">
            <img style="border-radius: 50%;"
                 src="<?php
                        //Display image based on randomly generated number
                        DIR ?>assets/img/<?php if($randPic == 1){
                        ?>ultrasound_home_thumb1.jpg<?php
                      }else if($randPic == 2){
                        ?>ultrasound_home_thumb2.jpg<?php
                      }else{
                        ?>ultrasound_home_thumb3.jpg<?php
                      } ?>" alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo $row->title ?></h2>
            <p><?php echo $row->preview ?></p>
            <p><a class="btn btn-secondary" href="<?php echo DIR ?>blogs.php" role="button" style="color:red">View details &raquo;</a></p>
        </div>
          <?php } ?>
    <?php
        //Select all data from blogs table and display row with 2nd highest id
        $sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 1,1";
        $result = $conn->query($sql);

        while($row = $result->fetch_object()){
        $randPic = rand(1,3);?>
      	<div class="col-lg-5" style="text-align: center" id="home-blog-div">
            <img style="border-radius: 50%;"
                 src="<?php DIR ?>assets/img/<?php if($randPic == 1){
                        ?>ultrasound_home_thumb1.jpg<?php
                      }else if($randPic == 2){
                        ?>ultrasound_home_thumb2.jpg<?php
                      }else{
                        ?>ultrasound_home_thumb3.jpg<?php
                      } ?>" alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo $row->title ?></h2>
            <p><?php echo $row->preview ?></p>
            <p><a class="btn btn-secondary" href="<?php echo DIR ?>blogs.php" role="button" style="color:red">View details &raquo;</a></p>
        </div>
          <?php } ?>
    <?php
        //Select all data from blogs table and display row with 3rd highest id
        $sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 2,1";
        $result = $conn->query($sql);

        while($row = $result->fetch_object()){
        $randPic = rand(1,3);?>
      	<div class="col-lg-3" style="text-align: center" id="home-blog-div">
            <img style="border-radius: 50%;"
                 src="<?php DIR ?>assets/img/<?php if($randPic == 1){
                        ?>ultrasound_home_thumb1.jpg<?php
                      }else if($randPic == 2){
                        ?>ultrasound_home_thumb2.jpg<?php
                      }else{
                        ?>ultrasound_home_thumb3.jpg<?php
                      } ?>" alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo $row->title ?></h2>
            <p><?php echo $row->preview ?></p>
            <p><a class="btn btn-secondary" href="<?php echo DIR ?>blogs.php" role="button" style="color:red">View details &raquo;</a></p>
        </div>
          <?php } ?>
      </div>

    </div>

	<div class="col-sm-1"></div>

  </div>
</div>
