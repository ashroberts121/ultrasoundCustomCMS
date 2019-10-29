<?php
    include('../config/config.php');
    include('../config/functions.php');
    include('../views/header.php');
    
    //Check if user is logged in
	if(!(logged_in())){
		header("Location: ../login.php");
		exit();
	}
    //Check if submit button is pressed
    if(isset($_POST['submit'])){
        //Declare variables for inputs
        $editPost = $_GET['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $preview = $_POST['preview'];
        $body = $_POST['body'];
        
        //Update blogs table values based on the id
        $sql = "UPDATE blogs SET title='$title', author='$author', preview='$preview', body='$body' WHERE id='$editPost'";
        $result = $conn->query($sql);
        
        //Redirect to blogs.php
        header('Location: ../blogs.php');
        exit();
    }
    //Check if id has been passed in url
    $id2 = $_GET['id'];
    //Select data from blogs table where the row id = url id passed
    $sql = "SELECT * FROM blogs WHERE id='$id2'";
    $result = $conn->query($sql);
    
    //Display data if it is there is data in database
    while($row = $result->fetch_assoc()){
        ?>

        <div class="container" style="padding-top:20px;">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" id="formBox">
                <div class="row">
                    <div class="col-sm-12" id="blog-post-input">
                            <form method="post" action="">
                                <h2 style="margin: 0 0 10px 0;">Edit blog post!</h2>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr" name="title" value="<?php echo $row['title']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="pwd" name="author" value="<?php echo $row['author']; ?>">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" id="comment" name="preview"><?php echo $row['preview']; ?></textarea>
                                    <small id="emailHelp" class="form-text text-muted">(Preview can be up to 255 characters)</small>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" id="comment" name="body"><?php echo $row['body']; ?></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-danger">Update</button>
                            </form>
                        </div>
                </div>
            </div>
            <div class="col-sm-3"></div>     
        </div>
<?php } ?>