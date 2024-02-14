
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
   </head>

  
   
   <style>
        *{
            margin: 0;padding: 0;
            box-sizing:border-box;
        }
        #main{
            display:block;
            position:absolute   ;
/* top:300px; */

}
        .container{
            background-color:black;
            display:flex;
            justify-content:center;
            align-items:center;
            gap:34px;
            min-width:100vw;
            min-height:30vh;
            color:blue;
text-shadow:1px 1px 1px purples;
position:relative;
bottom:0;

        }
        .box{
            color:blue;
            display:flex;
            justify-content:center;
            align-items:center;
            border:2px solid rgb(255, 247, 247);
            box-shadow:5px 3px 3px gray;
            width:30vw;
            height:20vh;
            align-items: justify;
            overflow:hidden;
            flex-wrap: wrap;
            
        }
        #main p{
            color:blue;
            background-color: black;text-align: center;
        }

        .bi{
            font-size:30px;
        }
    </style>
</head>
<body>
    
<div id="main">
    <div class="container">
        <div class="box">
    
            <h3>+91732463284</h3>
            <br>
     <a>gpa@gmail.com</a>

        </div>
        <div class="box">
        <i class="bi bi-facebook"></i> &nbsp;&nbsp;&nbsp;
        <i class="bi bi-whatsapp"></i> &nbsp;&nbsp;&nbsp;<i class="bi bi-twitter"></i>
        &nbsp;&nbsp;&nbsp;
        <i class="bi bi-threads"></i>
        </div>
        <div class="box">
    
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio quae vero quam a, exercitationem itaque totam in ad nisi fugit esse culpa!
        </div>
    </div>
    <p style="font-size:16px;" >
    
        ALl Right Reservered &copy; &rarrhk;</p>
              <!-- body scrolling  start-->
 <div id="bodyscroll">
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
  aria-controls="offcanvasScrolling">Visit Us By Googel Map</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
  id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>
 </div>
  <!-- body scrolling end -->
    </p>
</div>

