<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();

 $ver=$_SESSION["id2"];
 $result=mysqli_query($connection,"SELECT * FROM department_master WHERE user_id='".$ver. "'");
 $row=mysqli_fetch_array($result);
 $idd1=$row['department_id'];
 $idd2=$row['department_name'];
 $idd3=$row['department_desc'];
 $idd4=$row['highest_designation_id'];


 if(isset($_POST['change']))
    {
        $dep=$_POST['depar'];
   $depid=$_POST['dep_name'];
   $depti=$_POST['depart_name'];
   $high=$_POST['hig'];
   
      $sql = "UPDATE department_master SET department_id='".$dep."',department_name='".$depid."',department_desc='".$depti."',highest_designation_id='".$high."' WHERE user_id='".$ver."'";
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}
header("Location:r3.php");
    }
?>


<! doctype html>
<head>
<style>
.jo{
   margin-top:150px;
   }
</style>
<body bgcolor="lightblue">
<form action="ch2.php" method="post">
<div class="jo">
<center>
<h1>Department Master</h1>
<p><Table>
<tr<td></td></tr></table>
<p>Department ID: <select name="depar"  value="<?php echo $idd1 ?>"">
<option>E203</option>
<option>E204</option>
<option>E205</option>
<option>E206</option>
<option>E207</option>
</select>
<p>Departent Name<input name="dep_name" type="text" size="18" value="<?php echo $idd2 ?>""></p>
<p>Department Desc<input name="depart_name" type="text" size="18" value="<?php echo $idd3 ?>""></p>
<p>Highest Designation ID: <select name="hig"  value="<?php echo $idd4 ?>"">
<option>DE101</option>
<option>DE102</option>
<option>DE103</option>
<option>DE104</option>
<option>DE105</option>
</select>
</p>
<button type="Insert" name="change">Change</button>
</div>
</form>
</body>
</head>
</html>