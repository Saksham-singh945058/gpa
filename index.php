<!-- i am very excited while writing the GPA Project code programs -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Government Polytechnic Atraulia Azamgarh</title>
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="content_over_img.css">
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="typingeffect.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  .dropdown:hover>.dropdown-menu{
    display:block;
  }
</style>
<body>
  <!-- <section class="header">
    <nav>
      <a href="index.php"><img src="img/logo.png" id="logo" style="border:3px solid white;"></a>
      <div class="navlinks">
        <ul>
          <li><a href="Aboutcollege.php">ABOUT COLLEGE</a></li>
          <li><a href="Course.php" class="keepamainpagelinkgreen">COURSE</a></li>
          <li><a href="Faculty.php">FACULTIES</a></li>
          <li><a href="Carrier.php">CARRIER</a></li>

          <li><a href="Contact.php">CONTACT US</a></li>

        </ul>
      </div> -->
      <?php
      include("_header.php");
      ?>

    </nav>
    <div id="mainimg">
      <img src="img\last_time_home_img.jpg" alt="homeimage" download>

    </div>
    <div class="textbox" style="margin-top:-40px;margin-left:10px;">
      <!-- <h1><span class="_changecontent">GOVERNMNT POLYTECHNIC</span></h1> -->
      <!-- this is the code for the typing effect using js -->
      <div class="container100001">
        <h1 class="typingeffect">GOVERNMENT POLYTECHNIC ATRAULIA ,<span class="auto-type"></span> </h1>
      </div>
      <script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
      <script>
        var type= new Typed(".auto-type", {
          strings: ["Atraulia", "BY AICCEDS", "In PPP Mode"],
          typeSpeed: 70,
          backspeed: 100,
          loop: true
        });

      </script>

      <P class="somecontentforthefrontpage" >
        " This is one of the First PPP Mode  polytechnic college in U.P"<br>"Join the GPA campus for your better future and for
        achiving best position in the field of education "<br><br>

        <!-- <a href="" class="homebutton">Visit Us to know more</a> -->
        <!--     
         <button type="button" class="btn btn-success"> <a class="visitustoknowmore" href="signup.php">Signup</a>  </button> -->

        <!-- front page button ispe click krne -->
      


      </section>



<!--      
        <button type="button" class="btn btn- " id="homebutton"
          style="background-image: linear-gradient(to right, purple,tomato,purple);margin-left:10px;"> <a class="visitustoknowmore"
            href="admin/adminlogin.php">Login Here For admin</a> </button> -->

            
            
            <div class="homebutt" style="display:flex;position:relative;left:40%;margin-top:5px;">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:80px;height:30px;">
          <a  class="visitustoknowmore" style="font-size: 16px;">Signup</a>
        </button>


    
<div class="authentication">
<button type="button" class="btn btn- " id="homebutton"
          style="background-image: linear-gradient(to right, green,red,blue,green);margin-left:10px;height:35px;margin-top:0px;"> <a class="visitustoknowmore"
            href="admin/adminlogin.php ">Login Here
       
            <div class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <!-- <img src="student/<?php echo $pic;?>" alt="profile"> -->
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">User Login</a> </li>
            <li><a class="dropdown-item" href="admin/adminlogin.php">Admin Login</a></li>
          </ul>
  </div>
      </div>
          </a> </button>
</div>

            </div>
            
          </div>
      </div>


      <div class="card text-center col-sm-12">
  <div class="card-header" style="background: linear-gradient(to right, purple,tomato,purple);;color:white;font-size:18px;">
  <div class="smallboxonfront">

    Notices & Important Announcement
  </div>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text" style="display:flex;justify-content:center;align-items:center;font-size:20px;">

    <br>
    <br>
    <br>
    <br>

    <marquee behavior="scroll" direction="up"><a href="#" height="300px " width="500px" sst>Even Semester Scruitny Result</a></marquee>
    <marquee behavior="scroll" direction="down"><a href="#" height="300px " width="500px" sst>Even Semester Scruitny Result</a></marquee>
    </p>




  </div>
  <div class="card-footer text-body-primary">
    2 days ago
  </div>
</div>



      </div>  


<hr>
  <!--for a brinjal color liner box -->
 
  </div>
      </div>
    <center>

      <!-- <h4> <span class="smallboxonfront" ><u>Highlights</u> </span> </h4> -->
    </center>
  </div>
  <!-- second section of the main page -->
  <!--  full page tab -->

