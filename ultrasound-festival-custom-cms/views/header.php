<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ultrasound Festival</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1"><!--Set viewport-->
<link rel="stylesheet" href="assets/css/style.css" type="text/css"><!--Custom styles-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!--Bootstrap CSS CDN-->
<script src="assets/js/script.js" type="text/javascript"></script><!--Custom scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!--Bootstrap JQuery CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!--Bootstrap JS CDN-->

</head>
<?php define('DIR', 'http://localhost/ultrasound-festival-custom-cms/'); ?><!--Set variable for root directory for header-->
<body style="background-image: url('<?php echo DIR ?>assets/img/ultrasound_bg.jpg'), url('<?php echo DIR ?>assets/img/ultrasound_bg_repeat.png'); background-repeat: no-repeat, repeat;">
	<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a href="home.php"><div><img src="<?php echo DIR ?>assets/img/ultrasound_logo_white.png" alt="ultrasound_logo" width="15%" height="auto"></div></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--Decide active navbar class based on current page-->
        <?php 
          if (stripos($_SERVER['REQUEST_URI'], 'home.php')){
             echo '<li class="active">';
            }
            else{
                echo '<li>';
            }
          ?><a href="home.php">Home</a></li>
        <?php 
          if (stripos($_SERVER['REQUEST_URI'], 'blogs.php')){
             echo '<li class="active">';
            }
            else{
                echo '<li>';
            }
          ?><a href="blogs.php">Blogs</a></li>
        <?php 
          if (stripos($_SERVER['REQUEST_URI'], 'artists.php')){
             echo '<li class="active">';
            }
            else{
                echo '<li>';
            }
          ?><a href="artists.php">Artists</a></li>
        <?php 
          if (stripos($_SERVER['REQUEST_URI'], 'gallery.php')){
             echo '<li class="active">';
            }
            else{
                echo '<li>';
            }
          ?><a href="gallery.php">Gallery</a></li>
        <?php 
          if (stripos($_SERVER['REQUEST_URI'], 'contact.php')){
             echo '<li class="active">';
            }
            else{
                echo '<li>';
            }
          ?><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
