<?php
$yid = $_POST['nid'];
// echo $cid;
// $n = $_POST['n'];
// echo $n;

// $fn = $_POST['fn'];
// echo $fn;

$notice = $_POST['notice'];
// echo $session;


$about = $_POST['about'];
// echo $session;


$dor = $_POST['dor'];
// echo $e;

// $p = $_POST['p'];
// echo $p;

include("_dbconnect.php");
$query ="update notice set nname='$notice',dor='$dor',about='$about' where nid='$nid'";
mysqli_query($conn,$query);
header("location:notice.php");

?>