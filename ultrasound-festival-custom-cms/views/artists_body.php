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
        <li class="active"><a href="<?php echo DIR ?>artists.php">Artists</a></li>
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
        <div class="row" id="artists-post-div">
            <div class="col-lg-4" id="artists-post-content">
                <img src="<?php echo DIR ?>assets/img/ultrasound_artists_oasis.jpg" id="artists-post-img" width="250" height="250">
            </div>
            <div class="col-lg-8" id="artists-post-content">
                <h1 id="artists-post-header">Oasis</h1>
                <p>Twenty years ago in 1997, Cool Britannia was at its peak and Oasis had just released Be Here Now. In 2009, the tempestuous relationship between the Gallagher brothers finished the band for good. Today, Liam Gallagher is more likely to appear in the paper slagging off his brother Noel rather than rival britpop band Blur. 
                The Oasis back catalogue meanwhile was resigned to the GCSE curriculum years ago. In a funny way, then, it seems rather fitting that most of the punters at Ultrasound festival are either celebrating or commiserating results. </p>
            </div>  
        </div>
        <div class="row" id="artists-post-div">
            <div class="col-lg-8" id="artists-post-content">
                <h1 id="artists-post-header">Kendrick Lamar</h1>
                <p>Kendrick Lamar is a rapper born on the 17th of June 1987 in Compton, California, USA. Since the release of his mixtape “Overly Dedicated”, and his second album “good kid, m.A.A.d city”, he has proved himself to be one of the most exciting, critically acclaimed rappers of his generation. If you’re a hip-hop fan, you already know this man. Very few hip-hop artists have caused such a stir for all the right reasons in such comparatively little time. </p>
            </div> 
            <div class="col-lg-4" id="artists-post-content">
                <img src="<?php echo DIR ?>assets/img/ultrasound_artists_kendrick.jpg" id="artists-post-img" width="250" height="250">
            </div>
        </div>
        <div class="row" id="artists-post-div">
            <div class="col-lg-4" id="artists-post-content">
                <img src="<?php echo DIR ?>assets/img/ultrasound_artists_pendulum.jpg" id="artists-post-img" width="250" height="250">
            </div>
            <div class="col-lg-8" id="artists-post-content">
                <h1 id="artists-post-header">Pendulum</h1>
                <p>Pendulum are a drum and bass group hailing from Perth, Australia who formed in 2002. Since debuting in 2003 they have released three studio albums and have become one of the most acclaimed live acts in the world thanks to their breakneck mix of D&B and heavy metal.
                We’re living in a world where genres are becoming progressively meaningless. Thanks to the advent of the MP3 and streaming age everyone listens to everything and the music actually being made is becoming more interesting, reckless and experimental as a result. One of the bands who genuinely get that these barriers between tribes are breaking down is Pendulum. </p>
            </div>  
        </div>
        <div class="row" id="artists-post-div">
            <div class="col-lg-8" id="artists-post-content">
                <h1 id="artists-post-header">Mallory Knox</h1>
                <p>Mallory Knox are a band hailing from Cambridge, United Kingdom who formed in 2009. Since their debut they have released two studio albums and made a name for themselves as one of the most exciting British rock bands of their generation.
                The band was put together around the partnership of lead guitarist Joe Savins and drummer Dave Rawling, who came together in August 2009. Together, they set about poaching a number of musicians from other local bands around the Cambridge scene until they'd settled on bassist Sam Douglas, rhythm guitarist James Gillet and vocalist Mikey Chapman to join them. </p>
            </div> 
            <div class="col-lg-4" id="artists-post-content">
                <img src="<?php echo DIR ?>assets/img/ultrasound_artists_mallory.jpg" id="artists-post-img" width="250" height="250">
            </div>
        </div>
        
    </div>

    <div class="col-sm-1"></div>
    </div>
</div>