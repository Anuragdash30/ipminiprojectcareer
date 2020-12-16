<?php
session_start();
  if (!isset($_SESSION['Username'])) {
    header('location: check.php');
  }

   $con =mysqli_connect('sql12.freemysqlhosting.net', 'sql12381650', 'AcbcLhuB5u', 'sql12381650');
   	// if($con){
   	// 	echo"connection";
   	// }
     
     
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