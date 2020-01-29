<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
 $ver=$_SESSION["id4"];
 $result=mysqli_query($connection,"SELECT * FROM police_station_master WHERE user_id='".$ver. "'");
 $row=mysqli_fetch_array($result);
 $idd1=$row['police_station_id'];
 $idd2=$row['police_station_name'];
 $idd3=$row['territory_id'];
 $idd4=$row['starting_date'];
 $idd5=$row['incharge_id'];
 $idd6=$row['flat_no'];
 $idd7=$row['street'];
 $idd11=$row['fax'];
 $idd8=$row['city'];
 $idd9=$row['u_state'];
 $idd10=$row['country'];
 $idd12=$row['pin'];
 $idd13=$row['phone'];
 $idd14=$row['email_id'];
 if(isset($_POST['change']))
 {
  
   $polic=$_POST['police'];
  
   $poli=$_POST['police_name'];
  
   $terri=$_POST['terr'];
   
   $sta=$_POST['star_name'];
   
   $incha=$_POST['inc_id'];
  
   $flat=$_POST['f_name'];
   
   $st=$_POST['str_name'];
   
   $fa=$_POST['fax_name'];
   
   $city=$_POST['cit_name'];
   
   $staa=$_POST['sta_name'];
  
   $con=$_POST['co_name'];
   
   $pin=$_POST['pi_name'];
   
   $phone=$_POST['pho_name'];
   
   $emai=$_POST['ema_name'];
   
   $sql = "UPDATE police_station_master SET police_station_id='".$polic."',police_station_name='".$poli."',territory_id='".$terri."',starting_date='".$sta."',incharge_id='".$incha."',flat_no='".$flat."',street='".$st."',fax='".$fa."',city='".$city."',u_state='".$staa."',country='".$con."',pin='".$pin."',phone='".$phone."',email_id='".$emai."' WHERE user_id='".$ver."'";
   if ($connection->query($sql) === TRUE) {
       echo "Record updated successfully";
   } else {
       echo "Error updating record: " . $connection->error;
   }
    header("Location:r6.php");
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
<form action="ch4.php" method="post">
<center>
<h1>Police Station Master</h1>
<div class="employee">
<p><Table>
<tr><td></td></tr></table>
<p>Police_station_ID: <select name="police"  value="<?php echo $idd1 ?>"">
<option>Ds1203</option>
<option>Ds1204</option>
<option>Ds1205</option>
<option>Ds1206</option>
<option>Ds1207</option>
</select>
<p id="p1">Police_station_Name<input name="police_name" type="text" size="18" hight="5"  value="<?php echo $idd2 ?>""></p>
<p><Table>
<tr><td></td></tr></table>
<p>Territory ID: <select name="terr">
<option>Eds12</option>
<option>Eds12</option>
<option>Eds12</option>
<option>Eds12</option>
<option>Eds12</option>
</select>
<p id="p1">Starting date<input name="star_name" type="text" size="18" hight="5"  value="<?php echo $idd3 ?>""></p>
<p><Table>
<tr><td></td></tr></table>
<p>Incharge ID: <select name="inc_id"  value="<?php echo $idd4 ?>"">
<option>Egh1203</option>
<option>Egh1204</option>
<option>Egh1205</option>
<option>Egh1206</option>
<option>Egh1207</option>
</select>
<p>Flat no.<input name="f_name" type="text" size="18" hight="5"  value="<?php echo $idd5 ?>""></p>
<p id="p1">street<input name="str_name" type="text" size="18" hight="5"  value="<?php echo $idd6 ?>""></p>
</div>
<div class="emp">
<p id="p2">fax<input name="fax_name" type="text" size="18" hight="5" value="<?php echo $idd7 ?>""></p>
<p id="p1">city<input name="cit_name" type="text" size="18" hight="5"  value="<?php echo $idd11 ?>""></p>
<p id="p1">state<input name="sta_name" type="text" size="18" hight="5"  value="<?php echo $idd8 ?>"" ></p>
<p id="p1">country<input name="co_name" type="text" size="18" hight="5"  value="<?php echo $idd9 ?>""></p>
<p id="p1">pin<input name="pi_name" type="text" size="18" hight="5"  value="<?php echo $idd10 ?>""></p>
<p id="p1">phone<input name="pho_name" type="text" size="18" hight="5"  value="<?php echo $idd12 ?>""></p>
<p id="p1">Email_Id<input name="ema_name" type="text" size="18" hight="5"  value="<?php echo $idd13 ?>""></p>
</div>
<div class="but">
<button type="Insert" name="change">Change</button>
</div>
</center>
</form>
</body>
</html>