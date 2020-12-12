<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="header.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/3.3.6/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="#"><i class="fa fa-fw fa-home"></i>Home</a></li>
        <li><a href="#"><i class="fa fa-fw fa-bookmark"></i>About</a></li>
        <li>
          <a href="#" class="desktop-item"><i class="fa fa-fw fa-globe"></i>Explore</a>
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
                  <li><a href="#">Student Testimonials</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="category.php"><i class="fa fa-fw fa-comment"></i>Discuss</a></li>
        <li><a href="login.php" style="background:  #f12020 ;"><i class="fa fa-fw fa-user"></i>Log In</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
  


  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First name</label>
  	  <input type="text" name="First_name" value="<?php echo $First_name; ?>">
  	</div>

	<div class="input-group">
  	  <label>Last name</label>
  	  <input type="text" name="Last_name" value="<?php echo $Last_name; ?>">
  	</div>

	<div class="input-group">
  	  <label>Email id</label>
  	  <input type="email" name="Email_id" value="<?php echo $Email_id; ?>">
  	</div>

	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="Password">
  	</div>

	<div class="input-group">
  	  <label>Phone no</label>
  	  <input type="text" name="Phone_no" value="<?php echo $Phone_no; ?>">
  	</div>

	
	<div class="input-group">
  	  <label>College/School</label>
  	  <input type="text" name="College_school" value="<?php echo $College_school; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>Sure/Unsure</label>
  	  <input type="text" name="Sure_unsure" value="<?php echo $Sure_unsure; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>Interests</label>
  	  <input type="text" name="Interests" value="<?php echo $Interests; ?>">
  	</div>

	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="Username" value="<?php echo $Username; ?>">
  	</div>

  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>

  </form>


  


    
  <div class="foot">
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
  </div>

  


</body>
</html>