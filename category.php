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
	header('location: main.php');
}
?>
<html lang="en">
<head>
	<title>Next step-Discussion Forum</title> 
	<link rel="stylesheet" href="discuss.css">
	<link rel="stylesheet" href="css/all.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->
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
    <style>
        body{
            background: #abbaab;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ffffff, #abbaab);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ffffff, #abbaab); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}
		

  
        </style>
 
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
            <li><a href="resour.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fas fa-pencil-alt"></i> Hi, <?php echo $_SESSION['Username'] ?></a></li>
            <li><a href="logout.php" style="background:  #B22222 ;"><i class="fas fa-user"></i> Log Out</a></li>
        </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
</div>

<div class="container" style="font-family: Trebuchet MS, sans-serif;">		
	<div class="row">
		<h2 style="font-family: Trebuchet MS, sans-serif; margin-left:2%"><i class="fas fa-comment-dots"></i>Discussion Forum </h2>	
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
				<span style="font-size:20px;"><a href="category.php"> <?php echo $categoryDetails['name']; ?></a></span>
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



