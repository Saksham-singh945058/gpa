<?php
include("_dbconnect.php");
$cid = $_REQUEST['cid'];
// echo $sid;

$query = "delete  from complain where cid='$cid'";
mysqli_query($conn,$query);
header("location:cmt.php?msg=1");
?>;