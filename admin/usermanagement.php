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
</head>
  <div class="home-content">
      <div class="overview-boxes">
          <div class="home-content">
      <div class="overview-boxes"style="margin-top:-100px;margin-left:-110px;">
  
<?php
        include("_dbconnect.php");
        $query= "select * from register";
        $res=mysqli_query($conn,$query);
        ?>
<table style="margin-top:50px;margin-left:100px;font-size:12px;background-color:#f3971b;border-color:white;" border="2" >
  <h2 style="text-align:center;margin-top:0px;"></h2>
  <tr style="margin-left:200px;">
    <th colspan="12" style="font-size:25px;color:tomato;border-radius:20px;background:black;width:150%;">See The Registered Student Details</th>
  </tr>
  <tr>
    <!-- <th>id</th> -->
    <th style="padding:0px;">Sr.No</th>
    <th style="padding:0px;">Name</th>
    <th style="padding:0px;">Father'sName</th>
    <th style="padding:0px;">Gender</th>
    <th style="padding:0px;">Email</th>
    <th style="padding:0px;">Password</th>
    <th style="padding:0px;">Mobile</th>
    <th style="padding:0px;">Date of Registation</th>
    <th style="padding:0px;">Delete</th>
    <th style="padding;0px">More</th>
   
</tr>

<?php
$a=1;
while($row=mysqli_fetch_array($res))
{
    ?>
<tr>
  <td style="padding:3px;"><?php  echo $a;  ?></td>
  
  <td style="padding:3px;"><b style="color:green;font-weight:900;font-size:16px;"><?php  echo $row['name'];  ?></b></td>
  <td style="padding:3px;"><?php  echo $row['fname'];  ?></td>
    <td style="padding:3px;"><?php  echo $row['gender'];  ?></td>
    <td style="padding:3px;"><?php  echo $row['email'];  ?></td>
    <td style="padding:3px;"><?php  echo "******"  ?></td>
    <td style="padding:3px;"><?php  echo $row['mobile'];  ?></td>
    <td style="padding:3px;"><?php  echo $row['dor'];  ?></td>
    <td style="padding:3px;"><a href="usermanagementdelete.php?userid=<?php echo $row['id'];?>" style="color:white;"><span class="badge text-bg-danger"><i class="bi bi-archive-fill" style="color:red;"></i> </span></a></td>
    <td style="padding:3px;"><a href="../viewmore.php?userid=<?php echo $row['id'];?>" style="color:white;"><span class="badge text-bg-danger">View More </span></a></td>
</tr>
<?php
}
$a++;

?>


</table>

</div>
</div>



</div>
</div>

  


</body>
</html>