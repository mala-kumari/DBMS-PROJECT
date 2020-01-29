<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
if(isset($_POST['insert']))
{
   $nn=$_SESSION['namee'];
   $dep=$_POST['depar'];
   echo $_SESSION['dep']=$dep;
   $depid=$_POST['dep_name'];
   echo $_SESSION['depid']=$depid;
   $depti=$_POST['depart_name'];
   echo $_SESSION['depti']=$depti;
   $high=$_POST['hig'];
   echo $_SESSION['high']=$high;
   $result="INSERT INTO department_master(us_name,department_id,department_name,department_desc,highest_designation_id)VALUES('$nn','$dep','$depid','$depti','$high')";
   $output=mysqli_query($connection,$result);
   if($output)
   {
      echo"<h3>Succesful!!</h3>";
   }
   header("Location:s3.php");
}
?>
<! doctype html>
<head>
<style>
.jo{
   margin-top:150px;
   }
   .bg{
  background-image: url("bc12.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="bg">
<form action="" method="post">
<div class="jo">
<center>
<h1>Department Master</h1>
<p><Table>
<tr<td></td></tr></table>
<p>Department ID: <select name="depar">
<option>E203</option>
<option>E204</option>
<option>E205</option>
<option>E206</option>
<option>E207</option>
</select>
<p>Departent Name<input name="dep_name" type="text" size="18"></p>
<p>Department Desc<input name="depart_name" type="text" size="18"></p>
<p>Highest Designation ID: <select name="hig">
<option>DE101</option>
<option>DE102</option>
<option>DE103</option>
<option>DE104</option>
<option>DE105</option>
</select>
</p>
<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</div>
</form>
</body>
</head>
</html>