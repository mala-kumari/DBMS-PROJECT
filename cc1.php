<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
 $ver=$_SESSION["id11"];

 $result=mysqli_query($connection,"SELECT * FROM criminal WHERE user_id='".$ver. "'");
 $row=mysqli_fetch_array($result);

  $idd15=$row['ci'];
 $idd2=$row['cn'];
 $idd3=$row['ct'];
 $idd4=$row['arr'];
 $idd5=$row['con'];
 $idd6=$row['hei'];
 $idd7=$row['wei'];
 $idd8=$row['arrp'];
 $idd9=$row['arrc'];
 $idd10=$row['arrs'];
 $idd11=$row['arrco'];
 $idd12=$row['arretim'];
 $idd13=$row['jail'];
 $idd14=$row['cloth'];
 
 
 if(isset($_POST['change']))
    {
        $nnn=$_POST['cr_id'];
        $ho=$_POST['cr_name'];
        $do=$_POST['ct_name'];
       $nno=$_POST['ad_name'];
       $ago=$_POST['co_name'];
       $seo=$_POST['hi_name'];
       $deao=$_POST['wei_name'];
       $addo=$_POST['arr_name'];
       $heio=$_POST['arc_name'];
       $weio=$_POST['ars_name'];
       $exto=$_POST['ar_name'];
       $into=$_POST['art_name'];
       $psto=$_POST['j_name'];
       $pseo=$_POST['cc_name'];
      $sql = "UPDATE post SET  ci='".$nnn."',cn='".$ho."',ct='".$do."',arr='".$nno."',con='".$ago."',hei='".$seo."',wei='".$deao."',arrp='".$addo."',arrc='".$heio."',arrs='".$weio."',arrco='".$exto."',arretim='".$into."',jail='".$psto."',cloth='".$pseo."' WHERE user_id='".$ver."'";
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
     margin-left:650px;
     margin-bottom: 100px:
     }
#p2{
  margin-top: 30px;
}
#p1{
 margin-top: 20px;
}
.cri{
    float:left;
    margin-bottom:200px;
   }
</style>
<body bgcolor="lightblue">
<form action="" method="post">
<center>
<h1>Criminal  Record</h1>
<div class="employee">
<p><Table>
<tr<td></td></tr></table>
<p>Criminal_ID: <select name="cr_id"  value="<?php echo $idd15 ?>"">
<option>Ds11203</option>
<option>Ds11204</option>
<option>Ds11205</option>
<option>Ds11206</option>
<option>Ds11207</option>
</select>
<p id="p1"> Criminal Name<input name="cr_name" type="text" size="18" hight="5"  value="<?php echo $idd2 ?>""></p>
<p id="p1">Criminal Type<input name="ct_name" type="text" size="18" hight="5"  value="<?php echo $idd3 ?>""></p>
<p id="p1">Arrest date<input name="ad_name" type="text" size="18" hight="5"  value="<?php echo $idd4 ?>""></p>
<p id="p1">Contact NO.<input name="co_name" type="text" size="18" hight="5"  value="<?php echo $idd5 ?>""></p>
<p>Height<input name="hi_name" type="_text" size="18" hight="5"  value="<?php echo $idd6 ?>"">
<p id="p1">Weight<input name="wei_name" type="text" size="18" hight="5"  value="<?php echo $idd7 ?>""></p>
</div>
<div class="emp">
<p id="p2">Arrest place<input name="arr_name" type="text" size="18" hight="5"  value="<?php echo $idd8 ?>""></p>
<p id="p1">Arrest city<input name="arc_name" type="text" size="18" hight="5" value="<?php echo $idd9 ?>""></p>
<p id="p1">Arrest state<input name="ars_name" type="text" size="18" hight="5"  value="<?php echo $idd10 ?>""></p>
<p id="p1">Arrest country<input name="ar_name" type="text" size="18" hight="5"  value="<?php echo $idd11 ?>""></p>
<p id="p1">Arrest time<input name="art_name" type="text" size="18" hight="5"  value="<?php echo $idd12 ?>""></p>
<p id="p1">jail Add:<input name="j_name" type="text" size="18" hight="5"  value="<?php echo $idd13 ?>""></p>
<p id="p1">Criminal cloth No.<input name="cc_name" type="text" size="18" hight="5"  value="<?php echo $idd14 ?>""></p>
</div>
<div class="but">
<button type="Insert" name="change">Change</button>
</div>
</center>
</form>
</body>
</html>