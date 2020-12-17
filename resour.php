<?php
session_start(); 
if (isset($_SESSION['Username'])){  
if (empty($_SESSION['interest'])) {
 header('location: index.php');
}

}
else
{
  header('location: main.php');
}



$con = mysqli_connect('sql12.freemysqlhosting.net', 'sql12381650', 'AcbcLhuB5u', 'sql12381650');
// if($con){
// 	echo"connection";
// }

$now=$_SESSION['Username'];
$q8= " select * from users where Username='$now'";
$ansresul = mysqli_query($con,$q8);
$rowww = mysqli_fetch_array($ansresul);

$csv = array();

$interest=$rowww['Interests'];

 if(($handle = fopen("mini.csv", "r")) !== FALSE)
 {
    while(($data = fgetcsv($handle, 1000, ",")) !== FALSE)
    {   
        $csv[] = $data;
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Next step-Resources</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resource.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        background: #EFEFBB;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #D4D3DD, #EFEFBB);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #D4D3DD, #EFEFBB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


      }
      h1{
        color: 	#483D8B ;
        font-family: "Poppins";
        margin-top: 35px;
        font-size: 25px;
      }
      h2{
        color: 	#483D8B ;
        font-family: "Poppins";
        margin-top: 35px;
        font-size: 25px;
      }
      h3{
        color: 	#800000;
        font-size: 23px;
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
        <li><a href="#down"><i class="fas fa-bookmark"></i> About</a></li>
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
                  <li><a href="#ca-vi" target="_blank">Udemy</a></li>
                  <li><a href="#ca-vi" target="_blank">Coursera</a></li>
                  <li><a href="#ca-vi" target="_blank">Youtube</a></li>
                  <li><a href="#ca-vi" target="_blank">Hacker Rank</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Career Articles</header><hr class="hr2">
                <ul class="mega-links">
                  <li><a href="#ca-arti">Subjects</a></li>
                  <li><a href="#ca-arti">Sites</a></li>
                  <li><a href="#ca-arti">Reference Books</a></li>
                  <li><a href="#ca-arti">E-Books</a></li>
                </ul>
              </div>
              <div class="row">
                <header>More</header><hr class="hr3">
                <ul class="mega-links">
                  <li><a href="#ca-col">Colleges</a></li>
                  <li><a href="#ca-scope">Scope</a></li>
                  <li><a href="index.php?change=reapti">Re-Aptitude</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="#"><i class="fas fa-pencil-alt"></i> Hi, <?php echo $_SESSION['Username'] ?></a></li>
        <li><a href="category.php"><i class="fas fa-comment"></i> Discuss</a></li>
        
        <li><a href="logout.php" style="background:  #B22222 ;"><i class="fas fa-user"></i> Log Out</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</header>
<!---------------------End Navigation------------------------------------->


<!--------------------------Main Body---------------------------------->


<div class="page"> 
  <h1 style=" text-align: center; font-size:32px; text-transform:uppercase;"><i class="fas fa-user-graduate"></i>  <?php echo ($interest) ?> </h1>
  <div class="slider">
    <?php
                    $j=4;
                    for($i=1;$i<71;$i++)
                    {
                        if($csv[$i][$j]==$interest)
                        {   if($csv[$i][1]=='Career Videos')
                          {
                            $cour[]=$csv[$i][3];
                            $Tit[]=$csv[$i][2];
                          }
                        }
                    }
                   
                    
    ?>
    <h3 class="slider-title" id="ca-vi"><i class="fas fa-video"></i>  Videos</h3>
    <i class="fas fa-chevron-left prev"></i>
    <i class="fas fa-chevron-right next"></i>
    <div class="ca-video">
      <div class="video">
        <img src="images/v1.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($cour[0]); ?>" target="_blank"><?php echo ($Tit[0]); ?>
        </h5></a>
          
        </div>
      </div>
      <div class="video">
        <img src="images/v2.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($cour[1]); ?>" target="_blank"><?php echo ($Tit[1]); ?></h5></a>
          
        </div>
      </div>
      <div class="video">
        <img src="images/v3.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($cour[2]); ?>" target="_blank"><?php echo ($Tit[2]); ?></h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/v4.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($cour[3]); ?>" target="_blank"><?php echo ($Tit[3]); ?></h5></a>
        </div>
      </div>
    </div>
  </div>


  <div class="slider">
    <h3 class="slider-title" id="ca-arti"><i class="fas fa-book"></i>  Reference Articles</h3>
    <div class="ca-article">
      <?php
                    $j=4;
                    for($i=1;$i<71;$i++)
                    {
                        if($csv[$i][$j]==$interest)
                        {   if($csv[$i][1]=='Career Articles')
                          {
                            $ar[]=$csv[$i][3];
                            $Titar[]=$csv[$i][2];
                          }
                        }
                    }
                   
                    
      ?>
      <div class="video">
        <img src="images/arti1.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($ar[0]); ?>" target="_blank"><?php echo ($Titar[0]); ?></h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/arti2.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($ar[1]); ?>" target="_blank"><?php echo ($Titar[1]); ?> </h5></a>
        </div>
      </div>
    </div>
  </div>


  <div class="slider">
    <?php
    $j=4;
    for($i=1;$i<71;$i++)
    {
        if($csv[$i][$j]==$interest)
        {   if($csv[$i][1]=='Colleges')
          {
            $col[]=$csv[$i][3];
            $Titcol[]=$csv[$i][2];
          }
        }
    }
   
    
    ?>
    <h3 class="slider-title" id="ca-col"><i class="fas fa-university"></i>  Colleges</h3>
    <i class="fas fa-chevron-left prev1"></i>
    <i class="fas fa-chevron-right next1"></i>
    <div class="ca-college">
      <div class="video">
        <img src="images/c1.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($col[0]); ?>" target="_blank"><?php echo ($Titcol[0]); ?></h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/c4.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($col[1]); ?>" target="_blank"><?php echo ($Titcol[1]); ?></h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/c3.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($col[2]); ?>" target="_blank"><?php echo ($Titcol[2]); ?></h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/c5.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($col[3]); ?>" target="_blank"><?php echo ($Titcol[3]); ?></h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/c2.png" alt="" class="video1">
        <div class="info">
          <h5><a href="<?php echo ($col[4]); ?>" target="_blank"><?php echo ($Titcol[4]); ?></h5></a>
        </div>
      </div>
    </div>
  </div>

  <div class="slider">
    <?php
                    $j=4;
                    for($i=1;$i<71;$i++)
                    {
                        if($csv[$i][$j]==$interest)
                        {   if($csv[$i][1]=='Scope')
                          {
                            
                            $Titsco[]=$csv[$i][2];
                          }
                        }
                    }
                   
                    
    ?>
    <h3 class="slider-title" id="ca-scope"><i class="fas fa-award"></i>  Future Scope</h3>
    <div class="ca-scope">
      <div class="video">
        <img src="images/s1.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="#" ><?php echo ($Titsco[0]); ?></h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/s2.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="#"> <?php echo ($Titsco[1]); ?></h5></a>
        </div>
      </div>
      <div class="video">
        <img src="images/s3.jpg" alt="" class="video1">
        <div class="info">
          <h5><a href="#"><?php echo ($Titsco[2]); ?></h5></a>
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
    autoplaySpeed: 1700,
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