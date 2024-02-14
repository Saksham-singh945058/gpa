<?php
  session_start();

// include '_nav.php';
include '_dbconnect.php';

$year=$_POST['year'];
$sql ="insert into year(yrname,dor) values('$year',now())";

if(mysqli_query($conn,$sql)){
 
  echo "<script> alert('Department has sucessfully added for the userpannel to limit the value of the dep input in registation page!');window.location.href='year.php';</script>";
}
else{
  echo "<script> alert('Insertion failed!');window.location.href='year.php.php';</script>";


}
//   $_SESSION['loggedin'] = true;
  $_SESSION['year'] = $year;
  // header("location:register.php");




// include '_footer.php';


?>