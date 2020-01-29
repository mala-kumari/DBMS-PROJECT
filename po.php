<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
 $ver=$_SESSION["id10"];

 $result=mysqli_query($connection,"SELECT * FROM post WHERE user_id='".$ver. "'");
 $row=mysqli_fetch_array($result);
 $idd1=$row['pn'];
 $idd2=$row['ho'];
 $idd3=$row['dr'];
 $idd4=$row['na'];
 $idd5=$row['ag'];
 $idd6=$row['se'];
 $idd7=$row['death'];
 $idd8=$row['addr'];
 $idd9=$row['hei'];
 $idd10=$row['wei'];
 $idd11=$row['exter'];
 $idd12=$row['inter'];
 $idd13=$row['pst'];
 $idd14=$row['pet'];
 
 
 if(isset($_POST['change']))
    {
        $no=$_POST['pos'];
        $ho=$_POST['h_name'];
        $do=$_POST['d_name'];
       $nno=$_POST['n_name'];
       $ago=$_POST['a_name'];
       $seo=$_POST['s_name'];
       $deao=$_POST['dd_name'];
       $addo=$_POST['aa_name'];
       $heio=$_POST['hh_name'];
       $weio=$_POST['w_name'];
       $exto=$_POST['ex_name'];
       $into=$_POST['in_name'];
       $psto=$_POST['psti_name'];
       $pseo=$_POST['psei_name'];
      $sql = "UPDATE post SET pn='".$no."',ho='".$ho."',dr='".$do."',na='".$nno."',ag='".$ago."',se='".$seo."',death='".$deao."',addr='".$addo."',hei='".$heio."',wei='".$weio."',exter='".$exto."',inter='".$into."',pst='".$psto."',pet='".$pseo."' WHERE user_id='".$ver."'";
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}
header("Location:post1.php");
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
<form action="po.php" method="post">
<center>
<h1>Postmortem Report</h1>
<div class="employee">
<p><Table>
<tr<td></td></tr></table>
<p>Postmortem NO: <select name="pos"  value="<?php echo $idd1 ?>"">
<option>p11203</option>
<option>p11204</option>
<option>p11205</option>
<option>p11206</option>
<option>p11207</option>
</select>
<p id="p1"> Hospital Name<input name="h_name" type="text" size="18" hight="5"  value="<?php echo $idd2 ?>""></p>
<p id="p1">DR. Name<input name="d_name" type="text" size="18" hight="5"  value="<?php echo $idd3 ?>""></p>
<p id="p1">Name<input name="n_name" type="text" size="18" hight="5"  value="<?php echo $idd4 ?>""></p>
<p id="p1">Age<input name="a_name" type="text" size="18" hight="5"  value="<?php echo $idd5 ?>""></p>
<p>Sex<input name="s_name" type="text" size="18" hight="5"  value="<?php echo $idd6 ?>""></p>
<p id="p1">Death Details<input name="dd_name" type="text" size="18" hight="5"  value="<?php echo $idd7 ?>""></p>
</div>
<div class="emp">
<p id="p2">Address:<input name="aa_name" type="text" size="18" hight="5"  value="<?php echo $idd8 ?>""></p>
<p id="p1">Height<input name="hh_name" type="text" size="18" hight="5"  value="<?php echo $idd9 ?>""></p>
<p id="p1">Weight<input name="w_name" type="text" size="18" hight="5"  value="<?php echo $idd10 ?>""></p>
<p id="p1">External injury<input name="ex_name" type="text" size="18" hight="5"  value="<?php echo $idd11 ?>""></p>
<p id="p1">Internal injury<input name="in_name" type="text" size="18" hight="5"  value="<?php echo $idd12 ?>""></p>
<p id="p1">postmortem starting time<input name="psti_name" type="text" size="18" hight="5"  value="<?php echo $idd13 ?>""></p>
<p id="p1">postmortem ending time<input name="psei_name" type="text" size="18" hight="5"  value="<?php echo $idd14 ?>""></p>
</div>
<div class="but">
<button type="Insert" name="change">Change</button>

<a href="autopsy.html">
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Autopsy Report</button></a>
</div>
</center>
</form>
</body>
</html>