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
          <div class="title"><pre>Add year +</pre></div>
          <form action="yearcode.php" method="post" style="margin-top:-20px;">
        <br>
        <input type="text" name="year" style="margin-left:25px;border-radius:20px;" placeholder="Enter year..">
      
        <input type="submit" value="Add year" style="background:purple;color:white;margin-top:30px;margin-left:59px;border-radius:10px;">

          </form>

        
          <br> 
         
          <br>
</div>
<?php
        include ("_dbconnect.php");
        $query= "select * from year";
        $res=mysqli_query($conn,$query);
        ?>
<table>
  <h2 style="text-align:center;margin-top:0px;"></h2>
  <tr>
    <th colspan="5" style="font-size:25px;color:white;border-radius:20px;background:black;width:100%;">See The Added year</th>
  </tr>
  <tr>
    <!-- <th>id</th> -->
    <th style="padding:3px;">Id</th>
    <th style="padding:3px;">year</th>
    <th style="padding:3px;">Dor</th>
    <th style="padding:3px;">Delete</th>
    <th style="padding:3px;">Edit</th>
   
</tr>

<?php

while($row=mysqli_fetch_array($res))
{
    ?>
<tr>
    <td style="padding:30px;"><?php  echo $row['yid'];  ?></td>
    <td style="padding:30px;"><?php  echo $row['yrname'];  ?></td>
    <td style="padding:30px;"><?php  echo $row['dor'];  ?></td>
    <td style="padding:30px;"><a href="yeardelete.php?yid=<?php echo $row['yid'];?>" style="color:red;"><i class="bi bi-archive-fill" style="color:red;"></i></a></td>
    <td style="padding:30px;"><a href="yearedit.php?yid=<?php echo $row['yid'];?>" style="color:white;"><i class="bi bi-pencil-fill" style="color:green;"></i></a></td style="padding:30px;">

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