<div id="tab">

  <button class="tablink" onclick="openPage('Home', this, 'rgba(0, 0, 0, 0.562)')">UP Chief Minister Message</button>
  <button class="tablink" onclick="openPage('News', this, 'rgba(0, 0, 0, 0.562)')" id="defaultOpen">Chairman
    Message</button>
  <button class="tablink" onclick="openPage('Contact', this, 'rgba(0, 0, 0, 0.562)')">Principal Message</button>
  <button class="tablink" onclick="openPage('About', this, 'rgba(0, 0, 0, 0.562)')">Vice Principal Message</button>


  <div id="Home" class="tabcontent">
    <img src="img/chiefministerimage.jpg" alt="" class="tablinkimage">
    <h3>UP Chief Minister Message</h3>
    <p class="contentfromupersuperitendent">The Government Mission’s basic objective is to create a trained Skilled
      Manpower ofat least 500 million persons by 2030. It gives me immense joy to see the Government Polytechnic
      Atraulia Azamgarh First PPP Govt Polytechnic spreading its wings and taking steps towards redefining technical
      education in the state under PPP scheme. When we set up PPP mode in Government Polytechnic, our vision was to
      create a world class institution delivering quality technical education recognized by the industry, nationally and
      internationally. This is a challenge as well as an opportunity to do something innovative and futuristic for
      generations to come. The Government Polytechnic Atraulia Azamgarh under PPP mode must focus on producing
      employable students who will take India forward. For this we must design and run courses in consonance with the
      industry requirements. We must enable and support the students to achieve excellence in whichever field they wish
      to pursue at the college. I strongy believe that GPA, Azamgarh will become a model for Technical education in
      Uttar Pradesh.
      Government polytechnic Atraulia Azamgarh is aggremented 62.5% Seat (38 Seat)under Fully Governmented(JEECUP
      Code-4900) and 37.5 % Seat (22) under PPP category Self Financev Mode(JEECUP Code-4901) of Each Specilization.My
      heartiest wishes to the students who aspire to join the Government Polytechnic Atraulia Azamgarh, I extend my full
      support to the Government Polytechnic Atraulia Azamgarh team in taking the vision forward.
      YOGI ADITYANATH
      Hon’ble Chief Minister of Uttar Pradesh</p>
  </div>

  <div id="News" class="tabcontent">

    <img src="img/chairmanimage.jpg" alt="" class="tablinkimage">
    <h3>Chairman Message</h3>
    <p class="contentfromupersuperitendent">The Government Mission’s basic objective is to create a trained Skilled
      Manpower ofat least 500 million persons by 2030. It gives me immense joy to see the Government Polytechnic
      Atraulia Azamgarh First PPP Govt Polytechnic spreading its wings and taking steps towards redefining technical
      education in the state under PPP scheme. When we set up PPP mode in Government Polytechnic, our vision was to
      create a world class institution delivering quality technical education recognized by the industry, nationally and
      internationally. This is a challenge as well as an opportunity to do something innovative and futuristic for
      generations to come. The Government Polytechnic Atraulia Azamgarh under PPP mode must focus on producing
      employable students who will take India forward. For this we must design and run courses in consonance with the
      industry requirements. We must enable and support the students to achieve excellence in whichever field they wish
      to pursue at the college. I strongly believe that GPA, Azamgarh will become a model for Technical education in
      Uttar Pradesh.
      Government polytechnic Atraulia Azamgarh is aggremented 62.5% Seat (38 Seat)under Fully Governmented(JEECUP
      Code-4900) and 37.5 % Seat (22) under PPP category Self Financev Mode(JEECUP Code-4901) of Each Specilization.My
      heartiest wishes to the students who aspire to join the Government Polytechnic Atraulia Azamgarh, I extend my full
      support to the Government Polytechnic Atraulia Azamgarh team in taking the vision forward.
      Dr. Krishn Mohan Tripathi
      Chiarman GPAA and Manager AICCEDS Azamgarh</p>
  </div>

  <div id="Contact" class="tabcontent">
    <img src="img/principalimage.jpg" alt="" class="tablinkimage">
    <h3>Principal Message</h3>
    <p class="contentfromupersuperitendent">It gives me great pleasure to invite you to take an initial peek into the
      heart that beats behind the appealing façade of Government polytechnic Atraulia Azamgarh. I thank you for your
      interest in this institution which has recorded a constant development, in the course of which it has accomplished
      much, making it one of the colleges recognized for its excellence and therefore, much sought after by the fresh
      applicants. It is my great pleasure to welcome you to Government polytechnic Atraulia Azamgarh, run by Directorate
      of Technical Education Govt Of Uttar Pradesh and All India Children Care and Educational Development Society. It
      has a long-standing reputation in providing professional education. We are constantly reviewing our set up to
      update and improve while making sure that students gain skills, analytical frameworks, interpersonal and
      communication skills which will ladder them in their future. We also ensure to provide the students with a
      supportive and welcoming environment in which they will be encouraged to develop themselves personally and
      professionally. We prepare students for a bright and positive future in the competitive world. Government
      polytechnic Atraulia Azamgarh has highly qualified and dedicated faculties. Training and placement cell of
      Government polytechnic Atraulia Azamgarh is active throughout the year. It takes utmost care to place every
      student in the best place with best package. It also works to bridge the gap between industry and institution by
      arranging seminars and workshops engaged with the industry experts and academic experts. Government polytechnic
      Atraulia Azamgarh is a member of professional bodies which gives the students a vast exposure in the field of
      technology. The campus consists of good airy class rooms, well equipped laboratories, seminar hall, full fledged
      library, digital library, an admirable computer center with latest systems, software and internet facilities,
      hygienic cafeteria and mess with pleasant atmosphere. There is an ample of scope in co-curricular and
      extracurricular activities at Government polytechnic Atraulia Azamgarh wherein the students are encouraged to show
      their talents. The Institution ensures that the students to prove themselves not to be only well qualified
      engineers but also a responsible and ideal citizen for our country. I look forward in welcoming you to Government
      polytechnic Atraulia Azamgarh.

      About Us
      Mr. Subodh Kant Singh , Principal and Head of the Department (Computer Science & Eng), did his B.Tech in Computer
      Science & Engineering, M.Tech in Computer Science & Engineering and Ph.D in Computer Science & Engineering . He
      has 12 years experience of teaching under diploma ,graduate and post graduate students. He has organized and
      attended various workshops ,seminars and Published many Research Papers in various National and International
      repute Journals. He has Conducted Various Workshop/symposium for Latest Technologies like as Python, R
      Programming,Data Science,Machine Learning ,Cloud Computing etc according to demand of Current IT Industry.
      My heartiest wishes to the students who aspire to join the Government Polytechnic Atraulia Azamgarh, I extend my
      full support to the team member of Government Polytechnic Atraulia Azamgarh in taking the vision of Govt Of Uttar
      Pradesh regarding excellence of technical education forward.
      Subodh Kant Singh
      Principal
      B.Tech(CSE), M.Tech(CSE), Ph.D(CSE)</p>
  </div>

  <div id="About" class="tabcontent">
    <img src="chairmanimage.jpg" alt="" class="tablinkimage">
    <h3>Vice Principal Message</h3>
    <p class="contentfromupersuperitendent">The Government Mission’s basic objective is to create a trained Skilled
      Manpower ofat least 500 million persons by 2030. It gives me immense joy to see the Government Polytechnic
      Atraulia Azamgarh First PPP Govt Polytechnic spreading its wings and taking steps towards redefining technical
      education in the state under PPP scheme. When we set up PPP mode in Government Polytechnic, our vision was to
      create a world class institution delivering quality technical education recognized by the industry, nationally and
      internationally. This is a challenge as well as an opportunity to do something innovative and futuristic for
      generations to come. The Government Polytechnic Atraulia Azamgarh under PPP mode must focus on producing
      employable students who will take India forward. For this we must design and run courses in consonance with the
      industry requirements. We must enable and support the students to achieve excellence in whichever field they wish
      to pursue at the college. I strongly believe that GPA, Azamgarh will become a model for Technical education in
      Uttar Pradesh.
      Government polytechnic Atraulia Azamgarh is aggremented 62.5% Seat (38 Seat)under Fully Governmented(JEECUP
      Code-4900) and 37.5 % Seat (22) under PPP category Self Financev Mode(JEECUP Code-4901) of Each Specilization.My
      heartiest wishes to the students who aspire to join the Government Polytechnic Atraulia Azamgarh, I extend my full
      support to the Government Polytechnic Atraulia Azamgarh team in taking the vision forward.
      Dr. Sushma Yadav
      Vice Principal

      B.Tech(ME),M.Tech(ME), P.hD(ME) IIT BHU</p>
  </div>
