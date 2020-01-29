<?php
session_start();
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
if(isset($_POST['insert']))
{
  $nn= $_SESSION['namee'];
  $vic=$_POST['vit'];
  $vicn=$_POST['vit_name'];
  $fla=$_POST['fl_name'];
  $stree=$_POST['stre_name'];
  $cit=$_POST['city_name'];
  $sta=$_POST['state_name'];
  $regi=$_POST['regi_name'];
  $con=$_POST['coun_name'];
  $pi=$_POST['pin_name'];
  $ph=$_POST['pho_name'];
  $dob=$_POST['dob_name'];
  $em=$_POST['e_name'];
  $oth=$_POST['detail_name'];
  $add=$_POST['add_name'];
  $result="INSERT INTO victim_master(uname,victim_id,victim_name,flat_no,street,city,u_state,regi_date,country,pin,phone,dob,email_id,other_details,other_add)VALUES('$nn','$vic','$vicn','$fla','$stree','$cit','$sta','$regi','$con','$pi','$ph','$dob','$em','$oth','$add')";
  $output=mysqli_query($connection,$result);
  if($output)
  {
    echo"<h3>Succesful!!!</h3>";
    header("Location:s7.php");
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
</style>
<body bgcolor="lightblue">
<form action="s6.php" method="post">
<center>
<h1>Victim Master</h1>
<div class="employee">
<p><Table>
<tr><td></td></tr></table>
<p>Victim ID: <select name="vit">
<option>v1203</option>
<option>v1204</option>
<option>v1205</option>
<option>v1206</option>
<option>v1207</option>
</select>
<p id="p1">Victim Name:<input name="vit_name" type="text" size="18" hight="5"></p>
<p>Flat no.<input name="fl_name" type="text" size="18" hight="5"></p>
<p id="p1">street<input name="stre_name" type="text" size="18" hight="5"></p>
<p id="p1">City :<input name="city_name" type="text" size="18" hight="5"></p>
<p id="p1">state :<input name="state_name" type="text" size="18" hight="5"></p>
<p id="p1">Regi.Date<input name="regi_name" type="text" size="18" hight="5"></p>
</div>
<div class="emp">
<p id="p2">country<input name="coun_name" type="text" size="18" hight="5"></p>
<p id="p1">pin<input name="pin_name" type="text" size="18" hight="5"></p>
<p id="p1">phone<input name="pho_name" type="text" size="18" hight="5"></p>
<p id="p1">Date_of_Birth<input name="dob_name" type="text" size="18" hight="5"></p>
<p id="p1">Email_Id<input name="e_name" type="text" size="18" hight="5"></p>
<p id="p1">Others_Detail<input name="detail_name" type="text" size="18" hight="2"></p>
<p id="p1">Others_add<input name="add_name" type="text" size="18" hight="2"></p>
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