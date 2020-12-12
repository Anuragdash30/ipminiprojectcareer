<?php 
 session_start(); 
 include('server.php');
if (isset($_SESSION['Username'])) {
  if(isset($_SESSION['Status']))
    {
      header('location: admin_page.php');
    }
    else{
    header('location: resour.php');
    }
  }
   




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/3.3.6/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                  <li><a href="#" target="_blank">Udemy</a></li>
                  <li><a href="#" target="_blank">Coursera</a></li>
                  <li><a href="#" target="_blank">Youtube</a></li>
                  <li><a href="#" target="_blank">Hacker Rank</a></li>
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
        <li><a href="#"><i class="fa fa-fw fa-comment"></i>Discuss</a></li>
        <li><a href="register.php" style="background:  #B22222 ;"><i class="fa fa-fw fa-user"></i>Register</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</header>

<div class="page">
  <div class="bg-img">
    <div class="cont">
      <header style="color:	#FFDEAD;">Login</header>
      <form method="post" action="login.php">
      <?php include('errors.php'); ?>
      
        <div class="field">
          <span class="fa fa-user"></span>
          <input id="text" type="text" id="Username" name="Username">
        </div>
<div class="field space">
          <span class="fa fa-lock"></span>
          <input id="text2" type="password"  class="pass-key"  name="Password">
          <span class="show">SHOW</span>
        </div>
        <?php if (isset($_SESSION['errors'])): ?>
    <div class="form-errors">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <p><?php echo $error;
             ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<div class="field">
        
          <input type="submit" id="login_user" value="LOGIN" name="login_user">
        </div>
        <!-- <?php 
        //  if (isset($_SESSION['message']))
        //   {
        //     echo ($_SESSION['message']);
        //     unset($_SESSION['message']);
        //   } ?> -->
        <span id="error_message" class="text-danger" style="color:white"></span>  
        <span id="success_message" class="text-success" style="color:white"></span>
</form>
<div class="signup">
Not a member yet ?
        <a href="register.php">Sign Up</a>
      </div>
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
 
<footer style="background: white">
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
</body>
</html>
<script>  
  $(document).ready(function(){  
      $('#login_user').click(function(){  
            var Username = $('#text').val();  
            var Password = $('#text2').val();  
            if(Username == '' || Password == '')  
            {  
                $('#error_message').html("All Fields are required");  
            }  
            else  
            {  
                if(results!= 1){
                  $('#error_message').html("All  are wrong required");

                }
                else{
                
                $('#error_message').html('');  
                $.ajax({  
                      url:"server.php",  
                      method:"POST",  
                      data:{Username:Username, Password:Password},  
                      success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                                $('#success_message').fadeOut("Slow");  
                          }, 2000);  
                      }  
                });  
            }  }
      });  
  });  
  </script>

<!-- <script>  
  $(document).ready(function(){  
      $('#login_user').click(function(){  
            var Username = $('#text').val();  
            var Password = $('#text2').val();  
            if(Username == 'Username'  Password == '')  
            {  
                $('#error_message').html("All Fields are required");  
            }  
            else  
            {  
                $('#error_message').html('');  
                $.ajax({  
                      url:"server.php",  
                      method:"POST",  
                      data:{Username:Username, Password:Password},  
                      success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                                $('#success_message').fadeOut("Slow");  
                          }, 2000);  
                      }  
                });  
            }  
      });  
  });  
  </script> -->

