<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css\bootstrap.min.css">


<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
form input{
  border-radius:20px;

}
form input[placeholder]{
  color:green;
}
form textarea{
  border-radius:20px;

}
form textarea[placeholder]{
color:purple;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

#subbutt{
  margin-left:0px;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


@media (max-width:998px) {
#logo{
  height:170px;
  width:170px;

}
#map{
  height:100%;
  width:100%;
}
.inputheading{
  color:black;
  font-size:14px;
}
ul li a{
  font-weight:bolder;
}
}
@media (max-width:1100px) {
 #logo{
  height:90px;
  width:90px;
  
}  

#map{
  height:100%;
  width:100%;
}
.inputheading{
  color:black;
  font-size:14px;
}
ul li a{
  font-weight:bolder;
}
}
@media (max-width:768px) {
 #logo{
  height:100px;
  width:100px;
  
}

#map{
  height:100%;
  width:100%;
}
.inputheading{
  color:black;
  font-size:14px;
}
ul li a{
  font-weight:bolder;
}
}

@media (min-width:500px) {
 #logo{
  height:80px;
  width:80px;
  
}

#map{
  height:90%;
  width:100%;
  border:1px solid purple;
border-radius:5%;
}  
#map:hover{

}  
.inputheading{
  color:black;
  font-size:12px;
}
ul li a{
  font-weight:bold;
}
}
@media (max-width:568px) {
  #logo{
  height:70px;
  width:70px;
  
}
#map{
  height:80%;
  width:100%;
}  
.inputheading{
  color:black;
  font-size:12px;
}
ul li a{
  font-weight:bold;
}
}
</style>
</head>
<body>
 
<?php
      // include("_header.php");
      ?>
<!-- end of the header section -->


<div class="copy">

  <div class="container">
    <div style="text-align:center">
      <h1>Contact Us</h1>
    <p style="color:purple;">"Swing by for a cup of coffee, or leave us a message"
    <br>contact us for any complain/response/experience about the GPA.
    </p>
  </div>
  <div class="row">
    <div class="column">
      <img src="img/mapimg.jpg" style="width:100%" id="map">
    </div>
    <div class="column">
      <form action="/action_page.php" method="post">
        <label for="fname"><h2 class="inputheading">First Name</h2></label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname"><h2 class="inputheading">Last Name</h2></label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country"><h2 class="inputheading">Country</h2></label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject"><h2 class="inputheading">Subject</h2></label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" id="subbutt">
      </form>
    </div>
  </div>
</div>




</div>
<?php
      // include("_footer.php");
      ?>
</body>
</html>
