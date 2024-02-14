<?php
  session_start();

// include '_nav.php';
include '_dbconnect.php';

$complain=$_POST['complain'];
$sql ="insert into complain(comname,dor) values('$complain',now())";

if(mysqli_query($conn,$sql)){
 
  echo "<script> alert('Department has sucessfully added for the userpannel to limit the value of the dep input in registation page!');window.location.href='cmt.php';</script>";
}
else{
  echo "<script> alert('Insertion failed!');window.location.href='cmt.php.php';</script>";


}
//   $_SESSION['loggedin'] = true;
  $_SESSION['complain'] = $complain;
  // header("location:register.php");




// include '_footer.php';


?>