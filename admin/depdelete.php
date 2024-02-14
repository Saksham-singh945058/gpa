<?php
include("_dbconnect.php");
$did=$_REQUEST['did'];
// echo $cid;

$query = "delete  from department where did='$did'";
mysqli_query($conn,$query);
header("location:department.php?msg=1");
?>;



