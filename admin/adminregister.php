<?php
$conn = mysqli_connect("localhost","root","","gpa");
  $showalert=false;
 $showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
  $showerror=false;
$name = $_POST['name'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
// echo $email;
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];
$city = $_POST['city'];
$pincode= $_POST['pincode'];
$address = $_POST['address'];
$course = $_POST['course'];
$session = $_POST['session'];
$college = $_POST['college'];
// $exists =="false";
if(($password==$cpassword) ){
$sql = "INSERT INTO register( name,fname,gender,email,password,mobile,dob,city,pincode,address,course,session,college,status,dor) VALUES ('$name','$fname','$gender','$email','$password','$mobile','$dob','$city','$pincode','$address','$course','$session','$college','N',current_timestamp());
";
$result = mysqli_query($conn,$sql);
if($result){
  $showalert=true;
}
}
else{
  // echo "username or password is wrong";
  // header("location:signup.php");
$showerror= " Your passwrod does not match";
}
}


// require '_nav.php';

if($showalert){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Welcome!</strong> Your account is created 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

header("location:login.php");

}
if($showerror ){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>OOps!</strong>'. $showerror.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
 header("location:register.php");

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
<link rel="stylesheet" href="admin\css\bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Responsive Regisration Form </title>
   <style>

</head>
<body>

    <img src="images\home_index.jpg" alt="">
    <div class="container">
        <header>
            <div class="upperbox">
                <!-- <h1>Registration</h1> -->
            </div>
            <br>
<div class="icon">
<i class='bx bx-user' ></i>


</div>
        </header>

        <form action="register.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <br><br>
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name.." name="name" required>
                        </div>

                        <div class="input-field">
                            <label>ID</label>
                            <input type="number" placeholder="Enter your id..." name="fname" required>
                        </div>

                     
                        <div class="input-field" id=unstructuredinput>
                            <label>Gender</label>
                           <br>
                                <input type="radio" name="gender" value="male" style="display:block;" >Male
                                <input type="radio" name="gender" value="female" style="display:block;" >Female
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email.." name="email">
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="text" placeholder="Enter your password" name="password" >
                        </div>
                        <div class="input-field">
                            <label> Confirm Password</label>
                            <input type="text" placeholder="Enter your cpassord" name="cpassword" >
                        </div>
                          

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" name="mobile" >
                        </div>
                        <div class="input-field">
                            <label>D.O.B</label>
                            <input type="date" placeholder="Enter your dob" name="dob" >
                        </div>

                     
                        <div class="input-field">
                            <label>City</label>
                            <select    name="city"    >
                                <option disabled selected>--Select city--</option>
                                <option>Azamgarh</option>
                                <option>Lucknow</option>
                                <option>Prayagraj</option>
                            </select>
                        </div>



                    </div>
                </div>

                






                        
                    <button type="submit" class="btn btn-success" id="submitbutt">Register</button>
                </div> 
            </div>

         
        </form>
    </div>
    <br>

    <script src="script.js"></script>

</body>
</html>