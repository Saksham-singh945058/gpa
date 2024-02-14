<?php
  session_start();

// include '_nav.php';
include '_dbconnect.php';

$filename=$_FILES['myfile']['name'];
$filesize=$_FILES['myfile']['size'];
$filetype=$_FILES['myfile']['type'];
$tem_name=$_FILES['myfile']['tmp_name'];


$about="this is  a image";
$location="tempfolder/";
$query="insert into gallery(gname,about,dor) values('$filename','$about',now())";
if(mysqli_query($conn,$query)){
    move_uploaded_file($tem_name,$location.$filename);

    echo "<script> alert('Picture has sucessfully added for the userpannel to limit the value of the dep input in registation page!');window.location.href='gallery.php';</script>";
}
else{
  echo "<script> alert('Insertion failed!');window.location.href='gallery.php';</script>";

}
//   $_SESSION['loggedin'] = true;
  $_SESSION['gallery'] = $gallery;
  // header("location:register.php");




// include '_footer.php';


?>