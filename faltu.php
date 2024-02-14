<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .box{
            background-color: red;
            height:2px;
            width:20px;
            position: absolute;
            animation-name:sk;
animation-duration:2s;
animation-iteration-count: infinite;
position:absolute;
        }
        .container{
background-color:green;
/* animation: sk 8s  0s infinite forward fill-mode;         */
width:120px;

}

@keyframes sk {
    0%{
        top:0px;
        left:0px;
    
        
}
25%{
        top:130px;
        left:0px;
        width:2px;

    height:20px;
}
50%{
        top:130px;
        left:140px;
        width:20px;

height:2px;
}
75%{
        top:0px;
        left: 140px;
        width:2px;
height:20px;
}
    
100%{
        top:0px;
        left:0px;
       
}
    



}

        .container img{
            height:100%;
            width:100%;

        }
    </style>
</head>
<body>
    <div class="box"></div>
    <div class="container">
        <img src="logo.png" alt="">
    </div>
</body>
</html>