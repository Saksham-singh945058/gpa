<?php
session_start();

$op = $_POST['op'];
// echo $op;

$np = $_POST['np'];
// echo $np;

$cnp = $_POST['cnp'];
// echo $cnp;

//  $email=$_SESSION['user'] ;
$email="admin@gmail.com";
// echo $email;

$conn=mysqli_connect("localhost","root","","gpa");

$query ="select password from admin where email='$email' ";
$res = mysqli_query($conn,$query);


if($row=mysqli_fetch_array($res)){
$pp = $row['password'];
echo $pp;
echo "<br>";
}

if($op==$pp){

if($op==$np){
   
    echo "<script> alert('please choose another new password');window.location.href='change.php';</script>";

}
elseif($np==$cnp && $op!=$np){

    $query2 ="update admin set password='$cnp' where email='$email'";
           mysqli_query($conn,$query2);


  
           echo "<script> alert('Your password has successfully changed');window.location.href='adminlogin.php';</script>";
}
else{
session_destroy();
    echo "<script> alert('Your old password and Entered password are not same!');window.location.href='change.php';</script>";

  

}

}

else{
    echo "<script> alert('Your saved password and the login password are not same');window.location.href='change.php';</script>";

}
















?>