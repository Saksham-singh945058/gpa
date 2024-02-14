<?php
  session_start();

// include '_nav.php';
include '_dbconnect.php';

$department=$_POST['department'];
$sql ="insert into department(depname,dor) values('$department',now())";

if(mysqli_query($conn,$sql)){
 
  echo "<script> alert('Department has sucessfully added for the userpannel to limit the value of the dep input in registation page!');window.location.href='college.php';</script>";
}
else{
  echo "<script> alert('Insertion failed!');window.location.href='college.php.php';</script>";


}
//   $_SESSION['loggedin'] = true;
  $_SESSION['department'] = $department;
  // header("location:register.php");




// include '_footer.php';


?>