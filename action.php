<?php
session_start();
include_once 'config/Database.php';
include_once 'class/Post.php';
$database = new Database();
$db = $database->getConnection();
$post = new Post($db);
if(!empty($_POST['message']) && $_POST['message'] && $_POST['action'] == 'save') {	
	$post->message = $_POST['message'];
	$post->user_id = $_SESSION['User_id'];
	$post->topic_id = $_POST['action1'];
	$post->insert();	
}
if(!empty($_POST['message']) && $_POST['message'] && $_POST['action'] == 'update') {	
	$post->message = $_POST['message'];
	$post->post_id = $_POST['post_id'];	
	$post->update();	
}
?>
<!-- <script>  
  $(document).ready(function(){  
      $('#save').click(function(){  
			var message = $('#post_message_').val(); 
			  
			if(message=='')
			{
                $('#error_message').html("Post something");  
            }  
            else  
            {  
                $('#error_message').html('');  
                $.ajax({  
                      url:"post.php",  
                      method:"POST",  
                      data:{message:message},  
                      success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                                $('#success_message').fadeOut("Slow");  
                          }, 2000);  
                      }  
                });  
            }  
      });  
  });  
</script> -->