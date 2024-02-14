<?php
session_start();  
?>  
<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="admin\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="admin/css/bootstrap.min.css">
  <script src="admin/js/bootstrap.bundle.js"></script>
        <style>
    li a{
      margin-left:-20px;
    }
    li a i{
      margin-left:10px;
    }
    li a span{
      margin-left:20px;
    }
  </style>
    </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <div id="logo">
        <img src="../img/logo.png" alt="logo" id="logoimg">
      </div>
      <!-- <i class='bx bx-user' ></i>
      <span class="logo_name">Admin</span> -->
      <h3 style="color:white;margin-left:20px;">GPA</h3>
    </div>
      <ul class="nav-links">
        <li>
          <a href="usermanagement.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">User Management</span>
          </a>
        </li>
        <li>
          <a href="department.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Department Mgnt.</span>
          </a>
        </li>

        <li>
          <a href="year.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Year Mgnt.</span>
          </a>
        </li>
       
        <li>
          <a href="cmt.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Complain Type Mgnt.</span>
          </a>
        </li>


<br>
        <li style="margin-top:-20px;">
          <a href="usermanagement.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Gallery  Management</span>
          </a>
        </li>
        <br>
        <li style="margin-top:-13px;">
          <a href="../discuss.php">
            <i class='bx bx-message'  ></i>
            <span class="links_name" >Discussion Forum</span>
          </a>
        </li>
</pre>
        <li>
          <a href="change.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Change Password</span>
          </a>
        </li>

        <li>
          <a href="../logout.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
       
          
        
      </ul>
  </div>
  
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard" style="color:purple;">Admin Pannel</span>
      </div>
      <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div> -->
      <div class="profile-details">
      <span class="admin_name">
       <b style="color:;">Welcome:</b>
       <?php
       include("_dbconnect.php");
       $query= "select name from admin";
       $res=mysqli_query($conn,$query);
$a=1;
while($row=mysqli_fetch_array($res))
{
    ?>
  
  <h3 style="color:purple;">


    <?php  echo $row['name'];  ?>
  </h3>

<?php
}
$a++;

?>

        </span>
        
      <!-- <img src="../images/admin_img.jpg" alt="admin" id="adminimg"> -->
      <i class="bi bi-person-workspace"></i>
      <!-- <i class='bx bx-list-ul' ></i> -->

        <!-- <img src="images\home_index.jpg" alt="profile"> -->
        <span class="admin_name"></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>


    <!-- card showig derails of users and number of complains and etc -->
    
    <div class="home-content">
      <div class="overview-boxes">
        
        <div class="box">
          <div class="right-side">
            <i class="bi bi-bag-check-fill" style="font-size:30px;margin-left:80px;"></i>
            <div class="box-topic" style="font-size:16px;">
            <br>
            Total 
 Registered Users:
              <?php
      include("_dbconnect.php");
$query ="select * from register order by id";
// $query ="select count(id) from tbl_user";
$res=mysqli_query($conn,$query);

$a = 0;
while($row=mysqli_fetch_array($res)){
       $a++;   
}
echo $a;




              ?>
            </div>
            <div class="number">
  
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">

      Up to now
            </span>
            </div>
          </div>
          <!-- <i class='bx bxs-cart-add cart two' ></i> -->
        </div>


        <div class="box" >
          <div class="right-side">
          <i class="bi bi-bell-slash" style="font-size:30px;margin-left:80px;"></i>
            <div class="box-topic"  style="font-size:16px;"> Not Processed Complaint</div>
            <?php
      include("_dbconnect.php");
$query ="select * from complain";
          $res=mysqli_query($conn,$query);
$a = 0;
while($row=mysqli_fetch_array($res)){
       $a++;   
}
echo $a;




              ?>
            <div class="number">

            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Upto yesterday</span>
            </div>
          </div>
          <!-- <i class='bx bxs-cart-add cart two' ></i> -->
        </div>

        <div class="box">
          <div class="right-side">
          <i class="bi bi-bar-chart-line-fill" style="font-size:30px;margin-left:80px;"></i>
            <div class="box-topic" style="font-size:16px;"><br>Processing Complaints</div>
            <?php
      include("_dbconnect.php");
$query ="select * from complain ";
          $res=mysqli_query($conn,$query);
$a = 0;
while($row=mysqli_fetch_array($res)){
       $a++;   
}
echo $a;




              ?>
            <div class="number">
  
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Upto now</span>
            </div>
          </div>
          <!-- <i class='bx bxs-cart-add cart two' ></i> -->
        </div>

        <div class="box">
          <div class="right-side">
           
            <i class='bx bx-box' style="font-size:30px;margin-left:80px;margin-top:0px;"></i>
<br><br>
            <div class="box-topic" style="font-size:16px;">Closed
              
            Complaint</div>
            <?php
      include("_dbconnect.php");
$query ="select * from complain";
          $res=mysqli_query($conn,$query);
$a = 0;
while($row=mysqli_fetch_array($res)){
       $a++;   
}
echo $a;




              ?>
            <div class="number">
  
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Upto yesterday</span>
            </div>
          </div>
          <!-- <i class='bx bxs-cart-add cart two' ></i> -->
        </div>


       
        
      </div>

    

    <!-- <div class="home-content">
      <div class="overview-boxes">
        


</div>
</div> -->





      

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
