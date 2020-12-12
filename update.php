<?php
session_start();
  if (!isset($_SESSION['Username'])) {
    header('location: check.php');
  }

   $con = mysqli_connect('localhost','root');
   	// if($con){
   	// 	echo"connection";
   	// }
     mysqli_select_db($con,'registration');
     
   ?>
   <?php
             //$counter = 0;
             
            if(isset($_POST['submit1'])){
                $name= $_SESSION['Username'];
                
                $sql = "UPDATE users SET Interests='$_POST[submit1]' WHERE Username='$name'";

                $con->query($sql);
                
                
                header('location: resour.php');
            }
            if(isset($_POST['submit2'])){
                $namee= $_SESSION['Username'];
                $sqll = "UPDATE users SET Interests='$_POST[submit2]' WHERE Username='$namee'";
                $con->query($sqll);
                header('location: resour.php');
            }
            ?>