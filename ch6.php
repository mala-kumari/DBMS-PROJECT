<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
 $ver=$_SESSION["id6"];
 $result=mysqli_query($connection,"SELECT * FROM crime_category_nature_master WHERE user_id='".$ver. "'");
 $row=mysqli_fetch_array($result);
 $idd1=$row['nature_id'];
 $idd2=$row['category_id'];
 $idd3=$row['nature_name'];
 $idd4=$row['des_c'];
 
 if(isset($_POST['change']))
 {
    $nid= $_POST['nname'];
    $cid= $_POST['C_name'];
    $Nna= $_POST['N_name'];
    $dna= $_POST['D_name'];
   
   $sql = "UPDATE crime_category_nature_master SET nature_id='".$nid."',category_id='".$cid."',nature_name='".$Nna."',des_c='".$dna."' WHERE user_id='".$ver."'";
   if ($connection->query($sql) === TRUE) {
       echo "Record updated successfully";
   } else {
       echo "Error updating record: " . $connection->error;
   }
    header("Location:crnature.php");
       }
   ?>







<! doctype html>
<head>
<body bgcolor="lightblue">
    <form action="ch6.php" method="post">
<center>
<h1>Crime Category Nature Master</h1>
<p><Table>
<tr<td></td></tr></table>
<p>Nature ID: <select name="nname"  value="<?php echo $idd1 ?>"">
<option>N1203</option>
<option>N1204</option>
<option>N1205</option>
<option>N1206</option>
<option>N1207</option>
</select>
<p><Table>
<tr<td></td></tr></table>
<p>Category ID: <select name="C_name"  value="<?php echo $idd2 ?>"">
<option>CT1203</option>
<option>CT1204</option>
<option>CT1205</option>
<option>CT1206</option>
<option>CT1207</option>
</select>
<p>Nature Name :<input name="N_name" type="text" size="18"  value="<?php echo $idd3 ?>"">
</p>
<p>Description :<input name="D_name" type="text" size="18"  value="<?php echo $idd4 ?>"">
</p>
<button type="Insert" name="change">Change</button>

</form>
</body>
</head>
</html>
