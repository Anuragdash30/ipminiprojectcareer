<?php
session_start();
if (isset($_SESSION['Username'])) {
    if(isset($_SESSION['Status']))
  {
    header('location: admin_page.php');
  }
$Username=$_SESSION['Username'];

include_once 'config/Database.php';
include_once 'class/Category.php';
include_once 'class/Topic.php';
include_once 'class/Post.php';
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
<!DOCTYPE html>
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
	<style>
	.ok h1{
		width:100%;
		background-color:#242526;
		height:80px;
		margin:auto;
		align-items:center;
		color:white;
	}
	h1 img{
		height:80px;
		width:130px;
		padding-top:15px;
		padding-bottom:15px;
		margin-left:5%;
	}
	</style>
</head>
<body>
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

<?php include ('inc/container.php'); ?>
<div class="container">		
	<div class="row">
		<h2>Discussion Forum nextstep</h2>
		<div id="postLsit">				
		<?php if(!empty($_GET['topic_id'])) { ?>	   
		   <div class="posts list">
				<?php 
				$topics->topic_id = $_GET['topic_id'];
				$topicDetails = $topics->getTopic();
				?>
				<span style="font-size:20px;"><a href="category.php?category_id=<?php echo $topicDetails['category_id']; ?>"><< <?php echo $topicDetails['subject']; ?></a></span>
				<br><br>
				<?php				
				$result = $topics->getPosts();
				
				while ($post = $result->fetch_assoc()) {
					$date = date_create($post['created']);
					$posterName = $post['username'];
					
				?>
				<article class="row" id="postRow_<?php echo $post['post_id']; ?>">
					<div class="col-md-2 col-sm-2 hidden-xs">
					  <figure class="thumbnail">
						<img class="img-responsive" src="images/user-avatar.png" />
						<figcaption class="text-center"><?php echo ucwords($posterName); ?></figcaption>
					  </figure>
					</div>
					<div class="col-md-10 col-sm-10">
					  <div class="panel panel-default arrow left">
						<div class="panel-body">
						  <header class="text-left">
							<div class="comment-user"><i class="fa fa-user"></i> By: <?php echo $posterName; ?></div>
							<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?php echo date_format($date, 'd M Y H:i:s'); ?></time>
						  </header>
						  <br>					  
						  <div class="comment-post"  id="post_message_<?php echo $post['post_id']; ?>">
							
							<?php echo $post['message']; ?>
							
						  </div>
						  
						  <textarea name="message" data-topic-id="<?php echo $post['topic_id']; ?>" id="<?php echo $post['post_id']; ?>" style="visibility: hidden;"></textarea><br>
						  
						  <div class="text-right" id="button_section_<?php echo $post['post_id']; ?>">
							<a class="btn btn-default btn-sm" id="edit_<?php echo $post['post_id']; ?>"><i class="fa fa-reply"></i> Edit</a>
							<a class="btn btn-default btn-sm"><i class="fa fa-reply"></i> Delete</a>
						  </div>
						  
						
							
						<div id="editSection_<?php echo $post['post_id']; ?>" class="hidden">						
							<button type="submit" id="save_<?php echo $post['post_id']; ?>" name="save" class="btn btn-info saveButton">Save</button>
							<button type="submit" id="cancel_<?php echo $post['post_id']; ?>" name="cancel" class="btn btn-info saveButton">Cancel</button>
						</div>					
						</div>					
				
					  </div>
					</div>
				</article>	
				<?php } ?>
				
		   </div>	   
	   <?php } ?>
		
	
		<form id="posts" name="posts" method="post">
			<textarea name="message" id="message"></textarea><br>	
			<input type="hidden" name="action" id="action" value="save" />
			<input type="hidden" name="action1" id="action" value=<?php echo $_GET['topic_id'] ?> />
			<button type="submit" id="save" name="save" class="btn btn-info saveButton"  >Post</button>
			<button type="submit" id="save" name="save" class="btn btn-info saveButton" onclick='window.location.reload(true);' ><a href="<?php $_SERVER['PHP_SELF']; ?>">Refresh</button></a>
		</form>		
		<span id="error_message" class="text-danger" style="color:white"></span>  
    	<span id="success_message" class="text-success" style="color:white"></span>
	</div>
	
	<div id="postHtml" class="hidden">					
		<article class="row">
			<div class="col-md-2 col-sm-2 hidden-xs">
			  <figure class="thumbnail">
				<img class="img-responsive" src="images/user-avatar.png" />
				<figcaption class="text-center">USERNAME</figcaption>
			  </figure>
			</div>
			<div class="col-md-10 col-sm-10">
			  <div class="panel panel-default arrow left">
				<div class="panel-body">
				  <header class="text-left">
					<div class="comment-user"><i class="fa fa-user"></i> By: USERNAME</div>
					<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> POSTDATE</time>
				  </header>
				  <div class="comment-post" id="post_message_POSTID">					
					POSTMESSAGE					
				  </div>
				  <textarea name="message" id="POSTID" style="visibility: hidden;"></textarea><br>
				  <div class="text-right" id="button_section_POSTID">
					<a class="btn btn-default btn-sm" id="edit_POSTID"><i class="fa fa-reply"></i> Edit</a>
					<a class="btn btn-default btn-sm"><i class="fa fa-reply"></i> Delete</a>
				  </div>
				  
				  <div id="editSection_POSTID" class="hidden">						
					<button type="submit" id="save_POSTID" name="save" class="btn btn-info saveButton">Save</button>
					<button type="submit" id="cancel_POSTID" name="cancel" class="btn btn-info saveButton">Cancel</button>
				 </div>	
				 
				</div>
			  </div>
			</div>
		</article>		
	</div>	
	
</div>

</body>
</html>
