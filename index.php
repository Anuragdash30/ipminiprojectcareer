<?php 
  session_start(); 
  
  if (isset($_SESSION['Username'])) {
    if(isset($_SESSION['Status']))
  {
    header('location: admin_page.php');
  }
    $comn=mysqli_connect('localhost','root');
    mysqli_select_db($comn,'registration');
    $name= $_SESSION['Username'];
    $idse = "select * from users where Username='$name'";
    $ansresults = mysqli_query($comn,$idse);
    $rows = mysqli_fetch_array($ansresults);
    if(!empty($rows['Interests']))
    {
      $_SESSION['interest']=$rows['Interests'];
      header('location: resour.php');
    }
    
    $con=mysqli_connect('localhost','root');
  
    mysqli_select_db($con,'registration');
  }
  else{
    header('location: register.php');
  }
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" type="text/css" href="aptitude.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/3.3.6/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      *{
        color :black;
      }
      </style>
</head>
<body>
<header>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="#"></i>Home</a></li>
        <li><a href="#down"></i>About</a></li>
        <li>
          <a href="#" class="desktop-item"></i>Explore</a>
          <input type="checkbox" id="showMega">
          <label style="font-size: 15px;" for="showMega" class="mobile-item"><i class="fa fa-fw fa-globe"></i>Explore</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="images/navbar.jpg" alt="">
              </div>
              <div class="row">
                <header>Career Videos</header><hr class="hr1">
                <ul class="mega-links">
                  <li><a href="#">Udemy</a></li>
                  <li><a href="#">Coursera</a></li>
                  <li><a href="#">Youtube</a></li>
                  <li><a href="#">Hacker Rank</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Career Articles</header><hr class="hr2">
                <ul class="mega-links">
                  <li><a href="#">Subjects</a></li>
                  <li><a href="#">Sites</a></li>
                  <li><a href="#">Reference Books</a></li>
                  <li><a href="#">E-Books</a></li>
                </ul>
              </div>
              <div class="row">
                <header>More</header><hr class="hr3">
                <ul class="mega-links">
                  <li><a href="#">Colleges</a></li>
                  <li><a href="#">Scope</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="category.php">Discuss</a></li>
        <li><a href="#">Hi,<?php echo $_SESSION["Username"]; ?></a></li>
        <li><a href="logout.php" style="background:  #B22222 ;">Log Out</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</header>
<div class="page">
  <div class="head">
  	<h2 style="font-family: 'Poppins';">Aptitude Test</h2>
  </div>
  <form action="check.php" method="post" name="aptitute">
    <div class="formcontent">
      <h3 style="color: black; text-align: center; font-family: 'Poppins';">Welcome 
      <?php 
      echo $_SESSION['Username'];
      ?>
      </h3>
    </div>

    <?php
    for ($i=1; $i < 21; $i++) { 
      $q="select * from questions where qid=$i";
      $query=mysqli_query($con,$q);
      while($rows=mysqli_fetch_array($query)){  
        ?>


        <div class="group">
          <h4> <?php echo $rows['question'] ?> </h4> 
          
            <?php
            
              # code...
              $q="select * from answers where ans_id=$i";
              $query=mysqli_query($con,$q);
              while($rows=mysqli_fetch_array($query)){  
              ?>
                <div style="font-size: 17px; text-align: left; margin: 10px 10px 10px 10px;">
                  <input type="radio" name="quizcheck[<?php echo $rows['ans_id'] ?>]" value="<?php echo $rows['aid']; ?>">
                  <?php echo $rows['answer']; ?>
                </div>

        

    <?php
      }
      }

      }


    ?>


          <input type="submit" name="submit" value="Submit" class="abtn">
        </form>
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
</body>
</html>