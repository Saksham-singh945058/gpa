<?php
include("_admindashboard.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
     table{
    margin-top:50px;
    margin-left:350px;
   }
  </style>
</head>
  <div class="home-content">
      <div class="overview-boxes">
          <div class="home-content">
      <div class="overview-boxes"style="margin-top:-100px;margin-left:-110px;">
      <div class="top-sales box" style="margin-left:450px;border-radius:20px;">
          <div class="title"><pre>Add gallery +</pre></div>
          <form action="gallerycode.php" method="post" enctype="multipart/form-data" style="margin-top:-20px;">
        <br>
        <input type="file" name="myfile " style="margin-left:85px;border-radius:20px;" placeholder="Select image..">
      
        <input type="submit" value="Add Image" style="background:purple;color:white;margin-top:30px;margin-left:129px;border-radius:10px;">

          </form>

        
          <br> 
         
          <br>
</div>
<?php
        include ("_dbconnect.php");
        $query= "select * from gallery";
        $res=mysqli_query($conn,$query);
        ?>
<table style="margin-left:100px;">
  <h2 style="text-align:center;margin-top:-20px;"></h2>
  <tr>
    <th colspan="5" style="font-size:25px;color:white;border-radius:20px;background:black;width:100%;">See The Added gallery</th>
  </tr>
  <tr>
    <!-- <th>id</th> -->
    <th style="padding:3px;">Id</th>
    <th style="padding:3px;">Imagename</th>
    <th style="padding:3px;">Picture View</th>
    <th style="padding:3px;">About</th>
    <th style="padding:3px;">Dor</th>
    <th style="padding:3px;">Delete</th>
    <th style="padding:3px;">Edit</th>
   
</tr>

<?php

while($row=mysqli_fetch_array($res))
{
    ?>
<tr>
    <td style="padding:30px;"><?php  echo $row['gid'];  ?></td>
    <td style="padding:30px;"><?php  echo $row['gname'];  ?></td>




<!-- code for fetchig image from the gallery table of the gpa database start -->








    <td style="padding:30px;">
    <?php 

    $query2="select * from gallery";
    $res2=mysqli_query($conn,$query2);
while($row2=mysqli_fetch_array($res2)){
    echo "tempfolder/",$row2["gname"]; 


$file=$row2['gname'];
// echo $file;
?>
<!-- 
<img src="tempfolder/<?php echo $file; ?>" alt="gimg"> -->

<?php
}



?>
</td>

<!-- code for fetchig image from the gallery table of the gpa database end -->




<td style="padding:30px;"><?php echo $row2['about']; ?></td>
    <td style="padding:30px;"><?php  echo $row2['dor'];  ?></td>
    <td style="padding:30px;"><a href="yeardelete.php?gid=<?php echo $row2['gid'];?>" style="color:red;"><i class="bi bi-archive-fill" style="color:red;"></i></a></td>
    <td style="padding:30px;"><a href="yearedit.php?gid=<?php echo $row2['gid'];?>" style="color:white;"><i class="bi bi-pencil-fill" style="color:green;"></i></a></td style="padding:30px;">

</tr>
<?php
}

?>


</table>

</div>
</div>



</div>
</div>

  


</body>
</html>