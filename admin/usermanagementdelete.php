<?php
include("_dbconnect.php");
$userid = $_REQUEST['userid'];
// echo $sid;

$query = "delete  from register where id='$userid'";
mysqli_query($conn,$query);
header("location:usermanagement.php?msg=1");
?>;