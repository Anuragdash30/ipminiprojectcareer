<?php
session_start();
  

   $con = mysqli_connect('localhost', 'id16643964_sql12381650', 'lgm4[>)}]jT8n=CQ', 'id16643964_sqlhosted');
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