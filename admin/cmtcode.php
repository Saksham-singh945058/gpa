<?php

// include '_nav.php';
include '../_dbconnect.php';

$complain =$_POST['complain'];
$sql ="insert into tbl_complain(complain,status,dor) values('$complain','N',current_timestamp())";
$result=mysqli_query($conn,$sql);

  session_start();
  $_SESSION['complain'] = $complain;
//   header("location:register.php");



// include '_footer.php';


?>