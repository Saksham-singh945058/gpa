<?php
  session_start();

// include '_nav.php';
include '_dbconnect.php';

$notice=$_POST['notice'];
$about=$_POST['about'];
$sql ="insert into notice(nname,about,dor) values('$notice','$about',now())";

if(mysqli_query($conn,$sql)){
 
  echo "<script> alert('Department has sucessfully added for the userpannel to limit the value of the dep input in registation page!');window.location.href='notice.php';</script>";
}
else{
  echo "<script> alert('Insertion failed!');window.location.href='notice.php.php';</script>";


}
//   $_SESSION['loggedin'] = true;
  $_SESSION['department'] = $department;
  // header("location:register.php");




// include '_footer.php';


?>