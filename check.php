<?php
session_start();
  if (isset($_SESSION['Username'])) {
	if(isset($_SESSION['Status']))
	{
	  header('location: admin_page.php');
	}
	if(!empty($_SESSION['interest']))
  {
    if(!isset($_SESSION['update']))
    {
  header('location: resour.php');
    }
    else
    {
      unset($_SESSION['update']);
    }
  }
  

  }else{
    header('location: main.php');
  }

   $con = mysqli_connect('localhost', 'id16643964_sql12381650', 'lgm4[>)}]jT8n=CQ', 'id16643964_sqlhosted');
   	// if($con){
   	// 	echo"connection";
   	// }
   	
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Next step-Aptitude</title>
      <meta charset="utf-8">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
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
  <div class="resulta">
      <h1>Congratulations !!!</h1>
      <table>
          <tr>
              <th colspan="2"><i class="fas fa-trophy"></i>  Results
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

