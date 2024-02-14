<?php
include("_dbconnect.php");
$yid = $_REQUEST['yid'];
// echo $cid;

$query = "delete  from year where yid='$yid'";
mysqli_query($conn,$query);
header("location:year.php?msg=1");
?>;