</div>
  <!-- a box after highlight -->




<div class="card text-center col-sm-12">
  <div class="card-header" style="background: linear-gradient(to right, purple,tomato,purple);;color:white;font-size:18px;">
  <div class="smallboxonfront">
Aim
  </div>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">
      <p style="color:black;">This college hope that you are succeds in your life more and more 
        Here, We will help your to explore more in your diploma carrier. <br>
        <mark>"Till Then Keep Learning And Keep Exploring". 
          <br>
          Select * from 'world';
        </mark><br>
          <b> We Hope your All Dreams Comes True !</b>
      </p></p>
  </div>
 
</div>



      </div>  
  <hr>
  <script>
    function openPage(pageName, elmnt, color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
   <div class="card text-center col-sm-12">
  <div class="card-header" style="background: linear-gradient(to right, purple,tomato,purple);;color:white;font-size:18px;">
  <div class="smallboxonfront">
Highlights
  </div>
</div>
  <!-- Accordian by bootstrap -->
  <div class="informationcontainer">
    
  <div class="cardalternatives">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <h1> College Campus</h1>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is college campus information:</strong> There are a 6km expanded campus area in Government
            Polytechnic Atraula Azamgarh <code></code>, along with the green and airy environment.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
            aria-expanded="false" aria-controls="collapseTwo">
           <h1>Environment</h1>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin
            adds the appropriate classes that we use to style each element. These classes control the overall appearance,
            as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
            overriding our default variables. It's also worth noting that just about any HTML can go within the
            <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
           <h1>Others</h1>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin
            adds the appropriate classes that we use to style each element. These classes control the overall appearance,
            as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
            overriding our default variables. It's also worth noting that just about any HTML can go within the
            <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div>
    </div>    
    <!-- accordin end  -->

    <!-- card with side text code starts -->
    <div class="cardalternative">
  
  
      <div class="card mb-3"
        style="max-width: 100%; display:flex;justify-content: center;align-items:center;font-size:16px;" class="card">
        <div class="row g-0">
  
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title" >Wi-Fi</h5>
              <div class="col-md-4" style="position:absolute;right:2.0rem;">
                <img src="img\pixel\book.jpg" class="img-fluid rounded-start" alt="..." width="250" height="220"
                  style="overflow:hidden;margin-top:-40px;">
              </div>
  
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
          </div>
  
        </div>
        <br><br>
  
      </div>
  
  
  
  
      <div class="card mb-3"
        style="max-width: 100%; display:flex;justify-content: center;align-items:center;font-size:16px;" class="card">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img\my_digicoder.jpg" class="img-fluid rounded-start" alt="..." width="250" height="250"
              style="overflow:hidden;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title" >Award Winners Students</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
         
          </div>
        </div>
      </div>
      
  
  
      
      <div class="card mb-3"
        style="max-width: 100%; display:flex;justify-content: center;align-items:center;font-size:16px;" class="card">
        <div class="row g-0">
  
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title" "> Classrooms</h5>
              <div class="col-md-4" style="position:absolute;right:2.0rem;">
                <img src="img\classroom_cse.jpg" class="img-fluid rounded-start" alt="..." width="250" height="250"
                  style="overflow:hidden;position:relative;top:-30px;">
              </div>
  
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <br><br><br>
      </div>

     
      <div class="card mb-3"
        style="max-width: 100%; display:flex;justify-content: center;align-items:center;font-size:16px;" class="card">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/pixel/chair.jpg" class="img-fluid rounded-start" alt="..." width="270" height="250"
              style="overflow:hidden;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title" style="color:rgb(255, 253, 255);">Furnitures</h5>
              <p class="card-text" ">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
             </div>
        </div>
      </div>
          </div>




          <div class="card text-center col-sm-12">
  <div class="card-header" style="background: linear-gradient(to right, purple,tomato,purple);;color:white;font-size:18px;">
  <div class="smallboxonfront">
Image Gallery
  </div>
</div>



  

  <!-- card with side text code end-->


  <!-- modals code start -->
  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Fill All Below Given Entity</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
       Register For Better Experience
        </div>
        <div class="modal-footer">

          <!-- form code start for signup -->
          
          <div class="formcontainer" style="display: flex;">
            
            <div class="left">
              <img src="img/logo.png"s>
                       </div>
                       <div class="right">
                         <form action="signup.php" method="post">
                        Enter your name:
                        <input type="text" name="name">
                        <br><br>
                        Enter your fathername:
                        <input type="text" name="fname">
                        <br><br>
                        Enter your gender:
                        <input type="number" name="gender">
                        <br><br>
                        Enter your email:
                        <input type="email" name="email">
                        <br><br>
                        Enter your password:
                        <input type="password" name="password">
                        <br><br>
                        Confirm your password:
                        <input type="password" name="cpassword">
                        <br><br>
                        Enter your mobile no:
                        <input type="number" name="mobile">
                        <br><br>
                       </div>
          </div>

            <button type="submit" class="btn btn-success" style="width:100%;">Signup Now</button>
          </form>
          <!-- form code end for signup -->
        </div>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>

      </div>

    </div>
  </div>

  <!-- modals code end -->


<!-- extra l.............bacvkkseif -->
<!-- <div class="container23" style="display:flex;"> -->

  <!-- <img src="img/aim.jpg" alt="Notebook" style="width:100%;"> -->
  <img src="img/independence_day.jpg" alt="Notebook" style="width:100%;height:80vh;">
  <!-- <div class="content">
    <h1>Register Here</h1>
  
  <form action=""> -->


  </form>
  
  
  <!-- </div> -->
</div> 




<!-- footer start -->



<!-- footer icons code -->

<!-- Add font awesome icons -->
<!-- <footer>
  <center>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-google"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-instagram"></a>

  </center>
  <br>
  <center>



    <p style="text-align:center;">
  
    All right reserved for Company &copy;
    </p>
    </center>
  </footer> -->
  <br>
<?php
include("_footer.php");
?>


<script src="node.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>

</html>