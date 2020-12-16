
<?php
session_start(); 
if (isset($_SESSION['Username'])){  
 header('location: resour.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Next step-Home </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="resource.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        background: whitesmoke;
      }
      h2{
        color: 	#483D8B ;
        font-family: "Poppins";
        font-size: 40px;
      }
      h3{
        color: 	#800000;
        font-size: 23px;
      }
      .info a{
        font-family: 'Poppins';
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

<!---------------------Navigation------------------------------------->

<header>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="register.php"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#down"><i class="fas fa-bookmark" ></i> About</a></li>
        <li>
          <a href="#" class="desktop-item"><i class="fas fa-globe"></i> Explore</a>
          <input type="checkbox" id="showMega">
          <label style="font-size: 15px;" for="showMega" class="mobile-item"><i class="fas fa-globe"></i> Explore</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="images/navbar.jpg" alt="">
              </div>
              <div class="row">
                <header>Career Videos</header><hr class="hr1">
                <ul class="mega-links">
                  <li><a href="#c-vi" target="_blank">Udemy</a></li>
                  <li><a href="#c-vi" target="_blank">Coursera</a></li>
                  <li><a href="#c-vi" target="_blank">Youtube</a></li>
                  <li><a href="#c-vi" target="_blank">Hacker Rank</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Career Articles</header><hr class="hr2">
                <ul class="mega-links">
                  <li><a href="#c-arti">Subjects</a></li>
                  <li><a href="#c-arti">Sites</a></li>
                  <li><a href="#c-arti">Reference Books</a></li>
                  <li><a href="#c-arti">E-Books</a></li>
                </ul>
              </div>
              <div class="row">
                <header>More</header><hr class="hr3">
                <ul class="mega-links">
                  <li><a href="#c-col">Colleges</a></li>
                  <li><a href="#c-scope">Scope</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="register.php"><i class="fas fa-pencil-alt"></i> Register</a></li>
        <li><a href="login.php" style="background:  #B22222 ;"><i class="fas fa-user"></i> Log In</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</header>
<!---------------------End Navigation------------------------------------->


<!--------------------------Main Body---------------------------------->

<section class="web-title">
    <div class="web-background">
        <h1 style="padding-top: 4.5em;">Discover your perfect career...</h1>
        <h3>We give direction to your dreams</h3>
        <a href="register.php"><button class="main-button" style="margin-top: 3em;">Know More</button></a>
    </div>  
</section>
<div class="page">
  <div class="slider">
    <h3 class="slider-title" id="c-vi">Career Videos</h3>
    <i class="fas fa-chevron-left prev"></i>
    <i class="fas fa-chevron-right next"></i>
    <div class="ca-video">
      <div class="video">
        <img src="images/youtube.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="register.php" style="font-size: 19px;">Youtube</h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/udemy.png" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php"  style="font-size: 19px;">Udemy</h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/hacker.png" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php" style="font-size: 19px;">Hacker Rank</h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/coursera.png" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php" style="font-size: 19px;">Coursera</h5></a>
        </div>
      </div>
    </div>
  </div>


  <div class="slider">
    <h3 class="slider-title" id="c-arti">Career Articles</h3>
    <div class="ca-article">
      
      <div class="video">
        <img src="images/book.jpg" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php" style="font-size: 19px;">Books</h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/notes.jpg" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php" style="font-size: 19px;">Reference Materials</h5></a>
        </div>
      </div>
    </div>
  </div>


  <div class="slider">
    <h3 class="slider-title" id="c-col">Top Colleges</h3>
    <i class="fas fa-chevron-left prev1"></i>
    <i class="fas fa-chevron-right next1"></i>
    <div class="ca-college">
      <div class="video">
        <img src="images/jj.jpg" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php"  style="font-size: 19px;">Art Colleges</h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/c3.jpg" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php" style="font-size: 19px;">Medical</h5></a>  
        </div>
      </div>
      <div class="video">
        <img src="images/iit.jpg" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php"  style="font-size: 19px;">Technology</h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/iim.jpg" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php" style="font-size: 19px;">Management</h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/law.jpg" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php"  style="font-size: 19px;">Law</h5></a>
        </div>
      </div>
    </div>
  </div>

  <div class="slider">
    <h3 class="slider-title" id="c-scope">Future Scope</h3>
    <div class="ca-scope">
      <div class="video">
        <img src="images/science.jpg" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php" style="font-size: 19px;">Science</h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/commerce.jpg" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php" style="font-size: 19px;">Commerce</h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/arts.jpg" alt="" class="video1">
        <div class="info">
            <h5><a href="register.php" style="font-size: 19px;">Arts</h5></a>
        </div>
      </div>
    </div>
  </div>


</div>
<!--------------------------End Main Body---------------------------------->

<!-- <div class="page">
  
</div> -->
 
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
  $('.ca-video').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 805,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
            
          }
        },
        {
          breakpoint: 578,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
});

$('.ca-college').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  nextArrow: $('.next1'),
  prevArrow: $('.prev1'),
  responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 805,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 578,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
});

$('.ca-article').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
  nextArrow: $('.next2'),
  prevArrow: $('.prev2'),
  responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 805,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 578,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
});

$('.ca-scope').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
  nextArrow: $('.next3'),
  prevArrow: $('.prev3'),
  responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 805,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 578,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
});
</script>
</body>
</html>

