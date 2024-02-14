<?php
$conn = mysqli_connect("localhost","root","","gpa");

if($_SERVER["REQUEST_METHOD"]=="POST"){ 
$name = $_POST['name'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$mobile =  $_POST['mobile'];
if(($password==$cpassword) ){
$sql = "INSERT INTO register( name,fname,gender,email,password,mobile,dor) VALUES ('$name','$fname','$gender','$email','$password','$mobile',current_timestamp());
";
$result = mysqli_query($conn,$sql);
if($result){
// echo "You have registered successfully";
echo "<script> alert('You have Registered suceessfully');window.location.href='login.php';</script>";

}
}
else{
//  echo "You are not able to registered . Please try again";
echo "<script> alert('You are not able to registered . Please try again');window.location.href='index.html  ';</script>";

}
}


?>
<?php
include("_footer.php");
?>