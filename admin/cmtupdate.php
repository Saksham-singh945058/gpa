<?php
$cid = $_POST['cid'];
// echo $comid;
// $n = $_POST['n'];
// echo $n;

// $fn = $_POST['fn'];
// echo $fn;

$complain = $_POST['complain'];
// echo $session;

$dor = $_POST['dor'];
// echo $e;

// $p = $_POST['p'];
// echo $p;

include("_dbconnect.php");
$query ="update complain set comname='$complain',dor='$dor' where cid='$cid'";
mysqli_query($conn,$query);
header("location:cmt.php");

?>