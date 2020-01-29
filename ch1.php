<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
 $ver=$_SESSION["id1"];
 $result=mysqli_query($connection,"SELECT * FROM designation_master WHERE user_id='".$ver. "'");
 $row=mysqli_fetch_array($result);
 $idd1=$row['Designation_id'];
 $idd2=$row['Designation_name'];
 $idd3=$row['Designation_desc'];
 
 if(isset($_POST['change']))
    {
        $desi=$_POST['desi_id'];
        $desina=$_POST['Des_name'];
        $dess=$_POST['Desc_name'];

      $sql = "UPDATE designation_master SET Designation_id='".$desi."',Designation_name='".$desina."',Designation_desc='".$dess."' WHERE user_id='".$ver."'";
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}
header("Location:r4.php");
    }
?>
    


<!DOCTYPE html>
<html>
<style>
.ho{
margin-top:150px;
}
</style>

<body bgcolor="lightblue">
<form action="ch1.php" method="post">
<div class="ho">
<center>
<h1>Designation Master</h1>
<p><Table>
<tr><td></td></tr></table>
<p>Designation ID: <select name="desi_id" value="<?php echo $idd1 ?>"">
<option>E1203</option>
<option>E1204</option>
<option>E1205</option>
<option>E1206</option>
<option>E1207</option>
</select>
<p>Designation Name<input name="Des_name" type="text" size="18" value="<?php echo $idd2 ?>""></p>
<p>Designation Desc<input name="Desc_name" type="text" size="18" value="<?php echo $idd3 ?>"">
</p>
<button type="Insert" name="change">Change</button>
</div>
</form>
</body>
</html>