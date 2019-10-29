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
            <li class="active"><a href="<?php echo DIR ?>blogs.php">Blogs</a></li>
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
            
            <?php
            //Set timezone to GMT
            date_default_timezone_set('Europe/London');
            //Check if submit button is pressed
            if(isset($_POST['submit'])){
                //Declare variables for form inputs
                $title = $_POST['title'];
                $author = $_POST['author'];
                $preview = $_POST['preview'];
                $body = $_POST['body'];
                //Set date variable for time the form is submitted
                $date = date('D'.'-'.'d'.'-'.'M'.'-'.'y'.'@'.'H'.':'.'i'.':'.'s');
                
                //Insert new row into blogs table with submitted inputs
                $sql = "INSERT INTO blogs(title, author, preview, body, date) VALUES ('$title', '$author', '$preview', '$body', '$date')";
                $result = $conn->query($sql);
                
                //Redirect to blogs.php
                header("Location: blogs.php");
                exit();
            }
            ?>

            <div class="row">
                <div class="col-sm-12" id="blog-post-input">
                    <form method="post" action="">
                        <h2 style="margin: 0 0 10px 0;">Add a new blog post!</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" id="usr" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="pwd" name="author" placeholder="Author">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" name="preview" placeholder="Blog Preview"></textarea>
                            <small id="emailHelp" class="form-text text-muted">(Preview can be up to 255 characters.)</small>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" name="body" placeholder="Blog Body"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-danger">Post</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <?php
                //Display all rows from blogs in descending order
                $sql = "SELECT * FROM blogs ORDER BY id DESC";
                $result = $conn->query($sql);
                    //Run while there is data available
                    while($row = $result->fetch_object()){
                    ?>
                    <div class="col-sm-6">
                        <div class="blog-box">
                            <h2 class="blog-header"><?php echo $row->title ?></h2>
                            <p><?php echo $row->preview ?></p>
                            
                            <?php 
                                //If a id is in url, execute if
                                if(($_GET['id'] == $row->id)){
                                ?>
                                <p><?php echo $row->body ?></p>
                            <br>
                            <form>
                            <a href="<?php echo DIR ?>blogs.php" class="btn btn-danger" style="margin-bottom: 5px">Show Less &larr;</a>
                            </form>
                            
                            <?php 
                                //If no id in url, excecute else
                                }else{ 
                            ?>
                            <form>
                            <a href="<?php echo DIR ?>blogs.php?id=<?php echo $row->id?>" class="btn btn-danger" style="margin-bottom: 5px">Show More &rarr;</a>
                            </form>
                            <?php }?>
                            <br><br>
                            <div class="blog-info">Posted on <?php echo $row->date ?> by <?php echo $row->author ?><br><a href="<?php echo DIR ?>controls/editpost.php?id=<?php echo $row->id ?>">Edit |</a><a href="<?php echo DIR ?>controls/deletepost.php?id=<?php echo $row->id ?>"> Delete</a></div>
                            
                        </div>
                    </div>
                    <?php    
                    }
                    
                    ?>
                

            </div>
        </div>

        <div class="col-sm-1"></div>
	  
    </div>
</div>