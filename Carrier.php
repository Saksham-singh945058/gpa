<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is the service page of the gpa website</title>
    <link rel="stylesheet" href="style.css"/>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
<!-- <link rel="stylesheet" href="css\bootstrap.min.css"> -->
<style>
  .companylogoscrollingleft img{
    border:2px solid purple;

  }
</style>
</head>
<body>
 <!-- this is the header section -->
 <!-- <nav>
  <a href="index.php"><img src="logo.png" alt=""  id="logo"></a>
  <div class="navlinks">
    <ul>
 <li><a href="index.php">Home</a></li>

 <li><a href="Aboutcollege.php">ABOUT COLLEGE</a></li>
      <li><a href="Course.php" class="keepamainpagelinkgreen">COURSE</a></li>
      <li><a href="Carrier.php">CARRIER</a></li>

      <li><a href="Contact.php">CONTACT US</a></li>
    </ul>
  </div>
</nav> -->
      <!-- <li><a href="#">MORE</a></li> -->

<!-- end of the header section -->
<div>

  <?php
include("_header.php");
?>
</div>


<div class="copy">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\carrier images1.jpg" class="d-block w-100" alt="..." style="width:70vw;height:50vh;">
    </div>
    <div class="carousel-item">
      <img src="img\carrier1.jpeg" class="d-block w-100" alt="..." style="width:70vw;height:50vh;">
    </div>
    <div class="img\carrier2.jpeg">
      <img src="..." class="d-block w-100" alt="..." style="width:70vw;height:50vh;">
    </div>
  </div>
</div>

</div>



<div class="companylogoscrollingleft">

<marquee behavior="scroll" direction="left">
  <img src="img\1com.png" alt="">
  <img src="img\2com.png" alt="">
  <img src="img\3com.png" alt="">
  <img src="img\4com.png" alt="">
  <img src="img\5com.png" alt="">
  <img src="img\6com.png" alt="">
  <img src="img\7com.png" alt="" style="height:42px;">
  <img src="img\8com.png" alt="" >
  <img src="img\3com.png" alt="">
  <img src="img\2com.png" alt="">


</marquee>

</div>


<br>
<br>
<?php
include("_footer.php");
?>
</body>
</html>