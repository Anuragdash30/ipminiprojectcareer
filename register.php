<?php 
session_start(); 
include('server.php');
  
if (isset($_SESSION['Username'])) {
  if(isset($_SESSION['interest']))
  {
  header('location: resour.php');
  }
  if(isset($_SESSION['Status']))
  {
    header('location: admin_page.php');
  }
  else
  {
    header('location: index.php');
  }
    
}


 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Next step- Register</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
        <li><a href="main.php"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="login.php" style="background:  #B22222 ;"><i class="fas fa-user"></i> Log In</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</header>

<div class="page">
    <div class="bg-img">
        <div class="cont">
          <header style="color:	#FFDEAD;">Register</header>
          <form method="POST" action="register.php">
            <?php include('errors.php'); ?>
            <div class="field">
              <span class="fas fa-user"></span>
              <input type="text" name="First_name" required placeholder="First Name" value="<?php echo $First_name; ?>">
            </div>
            <div class="field">
              <span class="fas fa-user"></span>
              <input type="text" name="Last_name" required placeholder="Last Name" value="<?php echo $Last_name; ?>">
            </div>
            <div class="field">
              <span class="fas fa-envelope"></span>
              <input type="email" name="Email_id" required placeholder="Email ID" value="<?php echo $Email_id; ?>">
            </div>
            <div class="field space">
              <span class="fas fa-lock"></span>
              <input type="password" name="Password" class="pass-key" required placeholder="Password">
              <span class="show">SHOW</span>
            </div>
            <div class="field">
              <span class="fas fa-phone-alt"></span>
              <input type="text" name="Phone_no" required placeholder="Phone" value="<?php echo $Phone_no; ?>">
            </div>
            <div class="field">
              <span class="fas fa-graduation-cap"></span>
              <input type="text" name="College_school" required placeholder="College/School" value="<?php echo $College_school; ?>">
            </div>
            <div class="field">
              <span class="fas fa-question"></span>
              <input type="text" name="Sure_unsure" required placeholder="Sure/Unsure" value="<?php echo $Sure_unsure; ?>">
            </div>
            <div class="field">
              <span class="fas fa-heart"></span>
              <input type="text" name="Interests" placeholder="Interests" value="<?php echo $Interests; ?>">
            </div>
            <div class="field">
              <span class="fas fa-user-circle"></span>
              <input type="text" name="Username" required placeholder="User Name" value="<?php echo $Username; ?>">
            </div>
  
  <div class="field" style="margin-top: 55px;">
              <input type="submit" value="REGISTER" name="reg_user">
            </div>
  </form>
  <div class="signup">
  Already a member ?
            <a href="login.php">Sign In</a>
          </div>
  </div>
  </div>
  <script>
        const pass_field = document.querySelector('.pass-key');
        const showBtn = document.querySelector('.show');
        showBtn.addEventListener('click', function(){
         if(pass_field.type === "password"){
           pass_field.type = "text";
           showBtn.textContent = "HIDE";
           showBtn.style.color = "#222";
         }else{
           pass_field.type = "password";
           showBtn.textContent = "SHOW";
           showBtn.style.color = "#222";
         }
        });
      </script>
</div>
<script>
    const pass_field = document.querySelector('.pass-key');
    const showBtn = document.querySelector('.show');
    showBtn.addEventListener('click', function(){
     if(pass_field.type === "password"){
       pass_field.type = "text";
       showBtn.textContent = "HIDE";
       showBtn.style.color = "#222";
     }else{
       pass_field.type = "password";
       showBtn.textContent = "SHOW";
       showBtn.style.color = "#222";
     }
    });
  </script>
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

