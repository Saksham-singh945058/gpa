<?php
include("_dbconnect.php");
$nid = $_REQUEST['nid'];
// echo $cid;

$query = "delete  from notice where nid='$nid'";
mysqli_query($conn,$query);
header("location:notice.php?msg=1");
?>;
