<?php
session_start();
  

   $con = mysqli_connect('localhost','root');
   	// if($con){
   	// 	echo"connection";
   	// }
   	mysqli_select_db($con,'registration');
   ?>
<?php
if(isset($_GET['edit'])){
  $User=$_GET['edit'];
  
  $sqlll = "UPDATE users SET action='disable' WHERE User_id=$User";


  $con->query($sqlll);
  header('location: admin_page.php');
}
if(isset($_GET['edit2'])){
  $User=$_GET['edit2'];

  $sqlll = "UPDATE users SET action='enable' WHERE User_id=$User";

  $con->query($sqlll);
  header('location: admin_page.php');
}
?>