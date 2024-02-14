<?php
$cid = $_POST['cid'];
// echo $cid;
// $n = $_POST['n'];
// echo $n;

// $fn = $_POST['fn'];
// echo $fn;

$depname = $_POST['depname'];
// echo $session;

$dor = $_POST['dor'];
// echo $e;

// $p = $_POST['p'];
// echo $p;

include("../_dbconnect.php");
$query ="update department set depname='$depname',dor='$dor' where did='$did'";
mysqli_query($conn,$query);
header("location:college.php");

?>