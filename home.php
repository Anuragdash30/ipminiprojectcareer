<?php
session_start(); 
  
  if (isset($_SESSION['Username'])) {
  	header('location: resour.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="home_header.css">
    <link rel="stylesheet" href="home_footer.css">
    <link rel="stylesheet" href="mainpg.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/3.3.6/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
  </head>
<body>

<!---------------------Navigation------------------------------------->

<header>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="register.php"><img src="images/logo.png"></a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="register.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
        <li><a href="register.php" target="#nameabout"><i class="fa fa-fw fa-bookmark"></i>About</a></li>
        <li>
          <a href="register.php" class="desktop-item"><i class="fa fa-fw fa-globe"></i>Explore</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item"><i class="fa fa-fw fa-globe"></i>Explore</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="images/navbar.jpg" alt="">
              </div>
              <div class="row">
                <header>Career Videos</header><hr class="hr1">
                <ul class="mega-links">
                  <li><a href="register.php" target="_blank">Udemy</a></li>
                  <li><a href="register.php" target="_blank">Coursera</a></li>
                  <li><a href="register.php" target="_blank">Youtube</a></li>
                  <li><a href="register.php" target="_blank">Hacker Rank</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Career Articles</header><hr class="hr2">
                <ul class="mega-links">
                  <li><a href="register.php">Subjects</a></li>
                  <li><a href="register.php">Sites</a></li>
                  <li><a href="register.php">Reference Books</a></li>
                  <li><a href="register.php">E-Books</a></li>
                </ul>
              </div>
              <div class="row">
                <header>More</header><hr class="hr3">
                <ul class="mega-links">
                  <li><a href="register.php">Colleges</a></li>
                  <li><a href="register.php">Scope</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="register.php"><i class="fa fa-fw fa-comment"></i>Discuss</a></li>
        <li><a href="register.php"><i class="fa fa-fw fa-pencil"></i>Register</a></li>
        <li><a href="login.php" style="background:  #B22222 ;"><i class="fa fa-fw fa-user"></i>Log In</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</header>

<!---------------------End Navigation------------------------------------->


<!--------------------------Main Body---------------------------------->


<main>
    <section class="web-title">
        <div class="web-background">
                <h3></h3>
                <h3>One step ahead</h3>
                <h1>Discover your perfect career</h1>
                <h3>We give direction to your dreams</h3>
                <button type="submit" class="main-button" name="main">Know More</button>
                
        </div>
    </section>
    
    <div class="career-v">
        <div class="heading"><h1>Career Videos</h1></div>
        <div class="careerbox" id="v1"><a href="register.php" target="_blank"><p>Udemy</p></a></div>
        <div class="careerbox" id="v2"><a href="register.php" target="_blank"><p>Youtube</p></a></div>
        <div class="careerbox" id="v3"><a href="register.php" target="_blank"><p>Coursera</p></a></div>
        <div class="careerbox" id="v4"><a href="register.php" target="_blank"><p>Hacker Rank</p></a></div>
    </div>
    <div class="career-a">
      <div class="heading"><h1>Reference Articles</h1></div>
        <div class="articlebox" id="arti1">
          <p>Career Articles</p>
          <input type="text" placeholder="Search" style="margin-top: 25px;">
        </div>
        <div class="articlebox" id="arti2">
          <p>Career Articles</p>
          <input type="text" placeholder="Search" style="margin-top: 25px;">
        </div>
    </div>
    <div class="colleges">
        <div class="heading"><h1>Colleges</h1></div>
        <div class="collegebox" id="c1"><a href="register.php" target="_blank"><p>IIT</p></a></div>
        <div class="collegebox" id="c2"><a href="register.php" target="_blank"><p>NIT</p></a></div>
        <div class="collegebox" id="c3"><a href="register.php" target="_blank"><p>BITS</p></a></div>
        <div class="collegebox" id="c4"><a href="register.php" target="_blank"><p>AIIMS</p></a></div>
        <div class="collegebox cd" id="c5"><a href="register.php" target="_blank"><p>Amity</p></a></div>
    </div>
    <div class="scope">
        <div class="heading"><h1>Scope</h1></div>
        <div class="scopebox" id="s1"><p>Science</p></div>
        <div class="scopebox" id="s2"><p style="margin-left: 40px; margin-right: 40px;">Commerce</p></div>
        <div class="scopebox sp" id="s3"><p>Arts</p></div>
    </div>
</main>
<!--------------------------End Main Body---------------------------------->
<div class="page">
  
</div>
 
<footer>
    <div class="main-content">
      <div class="left box">
        <h2>About Us</h2><br>
          <div class="content"><br>
              <p>Discovering your perfect career or stream cannot get easier than our unique, scientific approach to career guidance.
                  Through an effective process to cater to every need, your career confusion doesn't stand a chance.</p>
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
                      <span class="text">+91-9967831501</span>
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
         <div class="btn">
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
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>



