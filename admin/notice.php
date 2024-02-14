<?php
include("_admindashboard.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>notice  Management page</title>
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
          <div class="title"><pre>Add notice +</pre></div>
          <form action="noticecode.php" method="post" style="margin-top:-20px;">
        <br>
        <input type="text" name="notice" style="margin-left:25px;border-radius:20px;" placeholder="Enter notice..">
        <br>
        <input type="text" name="about" style="margin-left:25px;border-radius:20px;" placeholder="About notice..">
        <input type="submit" value="Add notice" style="background:purple;color:white;margin-top:30px;margin-left:59px;border-radius:10px;">

          </form>

        
          <br> 
         
          <br>
</div>
<?php
        include ("_dbconnect.php");
        $query= "select * from notice";
        $res=mysqli_query($conn,$query);
        ?>
<table>
  <h2 style="text-align:center;margin-top:0px;"></h2>
  <tr>
    <th colspan="5" style="font-size:25px;color:white;border-radius:20px;background:black;width:100%;">See The Added notice</th>
  </tr>
  <tr>
    <!-- <th>id</th> -->
    <th style="padding:3px;">Id</th>
    <th style="padding:3px;">notice</th>
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
    <td style="padding:30px;"><?php  echo $row['nid'];  ?></td>
    <td style="padding:30px;"><?php  echo $row['nname'];  ?></td>
    <td style="padding:30px;"><?php  echo $row['about'];  ?></td>
    <td style="padding:30px;"><?php  echo $row['dor'];  ?></td>
    <td style="padding:30px;"><a href="noticedelete.php?nid=<?php echo $row['nid'];?>" style="color:red;"><i class="bi bi-archive-fill" style="color:red;"></i></a></td>
    <td style="padding:30px;"><a href="noticeedit.php?nid=<?php echo $row['nid'];?>" style="color:white;"><i class="bi bi-pencil-fill" style="color:green;"></i></a></td style="padding:30px;">

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