<?php
session_start();
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");

if(isset($_POST['insert']))
{
  $nn=$_SESSION['namee'];
   $vitf=$_POST['vif'];
  $crit=$_POST['cri_id'];
  $addre=$_POST['add_name'];
  $loc=$_POST['loc_name'];
  $re=$_POST['regit_name'];
  $vi=$_POST['vic_id'];
  $inv=$_POST['inves'];
  $cri=$_POST['crim_name'];
  $result="INSERT INTO victim_fir_master(uname,victim_fir_id,crime_nature_id,a_address,location_detail,regitration_date,victim_id,investigation_officer_id,crime_date)VALUES('$nn','$vitf','$crit','$addre','$loc','$re','$vi','$inv','$cri')";
  $output=mysqli_query($connection,$result);
  if($output)
  {
    echo"<h3>Succesful!!!</h3>";
    header("Location:s8.php");
  }
}
?>
<!doctype html>
<head>
<style>
.employee{
padding:0;
width:350px;
min-hight:100px;
float:left;
margin-left:400px;
}
.emp{
padding:0;
width:350px;
min-hight:100px;
float:right;
margin-right:400px;
}
.but{
     float:left;
     margin-left:670px;
     margin-bottom: 100px:
     }
#p2{
  margin-top: 30px;
}
#p1{
 margin-top: 20px;
}
.bg{
  background-color: rgba(191,239,255,0.6);
}
</style>
<body class="bg">
<form action="s7.php" method="post">
<center>
<h1>Victim FIR Master</h1>

<div class="employee">
<p><Table>
<tr><td></td></tr></table>
<p>Victim FIR ID: <select name="vif">
<option>f1203</option>
<option>f1204</option>
<option>f1205</option>
<option>f1206</option>
<option>f1207</option>
</select>
<p><Table>
<tr><td></td></tr></table>
<p>Crime Nature ID: <select name="cri_id">
<option>Ec112</option>
<option>Ec212</option>
<option>Ec312</option>
<option>Ec412</option>
<option>Ec512</option>
</select>
<p id="p1">Address :<input name="add_name" type="text" size="18" hight="5"></p>
<p id="p1">Locatin Details :<input name="loc_name" type="text" size="18" hight="5"></p>
</div>
<div class="emp">
<p id="p2">Registration Date:<input name="regit_name" type="text" size="18" hight="5"></p>

<p><Table>
<tr><td></td></tr></table>
<p>Victim ID: <select name="vic_id">
<option>fv1203</option>
<option>fv1204</option>
<option>fv1205</option>
<option>fv1206</option>
<option>fv1207</option>
</select>
<p><Table>
<tr><td></td></tr></table>
<p>Investigation Officer ID: <select name="inves">
<option>I112</option>
<option>I212</option>
<option>I312</option>
<option>I412</option>
<option>I512</option>
</select>
<p id="p1">Crime Date:<input name="crim_name" type="text" size="18" hight="5"></p>
</div>
<div class="but">

<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</div>
</center>
</form>
</body>
</html>