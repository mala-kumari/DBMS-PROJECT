<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
if(isset($_POST['insert']))
{
  $nn=$_SESSION['namee'];
  $polic=$_POST['police'];
  echo $_SESSION['polic']=$polic;
  $poli=$_POST['police_name'];
  echo $_SESSION['poli']=$poli;
  $terri=$_POST['terr'];
  echo $_SESSION['terri']=$terri;
  $sta=$_POST['star_name'];
  echo $_SESSION['sta']=$sta;
  $incha=$_POST['inc_id'];
  echo $_SESSION['incha']=$incha;
  $flat=$_POST['f_name'];
  echo $_SESSION['flat']=$flat;
  $st=$_POST['str_name'];
  echo $_SESSION['st']=$st;
  $fa=$_POST['fax_name'];
  echo $_SESSION['fa']=$fa;
  $city=$_POST['cit_name'];
  echo $_SESSION['city']=$city;
  $staa=$_POST['sta_name'];
  echo $_SESSION['staa']=$staa;
  $con=$_POST['co_name'];
  echo $_SESSION['con']=$con;
  $pin=$_POST['pi_name'];
  echo $_SESSION['pin']=$pin;
  $phone=$_POST['pho_name'];
  echo $_SESSION['phone']=$phone;
  $emai=$_POST['ema_name'];
  echo $_SESSION['emai']=$emai;
  $result="INSERT INTO police_station_master(uname,police_station_id,police_station_name,territory_id,starting_date,incharge_id,flat_no,street,fax,city,u_state,country,pin,phone,email_id)VALUES('$nn','$polic','$poli','$terri','$sta','$incha','$flat','$st','$fa','$city','$staa','$con','$pin','$phone','$emai')";
  $output=mysqli_query($connection,$result);
  if($output)
  {
    echo "<h3>Succesful!!!!<h3>";
  }
  header("Location:s5.php");
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
  background-image: url("bc1.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="bg">
<form action="" method="post">
<center>
<h1>Police Station Master</h1>
<div class="employee">
<p><Table>
<tr><td></td></tr></table>
<p>Police_station_ID: <select name="police">
<option>Ds1203</option>
<option>Ds1204</option>
<option>Ds1205</option>
<option>Ds1206</option>
<option>Ds1207</option>
</select>
<p id="p1">Police_station_Name<input name="police_name" type="text" size="18" hight="5"></p>
<p><Table>
<tr><td></td></tr></table>
<p>Territory ID: <select name="terr">
<option>Eds12</option>
<option>Eds12</option>
<option>Eds12</option>
<option>Eds12</option>
<option>Eds12</option>
</select>
<p id="p1">Starting date<input name="star_name" type="text" size="18" hight="5"></p>
<p><Table>
<tr><td></td></tr></table>
<p>Incharge ID: <select name="inc_id">
<option>Egh1203</option>
<option>Egh1204</option>
<option>Egh1205</option>
<option>Egh1206</option>
<option>Egh1207</option>
</select>
<p>Flat no.<input name="f_name" type="text" size="18" hight="5"></p>
<p id="p1">street<input name="str_name" type="text" size="18" hight="5"></p>
</div>
<div class="emp">
<p id="p2">fax<input name="fax_name" type="text" size="18" hight="5"></p>
<p id="p1">city<input name="cit_name" type="text" size="18" hight="5"></p>
<p id="p1">state<input name="sta_name" type="text" size="18" hight="5"></p>
<p id="p1">country<input name="co_name" type="text" size="18" hight="5"></p>
<p id="p1">pin<input name="pi_name" type="text" size="18" hight="5"></p>
<p id="p1">phone<input name="pho_name" type="text" size="18" hight="5"></p>
<p id="p1">Email_Id<input name="ema_name" type="text" size="18" hight="5"></p>
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