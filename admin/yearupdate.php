<?php
$yid = $_POST['yid'];
// echo $cid;
// $n = $_POST['n'];
// echo $n;

// $fn = $_POST['fn'];
// echo $fn;

$college = $_POST['year'];
// echo $session;

$dor = $_POST['dor'];
// echo $e;

// $p = $_POST['p'];
// echo $p;

include("_dbconnect.php");
$query ="update year set yrname='$year',dor='$dor' where yid='$yid'";
mysqli_query($conn,$query);
header("location:year.php");

?>