<?php
$nid =$_REQUEST['nid'];
// echo $nid;
include("_dbconnect.php");
include("_admindashboard.php");
$query = "select * from notice where nid='$nid'";
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
   <title>Year Management Page</title>
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

<form action="yearupdate.php" method="post">
<h1 >*Edit Your Yearname*</h1>

<!-- Id : -->
<input type="hidden" value="<?php echo $nid;?>" name="nid">
<br><br>

Noticename:
<textarea  type="text" name="notice" value="<?php echo $row['nname'];?>">

</textarea>

<br><br>

About The Notice:
<textarea  type="text" name="about" value="<?php echo $row['about'];?>">

</textarea>
<br><br>

don:
<input type="text" name="dor" value="<?php echo $row['dor']; ?>">
<br><br>

<input type="submit" value="update" style="background-color:green;color:white;font-weight:800;font-size:20px;">
</form>
<?php
}
?>
</body>
</html>