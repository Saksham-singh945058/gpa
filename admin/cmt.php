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
          <div class="title"><pre>Add Complain +</pre></div>
          <form action="comcode.php" method="post" style="margin-top:-20px;">
        <br>
        <input type="text" name="complain" style="margin-left:25px;border-radius:20px;" placeholder="Enter Complain..">
      
        <input type="submit" value="Add Complain" style="background:purple;color:white;margin-top:30px;margin-left:59px;border-radius:10px;">

          </form>

        
          <br> 
         
          <br>
</div>
<?php
        include ("_dbconnect.php");
        $query= "select * from complain";
        $res=mysqli_query($conn,$query);
        ?>
<table >
  <h2 style="text-align:center;margin-top:0px;"></h2>
  <tr>
    <th colspan="5" style="font-size:25px;color:white;border-radius:20px;background:black;width:100%;">See The Added Complain</th>
  </tr>
  <tr>
    <!-- <th>id</th> -->
    <th style="padding:3px;">Id</th>
    <th style="padding:3px;">Complain</th>
    <th style="padding:3px;">Dor</th>
    <th style="padding:3px;">Delete</th>
    <th style="padding:3px;">Edit</th>
   
</tr>

<?php

while($row=mysqli_fetch_array($res))
{
    ?>
<tr>
    <td style="padding:30px;"><?php  echo $row['cid'];  ?></td>
    <td style="padding:30px;"><?php  echo $row['comname'];  ?></td>
    <td style="padding:30px;"><?php  echo $row['dor'];  ?></td>
    <td style="padding:30px;"><a href="cmtdelete.php?cid=<?php echo $row['cid'];?>" style="color:white;"><i class="bi bi-archive-fill" style="color:red;"></i></a></td>
    <td style="padding:30px;"><a href="cmtedit.php?cid=<?php echo $row['cid'];?>" style="color:white;"><i class="bi bi-pencil-fill" style="color:green;font-size:20px;"></i></a></td style="padding:30px;">

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