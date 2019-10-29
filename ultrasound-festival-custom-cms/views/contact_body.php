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
        <li><a href="<?php echo DIR ?>home.php">Home</a></li>
        <li><a href="<?php echo DIR ?>blogs.php">Blogs</a></li>
        <li><a href="<?php echo DIR ?>artists.php">Artists</a></li>
        <li><a href="<?php echo DIR ?>gallery.php">Gallery</a></li>
        <li class="active"><a href="<?php echo DIR ?>contact.php">Contact</a></li>
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
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
                <!--Map using google maps api-->
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                    <div class="text-center header" style="padding:10px 0;">Our Office</div><hr style="margin:0;">
                    <div class="panel-body text-center">
                        <h4>Address</h4>
                        <div>
                        A: 2217 First Street<br />
                        C: Liverpool<br />
                        P: +44 7403 344 826<br />
                        E: ultrasound@festival.com<br />
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
	  
	<div class="col-sm-1"></div>
	  
  </div>
</div>