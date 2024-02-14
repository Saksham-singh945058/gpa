<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
      .dropdown:hover>.dropdown-menu{
    display:block;


  }
  /* background-image: linear-gradient(to right, purple,tomato,purple);  */
#logo{  
  min-height: 80px;
  border-radius: 50%;
  border:2px solid black;

}
  .navbar{
    position:fixed;
    max-height:20vh;
background: linear-gradient(to right, purple,tomato,purple);
top:0px;
}
ul{
  margin-left: 120px;
 
}
ul li{
  padding:2px;

}
.nav-link{
font-size:20px; 
}
ul li a{

  font-size:20px;
}
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" id="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
              Courses
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cse.php">Computer Science Enngineering</a></li>
              <li><a class="dropdown-item" href="me.php">Mechanical Enginnering</a></li>
              <li><a class="dropdown-item" href="ee.php">Electrical Engineering</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="pgdca.php">PGDCA</a></li>
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Facilities
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="hostel.php">Hostel</a></li>
              <li><a class="dropdown-item" href="lab.php">Labs</a></li>
              <li><a class="dropdown-item" href="library.php">Library</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="playground.php">Playground</a></li>
              <li><a class="dropdown-item" href="wifi.php">Wi-Fi</a></li>
              <li><a class="dropdown-item" href="water.php">Water Supply</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carrier.php">Carrier</a>
          </li>
        
            <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
            <!-- <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="carrier.php">Hostel</a></li>
              <li><a class="dropdown-item" href="#">Labs</a></li>
              <li><a class="dropdown-item" href="#">Library</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Playground</a></li>
              <li><a class="dropdown-item" href="#">Wi-Fi</a></li>
              <li><a class="dropdown-item" href="#">Water Supply</a></li>
            </ul> -->
            
<!-- Admission Enquiry

9808857152,7068749310


admission@govtpolytechnicatraulia.com -->
        

        </ul>
          <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
      </div>
    </div>
<script src="js/bootstrap.bundle.js"></script>
<br><br>  
