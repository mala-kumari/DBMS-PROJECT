<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
 $ver=$_SESSION["id5"];

 $result=mysqli_query($connection,"SELECT * FROM crime_category_master WHERE user_id='".$ver. "'");
 $row=mysqli_fetch_array($result);
 $idd1=$row['crime_category_id'];
 $idd2=$row['crime_category_name'];
 $idd3=$row['d_description'];
 
 
 if(isset($_POST['change']))
    {
        $cri_id= $_POST['crime'];
        $crina= $_POST['crime_name'];
        $descri= $_POST['decr_name'];
    
      $sql = "UPDATE crime_category_master SET crime_category_id='".$cri_id."',crime_category_name='".$crina."',d_description='".$descri."' WHERE user_id='".$ver."'";
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}
header("Location:r7.php");
    }
?>






<! doctype html>
<head>
<body bgcolor="lightblue">
<form action="ch5.php" method="post">
<center>
<h1>Crime Category Master</h1>
<p><Table>
<tr><td></td></tr></table>
<p>Crime category ID: <select name="crime"  value="<?php echo $idd1 ?>"">
<option>Ed11203</option>
<option>Ed11204</option>
<option>Ed11205</option>
<option>Ed11206</option>
<option>Ed11207</option>
</select>
<p>Crime Category Name :<input name="crime_name" type="text" size="18"  value="<?php echo $idd2 ?>""></p>
<p>Description :<input name="decr_name" type="text" size="18"  value="<?php echo $idd3 ?>"">
</p>
<button type="Insert" name="change">Change</button>
</form>
</body>
</head>
</html>