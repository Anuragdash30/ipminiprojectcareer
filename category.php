<?php
session_start();
 
if (isset($_SESSION['Username'])) {
    if(isset($_SESSION['Status']))
  {
    header('location: admin_page.php');
  }


$db = mysqli_connect('sql12.freemysqlhosting.net', 'sql12381650', 'AcbcLhuB5u', 'sql12381650');
$Username=$_SESSION['Username'];
$idse = "select * from users where Username='$Username'";
$ansresults = mysqli_query($db,$idse);
$rows = mysqli_fetch_array($ansresults);
$_SESSION['User_id'] = $rows['User_id'];

include_once 'config/Database.php';
include_once 'class/Category.php';
include_once 'class/Topic.php';
$database = new Database();
$db = $database->getConnection();
$categories = new Category($db);
$topics = new Topic($db);
}
else
{
	header('location: login.php');
}
?>
<html lang="en">
<head>
	<title>Next step</title> 
	<link rel="stylesheet" href="discuss.css">
	<link rel="stylesheet" href="tinymce/skins/lightgray/content.inline.min.css">
	<link rel="stylesheet" href="tinymce/skins/lightgray/content.min.css">
	<link rel="stylesheet" href="tinymce/skins/lightgray/skin.min.css">
	<link rel="stylesheet" href="tinymce/skins/lightgray/skin.ie7.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<script src="tinymce/tinymce.min.js"></script>
	<script src="tinymce/plugins/paste/plugin.min.js"></script>
	<script src="tinymce/plugins/code/plugin.min.js"></script>
	<script src="tinymce/themes/modern/theme.min.js"></script>
	<script src="js/tinymce_editor.js"></script>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">

<div class="discuss">
    <div class="wra">
        <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
        <input type="radio" name="slider" id="menu-btn">
        <input type="radio" name="slider" id="close-btn">
        <ul class="links">
            <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            <li><a href="resour.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-fw fa-pencil"></i>Hi,<?php echo $_SESSION["Username"]; ?></a></li>
            <li><a href="logout.php" style="background:  #B22222 ;"><i class="fa fa-fw fa-user"></i>Log Out</a></li>
        </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
</div>

<div class="container">		
	<div class="row">
		<h2>Discussion Forum nextstep</h2>	
		<!-- Category -->
		<?php if(empty($_GET['category_id'])) { ?>
			<div class="single category">			
				<ul class="list-unstyled">
					<li><span style="font-size:25px;font-weight:bold;">Categories</span> <span class="pull-right"><span style="font-size:20px;font-weight:bold;">Topics / Posts</span></span></li>
					<?php
					$result = $categories->getCategoryList();
					while ($category = $result->fetch_assoc()) {
						$categories->category_id = $category['category_id'];
						$totalTopic = $categories->getCategoryTopicsCount();
						$totalPosts = $categories->getCategoryPostsCount();
					?>
					<li><a href="category.php?category_id=<?php echo $category['category_id'];?>" title=""><?php echo $category['name']; ?> <span class="pull-right"><?php echo $totalTopic; ?> / <?php echo $totalPosts; ?></span></a></li>			
					<?php } ?>
				</ul>
		   </div>
	   <?php } else if(!empty($_GET['category_id'])) { ?>	   
		   <div class="single category">
				<?php 
				$categories->category_id = $_GET['category_id'];
				$categoryDetails = $categories->getCategory();
				?>
				<span style="font-size:20px;"><a href="category.php"><< <?php echo $categoryDetails['name']; ?></a></span>
				<br>	<br>		
				<ul class="list-unstyled">
					<li><span style="font-size:20px;font-weight:bold;">Topics</span> <span class="pull-right"><span style="font-size:15px;font-weight:bold;">Posts</span></span></li>
					<?php
					$topics->category_id = $_GET['category_id'];
					$result = $topics->getTopicList();
					while ($topic = $result->fetch_assoc()) {
						$topics->topic_id = $topic['topic_id'];
						$totalTopicPosts = $topics->getTopicPostCount();
					?>
					<li><a href="post.php?topic_id=<?php echo $topic['topic_id'];?>" title=""><?php echo $topic['subject']; ?> <span class="pull-right"><?php echo $totalTopicPosts; ?></span></a></li>			
					<?php } ?>
				</ul>
		   </div>	   
	   <?php } ?>
	</div>		
</div>
<!-- <footer id="down">
    <div class="main-content">
      <div class="left box">
        <h2>About Us</h2><br>
          <div class="content"><br>
              <p>Discovering your perfect career or stream cannot get easier than our unique, scientific approach to career guidance.
                  <br><br>Through an effective process to cater to every need, your career confusion doesn't stand a chance.</p>
          </div>
      </div>
      <div class="center box">
          <h2>
          Contact Us</h2><br>
          <div class="content"><br><br>
                      <div class="place">
                      <a href="https://www.google.com/maps/place/Plot+C,+66,+G+Block+BKC,+Bandra+Kurla+Complex,+Bandra+East,+Mumbai,+Maharashtra+400051/@18.972672,73.1152384,13z/data=!3m1!4b1!4m2!3m1!1s0x3be7c8c299cc9f7b:0x4f83e27756706630" target="_blank"><span class="fas fa-map-marker-alt"></span></a>
                      <span class="text">Plot C-66,G-Block,BKC,Mumbai</span>
                      </div>
          <div class="phone">
                      <a href="tel:9967831501"><span class="fas fa-phone-alt"></span></a>
                      <span class="text">+91 87449 87449</span>
                      </div>
          <div class="email">
                      <a href="mailto:contact@nextstep.com"><span class="fas fa-envelope"></span></a>
                      <span class="text">contact@nextstep.com</span>
                      </div>
          </div>
          </div>
          <div class="right box">
                  <h2>Be the first one to know</h2><br>
          <div class="content"><br>
                      <form action="#">
                          <div class="email">
                              <div class="text">
                                  Provide your email to stay updated on new offers and events
                              </div>
                          <div class="inputWithIcon">
                                  <input type="text" placeholder="Email">
                                  <i class="fa fa-envelope fa-lg fa-fw"></i>
                          </div>
                      </form>
         <div class="btnn">
          <button type="submit">Subscribe</button>
                      </div>
      </div>
          </div>
          
    </div>
  </footer>
  <div class="foot">
      <div class="social">
          <ul>
          <li><a href="https://www.facebook.com/nextstepinnovation/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/nextstep_edu_solutions/" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCGDvfpcPAPywnT4vUgLJViQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
          <li><a href="https://twitter.com/nextstepi" target="_blank"><i class="fa fa-twitter" ></i></a></li>
          <li><a href="https://www.nextstepinnovation.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          </ul>
      </div>
      <br><br>
      <p class="bottom-text">2017 &copy; Nextstep.Ltd. All rights reserved.</p>
  </div> -->

  <!-- <div class="foot">
      <div class="social">
          <ul>
          <li><a href=""><i class="fa fa-facebook"></i></a></li>
          <li><a href=""><i class="fa fa-instagram"></i></a></li>
          <li><a href=""><i class="fa fa-youtube"></i></a></li>
          <li><a href=""><i class="fa fa-twitter"></i></a></li>
          <li><a href=""><i class="fa fa-google-plus"></i></a></li>
          </ul>
      </div>
      <br><br>
      <p class="bottom-text">2017 &copy; Nextstep.Ltd. All rights reserved.</p>
  </div> -->