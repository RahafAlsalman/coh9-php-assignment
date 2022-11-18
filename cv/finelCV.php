<?php require './header.php';

// git index.php data 
$name    =$_POST['txtName'];
$lname   =$_POST['txtLname'];
$age     =$_POST['txtAge'];
$ginder  =$_POST['txtGender'];
$country =$_POST['txtLocation'];
$picc    =$_POST['txtImg'];

//git data 1

$emai     =$_POST['txtEmail'];
$linked   =$_POST['txtLinked'];
$githup   =$_POST['txtGithup'];
$number  =$_POST['txtNumber'];

// git data 2

$school    =$_POST['highSchool'];
$colog  =$_POST['txtColog'];
$magor   =$_POST['txtMagor'];
$graduation  =$_POST['txtStart'];
$cours  =$_POST['txtCourses'];
?>

<!DOCTYPE html>

<html> 
<head>
 <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./m2-css.css">
  
<title> " My CV "</title>
</head>
<body>
     <header>
        <h1> My CV </h1>
<div id="right">
           <nav>
               <ul class="none" >
       <li> <a class="style" href ="https://www.linkedin.com/<?=$linked ;?>">Linkedin</a></li>
       <li><a  class="style" href="https://github.com/<?=$githup ;?>">Github</a></li>
            </ul>
               </nav>
               <img src="<?=$picc ;?>" width="200" height="200">
         </div>
            
                

          <section>
            
            <h2><?=$name.''. $lname;?></h2>
            <p> I am ambitious and driven.I thrive on challenge and constantly set goals for myself,
              so I have something to strive toward
            </p>
             </section>
                          <hr>
              <main>
            <section class="none">
            <h2><strong>Education</strong></h2>
       <li> <p>B.S in <?=$magor ;?> |<?=$colog ;?> <time datetime="<?=$graduation ?>"> <?=$graduation ?></time></li>
       <li><div class="none"> Jordan Certificate of Secondary Education |<?=$school ?></div> </p> </il>
       </section>
             <section class="none">
           <h2><strong>Courses</strong></h2>
      <li> <p><?=$cours ?></li>
      <li> <div></div></li>
         </p>
           </section>
           <section class="none">
    <h2><strong>Work Experience</strong></h2>
    <p><li> Traind for three months |Ammar Bin Yseer</li>
      <br>
        <div><li>taught physics,chemistry and english </li></div>
    </p>
                </main>
                      </section>
                     <hr>
          <!--============================COMMUNICATION==============================
          =============================================================================-->
          
         <footer></footer>
         <div id="COMMUNICATION" >
          <p >creation dat:<time datetime="2022-10-09">9<sup>th</sup>of Oct 2022</time></p>
          <address >
            <a class="comm" href ="mailto:<?=$emai ?>"><?=$emai ?></a>
            <a class="comm" href="tel:<?= $number ?>"><?=$number ?></a>
          </address>
          </div>
         </footer>