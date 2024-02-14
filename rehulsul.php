<!DOCTYPE html>
<html>
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <style> 
            #panel1, #flip1 {
              padding: 5px;
              text-align: center;
              background-color: green ;
              border: solid 1px #dc1c1c;
            }
            
            #panel1 {
              padding: 50px;
              display: none;
              height:300px;
              width:900px;
            
            }
            
            #panel2, #flip2 {
              padding: 5px;
              text-align: center;
              background-color: #4c6508;
              border: solid 1px #db1010;
            
            }
            
            #panel2 {
              padding: 50px;
              display: none;
              height:300px;
              width:900px;
            }
            table{
                background-color: yellow;
                width:400px;
                height:200px;
            }
            </style> -->
    </head>
<body>

<!-- <h1>HTML DOM Events</h1>
<h2>The onclick Event</h2> -->

<button onclick="visitustoknowmore()">click for slider</h3>

<script>
function  visitustoknowmore(){
    $(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideDown("100");
  });


  $("#flip2").click(function(){
    $("#panel1").slideUp("100");
  });

});
}
</script>
 



<div id="flip1">Click to slide down panel </div>
<div id="panel1">Hello world! Now you are up





</div>
 
<div id="flip2">Click to slide up panel ^^</div>
<div id="panel1">Hello world! Now you are down </div>
</body>
</html>
