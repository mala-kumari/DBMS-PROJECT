<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
 $ver=$_SESSION["id7"];
 $result=mysqli_query($connection,"SELECT * FROM police_station_master WHERE user_id='".$ver. "'");
 $row=mysqli_fetch_array($result);
 $idd1=$row['victim_id'];
 $idd2=$row['victim_name'];
 $idd3=$row['flat_no'];
 $idd4=$row['street'];
 $idd5=$row['city'];
 $idd6=$row['u_state'];
 $idd7=$row['regi_date'];
 $idd8=$row['country'];
 $idd9=$row['pin'];
 $idd10=$row['phone'];
 $idd12=$row['dob'];
 $idd13=$row['email_id'];
 $idd14=$row['other_details'];
 $idd15=$row['other_add'];
 if(isset($_POST['change']))
 {
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
    $addd=$_POST['add_name'];
   $sql = "UPDATE victim_master SET victim_id='".$vic."',victim_name='".$vicn."',flat_no='".$fla."',street='".$stree."' city='".$cit."',u_state='".$sta."',regi_date='".$regi."',country='".$con."'pin='".$pi."',phone='".$ph."',dob='".$dob."',email_id='".$em."',other_details='".$oth."',other_add='".$addd."' WHERE user_id='".$ver."'";
   if ($connection->query($sql) === TRUE) {
       echo "Record updated successfully";
   } else {
       echo "Error updating record: " . $connection->error;
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
<form action="ch7.php" method="post">
<center>
<h1>Victim Master</h1>
<div class="employee">
<p><Table>
<tr><td></td></tr></table>
<p>Victim ID: <select name="vit" value="<?php echo $idd1 ?>"">
<option>v1203</option>
<option>v1204</option>
<option>v1205</option>
<option>v1206</option>
<option>v1207</option>
</select>
<p id="p1">Victim Name:<input name="vit_name" type="text" size="18" hight="5" value="<?php echo $idd2 ?>""></p>
<p>Flat no.<input name="fl_name" type="text" size="18" hight="5" value="<?php echo $idd3 ?>""></p>
<p id="p1">street<input name="stre_name" type="text" size="18" hight="5" value="<?php echo $idd4 ?>""></p>
<p id="p1">City :<input name="city_name" type="text" size="18" hight="5" value="<?php echo $idd5 ?>""></p>
<p id="p1">state :<input name="state_name" type="text" size="18" hight="5" value="<?php echo $idd6 ?>""></p>
<p id="p1">Regi.Date<input name="regi_name" type="text" size="18" hight="5" value="<?php echo $idd7 ?>""></p>
</div>
<div class="emp">
<p id="p2">country<input name="coun_name" type="text" size="18" hight="5" value="<?php echo $idd8 ?>""></p>
<p id="p1">pin<input name="pin_name" type="text" size="18" hight="5" value="<?php echo $idd9 ?>""></p>
<p id="p1">phone<input name="pho_name" type="text" size="18" hight="5" value="<?php echo $idd10 ?>""></p>
<p id="p1">Date_of_Birth<input name="dob_name" type="text" size="18" hight="5" value="<?php echo $idd12 ?>"" ></p>
<p id="p1">Email_Id<input name="e_name" type="text" size="18" hight="5"  value="<?php echo $idd13 ?>""></p>
<p id="p1">Others_Detail<input name="detail_name" type="text" size="18" hight="2"  value="<?php echo $idd14 ?>""></p>
<p id="p1">Others_add<input name="add_name" type="text" size="18" hight="2"  value="<?php echo $idd15 ?>""></p>
</div>
<div class="but">
<button type="Insert" name="change">Change</button>
</div>
</center>
</form>
</body>
</html>