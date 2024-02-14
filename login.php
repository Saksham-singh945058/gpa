<?php
session_start();
$conn = mysqli_connect("localhost","root","","gpa");

  $showalert=false;
  $login=false;
  $showerror=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $showerror=false;
$email = $_POST['email'];
$password = $_POST['password'];
// echo $name;
$_SESSION['user']=$email ;

$password = $_POST['password'];
// echo $password;
$sql="select * from register where email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==1){
  $login=true;
  // session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['email'] = $email;
  // header("location:admin/dashboard.php");
  echo "<script> alert('You have loggedin suceessfully');window.location.href='dashboard.php';</script>";



}
else{

// $showerror= " Your passwrod does not match";
echo "<script> alert('Your password does not match!');window.location.href='login.php';</script>";

}
}


// require '_nav.php';

if($login){
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Welcome!</strong> Your profile is showing.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
// if($showerror ){
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>OOps!</strong>'. $showerror.'
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
}

?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page for grs</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  width: 100%;
  padding: 0 10px;
animation:changebackground 10s infinite linear;
background-image:url("img/pixel/laptop_running.jpg");
background-repeat:no-repeat;
background-size: cover;
}

body::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  /* background: url("https://www.codingnepalweb.com/demos/create-glassmorphism-login-form-html-css/hero-bg.jpg"), #000; */
  
  background-position: center;
  background-size: cover;
  /* background-color:purple; */
}
@keyframes changebackgroun
{
0% {
 /* background-image: url("images.jpg");
  */
  background:white;
 opacity:1;
  }
  20% {
    /* background-image: url("pexels-karolina-grabowska-4736067.jpg"); */
    background-color:black;

    opacity:1;
  }
    40% {
    /* background-image: url("download (1).jpg"); */
    background-color: brown;
    opacity:1;
  }
  60% {
    /* background-image: url("donload.jpg"); */
    background-color: blue;
    opacity:1;
  }
  80% {
    /* background-image: url("logo.png"); */
    background-color:blueviolet;
    opacity:1;
  }

  100% {
    /* background-image: url("download (3).jpg"); */
    background-color: aqua;
    opacity:1;
  }

}

.wrapper {
  /* background-color:purple; */
  background-color:purple;
  width: 400px;
  border-radius: 8px;
  padding: 30px;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(9px);
  -webkit-backdrop-filter: blur(9px);
  /* border:3px solid white; */
  box-shadow:5px  5px 1px white;
  position:absolute;
  /* left:560px; */
  margin:auto;
  height:95vh;
}


.wrapper:hover{
  
}


form {
  display: flex;
  flex-direction: column;
}

h2 {
  font-size: 2rem;
  margin-bottom: 30px;
  color: white;
}

.input-field {
  position: relative;
  border-bottom: 2px solid #ccc;
  margin: 15px 0;
}

.input-field label {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  color: #fff;
  font-size: 16px;
  pointer-events: none;
  transition: 0.15s ease;
}

.input-field input {
  width: 100%;
  height: 40px;
  background: transparent;
  border: none;
  outline: none;
  font-size: 16px;
  color: #fff;
}

.input-field input:focus~label,
.input-field input:valid~label {
  font-size: 0.8rem;
  top: 10px;
  transform: translateY(-120%);
}

.forget {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 25px 0 35px 0;
  color: #fff;
}

#remember {
  accent-color: #fff;
}

.forget label {
  display: flex;
  align-items: center;
}

.forget label p {
  margin-left: 8px;
}

.wrapper a {
  color: #efefef;
  text-decoration: none;
}


.wrapper a:hover {
  text-decoration: underline;
  
}

button {
  background: #fff;
  color: #000;
  font-weight: 600;
  border: none;
  padding: 12px 20px;
  cursor: pointer;
  border-radius: 3px;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 1.0s ease;
}

button:hover {
  color: #fff;
  border-color: #fff;
  /* background: rgba(255, 255, 255, 0.15); */
  background:green;
  font-size:18px;
  font-weight:bolder;
  border:2px solid white;
  opacity:5;
}

.register {
  text-align: center;
  margin-top: 30px;
  color: #fff;
}
form input{
  border-radius:1px;
}
#usericon{
  font-size:60px;
  opacity:10;
  color:white;
  margin-top:-47px;

}
#imgbox{
width:100vw;
height:100vh;
}
img{
  width:100%;
  height:100%;
  background-size:cover;
}
  </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
  <div id="imgbox">
    <img src="images\registration.jpg" alt="">
  </div>
  <div class="wrapper">
    <form action="login.php" method="post">
    <i class="bi bi-person-check" id="usericon"></i>
      
    <h2>Login</h2>
        <div class="input-field">
        <input type="email" name="email" required>
        <label style="font-size:16px;">Enter your Email...</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label  style="font-size:16px;">Enter your password...</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#" style="color:red;">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>