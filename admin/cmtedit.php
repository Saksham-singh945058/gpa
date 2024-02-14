
<?php
$cid =$_REQUEST['cid'];
// echo $cid;
include("_dbconnect.php");
include("_admindashboard.php");
$query = "select * from complain where cid='$cid'";
$res=mysqli_query($conn,$query);

if($row=mysqli_fetch_array($res))
{ 
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      *{
         margin: 0;
         padding: 0;
         box-sizing:border-box;
      }
      h1{
         text-align:center;
         color:green;
      }
      form{
         border:2px solid purple;
         margin:100px 20px;
      display:flex;
      flex-direction:column;
      /* justify-content:center;
      align-items:center; */
      }
      form input{
         color:green;
      }
   </style> 
</head>
<body>
   

<br>
<h1>*edit Your Complain*</h1>

<form action="cmtupdate.php" method="post">
<!-- Id : -->
<input type="hidden" value="<?php echo $cid;?>" name="cid">
<br><br>

Session:
<input type="text" name="complain" value="<?php echo $row['comname'];?>">
<br><br>

dor:
<input type="text" name="dor" value="<?php echo $row['dor']; ?>">
<br><br>
<input type="submit" value="update" style="background-color:green;color:white;font-weight:800;font-size:20px;>
</form>
<?php
}
?>
</body>
</html>