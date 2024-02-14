<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>This is the course website of the G.P.A official website</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
 <!-- this is the header section -->
 <!-- <nav>
  <a href="index.php"><img src="logo.png" alt=""  id="logo"></a>
  <div class="navlinks">
    <ul>
 <li><a href="index.php">Home</a></li>

 <li><a href="Aboutcollege.php">ABOUT COLLEGE</a></li>
      <li><a href="Carrier.php">CARRIER</a></li>

      <li><a href="Contact.php">CONTACT US</a></li>
    </ul>
  </div>
</nav> -->
<?php
      include("_header.php");
      ?>
<!-- end of the header section -->
<br><br> 
<section class="course">
  <h1>
    Courses
  </h1>
  <p class="p2">
    There is the four courses in the GPA that is the C.S.E,M.E,E.E and the PGDCA
  </p>
  <div class="row">
    <div class="coursecolumn">
      <h3>C.S.E
      </h3>
      <img src="computer science best images 3.jpg" alt="" height="150" width="200">
    <p> The Computer science & Engineering is the most popular diploma course across the world.and this college gives appartunity to pursue your study with Computer Science and Engineering.</p>
    
    </div>
    <div class="coursecolumn">
      <h3>M.E
      </h3>
      <img src="mechanical main logo not lab img1.jpg" alt="" height="150" width="200">
      <p>
        Mechanical engineeing is also a 3 year complete diploma course to encourage the skills in student by which the can become a more effective and well skilled engineers for our Country. this course gives a chance to beat the government jobs more smoothly.
         The Government plytechnic atraulia azamgarh has many professors and P.h.d holder to teach the whole syllabus with the theory and practical mentioned as per the UPBTE Lucknow.

      </p>
    </div>
    <div class="coursecolumn">
      <h3>E.E
      </h3>
      <img src="electrical engineering1.jpg" alt="" height="150" width="200">
      <p>We already know that the importance of the elctrical engineers for more developement across the world. To enroll with this course you can acces the more specified teachers guidence and more precision classes in the Government polytechnic atraulia azamgarh.</p>
    </div>
    
  </div>
</section >
<br><br><br>

<!-- footer start -->
<center>
<footer>
  <a href="#" class="fa fa-facebook" style="color:white;font-size:12px;">facebook</a>
  <a href="#" class="fa fa-twitter" style="color:white;font-size:12px;">Twitter</a>
  <a href="#" class="fa fa-google" style="color:white;font-size:12px;">Google</a>
  <a href="#" class="fa fa-linkedin" style="color:white;font-size:12px;">Linkedin</a>
  
</footer>
  </center>
  <br>
  <center>
  
  <br><br>
  
     All right reserved for Company &copy;
  
  </center>
  
  
<!-- footer end -->




















</body>
</html>
<?php
include("_footer.php");
?>