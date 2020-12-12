<?php
session_start();
  if (isset($_SESSION['Username'])) {
	if(isset($_SESSION['Status']))
	{
	  header('location: admin_page.php');
	}
	if(!empty($_SESSION['interest']))
  {
	header('location: resour.php');
  }
  

  }else{
    header('location: register.php');
  }

   $con = mysqli_connect('sql12.freemysqlhosting.net', 'sql12381650', 'AcbcLhuB5u', 'sql12381650');
   	// if($con){
   	// 	echo"connection";
   	// }
   	
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/3.3.6/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background: #abbaab;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ffffff, #abbaab);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ffffff, #abbaab); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        table{
            align-items: center;
            width: 75%;
            position: relative;
            font-family: "Arial";
            margin: auto;
            margin-top: 60px;
            margin-bottom: 5em;
        }
        th,td{
            color: black;
            padding: 10px;
            height: 90px;
            font-size: 18px;
            font-family: "Poppins";
        }
        th{
            text-align: center;
            color: whitesmoke;
            background-color: #3b444b;
            border-top-left-radius: 35px;
            border-bottom-right-radius: 35px;
            font-size: 30px;
        }
        td{
            padding-left: 7%;
        }
        .abtn {
            position: relative;
            padding: 15px;
            font-size: 20px;
            color: white;
            background: #5F9EA0;
            border: none;
            border-radius: 5px;
        }
        .resulta h1{
            text-align: center;
            margin: auto;
            color: #2E8B57;
            font-family: "Poppins";
            margin-top: 2.5em;
            margin-bottom: 2.5em;
        }
        @media screen and (max-width: 578px){
          table{
            width: 90%;
          }
          td{
            font-size: 15px;
        }
        th{
            font-size: 22px;
        }
        .resulta h1{
            font-size: 25px;
        }
        }
        @media screen and (max-width: 800px){
            table{
            width: 85%;
          }
          .td{
            padding-left: 3%;
          }
          .abtn{
              margin-bottom: 15px;
              font-size: 15px;
              padding: 13px;
              border-radius: 2px;
          }
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
        <li><a href="#"><i class="fa fa-fw fa-home"></i>Home</a></li>
        <li><a href="#down"><i class="fa fa-fw fa-bookmark"></i>About</a></li>
        <li>
          <a href="#" class="desktop-item"><i class="fa fa-fw fa-globe"></i>Explore</a>
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
                  <li><a href="https://www.udemy.com/" target="_blank">Udemy</a></li>
                  <li><a href="https://www.coursera.org/" target="_blank">Coursera</a></li>
                  <li><a href="https://www.youtube.com/" target="_blank">Youtube</a></li>
                  <li><a href="https://www.hackerrank.com/" target="_blank">Hacker Rank</a></li>
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
        <li><a href="#"><i class="fa fa-fw fa-pencil"></i>Hi,<?php echo $_SESSION["Username"]; ?></a></li>
        <li><a href="#" style="background:  #B22222 ;"><i class="fa fa-fw fa-user"></i>Log Out</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</header>

<div class="page">
  <div class="resulta">
      <h1>Aptitude Results !!!</h1>
      <table>
          <tr>
              <th colspan="2">
                  Results
              </th>
          </tr>
          <div class="inside">
          <tr>
              <td style="padding-bottom: 30px; padding-top: 30px;">
                Questions Attempted
              </td>
              <form action="update.php" method="post" >
                <?php
                //$counter = 0;
                $Resultans = 0;
               if(isset($_POST['submit'])){
                 if(!empty($_POST['quizcheck'])) {
                 // Counting number of checked checkboxes.
                   $checked_count = count($_POST['quizcheck']);
                 // print_r($_POST);
               ?>
   
                     
                 
                       
                   <?php
                     // Loop to store and display values of individual checked checkbox.
                     $selected = $_POST['quizcheck'];
                     
                     $q1= " select * from questions ";
                     $q3= " select * from answers where map IS NOT NULL";
   
                     $ansresults = mysqli_query($con,$q1);
                     $ansresult = mysqli_query($con,$q3);
                    
                     
                     $i = 1;
                     $temp=0;
                     $x=0;
                     while($rows = mysqli_fetch_array($ansresults)) {
                       // print_r($rows);
                       $row = mysqli_fetch_array($ansresult);
                         $flag = $rows['ans_id'] == $selected[$i];
                         
                         if($flag){
                           
                           
                           $Resulta[$x]=$row['map'];
                           
                           $x++;
                           
                                     // echo "correct ans is ".$rows['ans']."<br>";				
                                 //$counter++;
                                 $Resultans++;
                                     // echo "Well Done! your ". $counter ." answer is correct <br><br>";
                         }else{
                             //$counter++;
                                     // echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
                         }					
                             $i++;		
                     }
                     
                     $arrlength = count($Resulta);
                     $arraystore[0]=0;
                    
                     $o=0;
                     $p=0;
                   
                     $values = array_count_values($Resulta);
                       arsort($values);
                       $popular = array_slice(array_keys($values), 0,2 , true);
                       
                      
                     $q4= " select * from answers where domain IS NOT NULL";
                     $ansresul = mysqli_query($con,$q4);
                         for($gg=0;$gg<count($popular);$gg++)
                         {	if($popular[$gg]==null)
                           {
                           break;
                           }		
                           for($e = 0; $e <20; $e++) {
                               $rowww = mysqli_fetch_array($ansresul);
                               if($popular[$gg]==$rowww['map'])
                               {
                               
                               $domainn[$gg]=$rowww['domain'];
                               break;
                               }
   
                           }
                           if($gg==2)
                           {
                           break;
                           }
                       }
                       
                       ?>
                       <?php $gg=0;?>
           
            
              <td style="padding-right: 20px; padding-bottom: 30px; padding-top: 30px;"">
                <?php echo "Out of 20, You have attempted ".$checked_count." questions."; ?>
              </td>
            
          </tr>
          <tr>
            <td >
              The choices Short Listed for you are 
            </td>
           
            <td style="padding-right: 20px;">
                <input type="submit" name="submit1" value=<?php echo ($domainn[$gg])  ?> class="abtn"> 
                <?php $gg++;?>
                <input type="submit" name="submit2" value=<?php echo ($domainn[$gg]) ?> class="abtn">
                <?php $gg++;?>
            </td>
        </tr>
    </div>
</form> 		
           <?php 

            }else{
            echo "<b>Please Select Atleast One Option.</b>";
            }
            } 
            ?>
             <?php 
              $name= $_SESSION['Username'];
              $finalresult="insert into user_ans(Username,totalques,answerscorrect) values ('$name','20','$Resultans')";
              $queryresult=mysqli_query($con,$finalresult);
              ?>
      </table>
  </div>
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
  </div>
</body>
</html>

