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
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="img\wifi1.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img\wifi2.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
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