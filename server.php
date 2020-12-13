<?php
// session_start();

// initializing variables
$First_name = "";
$Last_name  = "";
$Email_id    = "";
$Phone_no    = "";
$College_school    = "";
$Sure_unsure    = "";
$Interests    = "";
$Username    = "";
$Status = "";




$errors = array(); 

// connect to the database
$db = mysqli_connect('sql12.freemysqlhosting.net', 'sql12381650', 'AcbcLhuB5u', 'sql12381650');
$db2 = mysqli_connect('sql12.freemysqlhosting.net', 'sql12381650', 'AcbcLhuB5u', 'sql12381650');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $First_name = mysqli_real_escape_string($db, $_POST['First_name']);
  $Last_name = mysqli_real_escape_string($db, $_POST['Last_name']);
  $Email_id = mysqli_real_escape_string($db, $_POST['Email_id']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);
  $Phone_no = mysqli_real_escape_string($db, $_POST['Phone_no']);
  $College_school = mysqli_real_escape_string($db, $_POST['College_school']);
  $Sure_unsure = mysqli_real_escape_string($db, $_POST['Sure_unsure']);
  $Interests = mysqli_real_escape_string($db, $_POST['Interests']);
  $Username = mysqli_real_escape_string($db, $_POST['Username']);




  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($First_name)) { array_push($errors, "First name is required"); }
  if (empty($Last_name)) { array_push($errors, "Last name is required"); }
  if (empty($Email_id)) { array_push($errors, "Email is required"); }
  if (empty($Password)) { array_push($errors, "Password is required"); }
  if (empty($Phone_no)) { array_push($errors, "Phone number is required"); }
  if (empty($College_school)) { array_push($errors, "College/school is required"); }
  if (empty($Sure_unsure)) { array_push($errors, "required"); }
  if (empty($Username)) { array_push($errors, "Username is required"); }




  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE Username='$Username' OR Email_id='$Email_id' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Username'] === $Username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email_id'] === $Email_id) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$Password = md5($Password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (First_name, Last_name, Email_id,Password,Phone_no,College_school,Sure_unsure,Interests,Username) 
  			  VALUES('$First_name', '$Last_name', '$Email_id','$Password','$Phone_no','$College_school','$Sure_unsure','$Interests','$Username')";
    mysqli_query($db, $query);
    $comn=mysqli_connect('sql12.freemysqlhosting.net', 'sql12381650', 'AcbcLhuB5u', 'sql12381650');
    
    $_SESSION['Username'] = $Username;
    $name= $_SESSION['Username'];
    $idse = "select * from users where Username='$name'";
    $ansresults = mysqli_query($comn,$idse);
    $rows = mysqli_fetch_array($ansresults);
    $id=$rows['User_id'];
    $query2 = "INSERT INTO forum_users (user_id, username, password,name,email) 
  			  VALUES('$id', '$Username','$Password','$First_name','$Email_id')";
    
    mysqli_query($db2, $query2);
    $_SESSION['interest']=$Interests;
    $_SESSION['Username'] = $Username;
    if($Sure_unsure=='Unsure'){
    header("Location: index.php");}
    else{
      header("Location: resour.php"); 
    }




  	
  }



}

if (isset($_POST['login_user'])) {
    $Username = mysqli_real_escape_string($db, $_POST['Username']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);

    if (empty($Username)) {
        array_push($errors, "Username is required");
    }
    if (empty($Password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {

        $Password = md5($Password);
        $query = "SELECT * FROM users WHERE Username='$Username' AND Password='$Password'";
        $sqla="SELECT * FROM users where Username='$Username' AND Password='$Password'";
        $results = mysqli_query($db, $query);
        $results2 = mysqli_query($db, $sqla);
        $row2 = mysqli_fetch_array($results2);
        
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['Username'] = $Username;
          
          
        }else {
          $_SESSION['errors'] = array("Your username or password was incorrect.");
          header("Location:login.php");
          
       }

        if($row2['Status']=='admin'){
          
          $_SESSION['Username'] = $Username;
          $_SESSION['Status']='admin'; 
          header('location:admin_page.php');
        }else{
          if($row2['action']=='enable')
          {
            $_SESSION['Username'] = $Username;
            $idse = "select * from users where Username='$Username'";
                $ansresults = mysqli_query($con,$idse);
                $rows = mysqli_fetch_array($ansresults);
                $_SESSION['User_id'] = $rows['User_id'];
          header('location:resour.php');
        }
          else{
            unset($_SESSION["Username"]);
            echo "Your account was disabled";
            header('location:login.php');
          }
        }
    }
  

  

  
  }?>
