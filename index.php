<?php 
  session_start(); 
  
  if (isset($_SESSION['Username'])) {
    if(isset($_SESSION['Status']))
  {
    header('location: admin_page.php');
  }
    $comn=mysqli_connect('sql12.freemysqlhosting.net', 'sql12381650', 'AcbcLhuB5u', 'sql12381650');
   
    $name= $_SESSION['Username'];
    $idse = "select * from users where Username='$name'";
    $ansresults = mysqli_query($comn,$idse);
    $rows = mysqli_fetch_array($ansresults);
    if(!empty($rows['Interests']))
    { if($_GET['change']!='reapti')
      {
        
      $_SESSION['interest']=$rows['Interests'];
      header('location: resour.php');
      }
      else{
      $_SESSION['update']=11;
      }
    }
    
    $con=mysqli_connect('sql12.freemysqlhosting.net', 'sql12381650', 'AcbcLhuB5u', 'sql12381650');
  
    
  }
  else{
    header('location: main.php');
  }
  

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Next step-Aptitude</title>
	 <meta charset="utf-8">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="aptitude.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      
      body{
            background: #abbaab;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ffffff, #abbaab);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ffffff, #abbaab); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        .foot{
	bottom: 0px;
    position: relative;
    height: 105px;
    background-color: black;
    width: 100%;
    padding-top: 37px;
    display: inline-block;
}
.social ul {
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 0;
    margin: 0;
    display: flex;
}
.social ul li {
    list-style: none;
    margin: 0 10px;
}
.social ul li .fab {
    color: black;
    font-size: 15px;
    line-height: 31px;
    transition: .5s;
}
.social ul li .fab:hover {
    color: #ffffff;
}
.social ul li a {
    position: relative;
    display: block;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color:#ffffff;
    text-align: center;
    transition: 0.5s;
    transform: translate(0,0px);
    box-shadow: 0px 4px 2px rgba(255, 255, 255, 0.5);
}
.social ul li a:hover {
    transform: rotate(0deg) skew(0deg) translate(0, -10px);
}
.social ul li:nth-child(1) a:hover {
    background-color: #3b5999;
}
.social ul li:nth-child(2) a:hover {
    background-color: #E1306C;
}
.social ul li:nth-child(3) a:hover {
    background-color: #cd201f;;
}
.social ul li:nth-child(4) a:hover {
    background-color: #55acee;;
}
.social ul li:nth-child(5) a:hover {
    background-color: #DD4B39;
}
.bottom-text{
	text-align: center;
	font-size: 11px;
	color:  #656565;
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
        <li><a href="#down"><i class="fas fa-bookmark"></i> About</a></li>
        <li><a href="#"><i class="fas fa-pencil-alt"></i> Hi, <?php echo $_SESSION['Username'] ?></a></li>
        <!-- <li><a href="category.php"><i class="fas fa-comment"></i> Discuss</a></li> -->
        <li><a href="logout.php" style="background:  #B22222 ;"><i class="fas fa-user"></i> Log Out</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</header>
<div class="page">
  <div class="head">
  	<h2 style="font-family: 'Poppins';"><i class="fas fa-user-edit"></i>  Aptitude Test</h2>
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
              <?php } ?>
      <?php } ?>
      </div>
    <?php } ?>
    
    
    <input type="submit" name="submit" value="Submit" class="abtn">
  </form>       
</div>
        

<footer id="down">
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
                      <span class="text">Plot C-66,BKC,Mumbai</span>
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
                                  <i class="fas fa-paper-plane"></i>
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
          <li><a href="https://www.facebook.com/nextstepinnovation/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://www.instagram.com/nextstep_edu_solutions/" target="_blank"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCGDvfpcPAPywnT4vUgLJViQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
          <li><a href="https://twitter.com/nextstepi" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://www.nextstepinnovation.com/" target="_blank"><i class="fab fa-google"></i></a></li>
          </ul>
      </div>
      <br><br>
      <p class="bottom-text">2017 &copy; Nextstep.Ltd. All rights reserved.</p>
  </div>
</body>
</html>