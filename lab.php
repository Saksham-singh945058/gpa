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
<div class="line">
<div class="card text-center col-sm-12">
  <div class="card-header" style="background: linear-gradient(to right, purple,tomato,purple);;color:white;font-size:18px;">
  <div class="smallboxonfront">

  Hostel Facility
  </div>
  </div>
</div>

<div class="copy">
<div class="card-group">
  <div class="card">
    <img src="img\lab3.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img\lab2.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="img\lab1.jpg" class="card-img-top" alt="...">
    
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>

<br>
<br>
<br>
<?php
include("_footer.php");
?>
</body>
</html>