<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
 $ver=$_SESSION["id3"];
 $result=mysqli_query($connection,"SELECT * FROM department_employee_master WHERE user_id='".$ver. "'");
 $row=mysqli_fetch_array($result);
 $idd1=$row['employee_id'];
 $idd2=$row['designation_id'];
 $idd3=$row['department_id'];
 $idd4=$row['dob'];
 $idd5=$row['doj'];
 $idd6=$row['flat_no'];
 $idd7=$row['street'];
 $idd8=$row['city'];
 $idd9=$row['u_state'];
 $idd10=$row['country'];
 $idd12=$row['pin'];
 $idd13=$row['phone'];
 $idd14=$row['email_id'];


 
 if(isset($_POST['change']))
    {
        $em=$_POST['emp'];
        
        $emi=$_POST['emp_id'];
       
        $de=$_POST['dep_id'];
        
        $dat=$_POST['bir_name'];
        
        $da=$_POST['joi_name'];
       
        $flat=$_POST['f_name'];
      
        $str=$_POST['s_name'];
        
        $city=$_POST['ci_name'];
        
        $stat=$_POST['st_name'];
      
        $coun=$_POST['cou_name'];
       
        $pi=$_POST['pin_name'];
        
        $po=$_POST['phone_name'];
        
        $eme=$_POST['e_name'];
       
      $sql = "UPDATE department_employee_master SET employee_id='".$em."',designation_id='".$emi."',department_id='".$de."',dob='".$dat."',doj='".$da."',flat_no='".$flat."',street='".$str."',city='".$city."',u_state='".$stat."',country='".$coun."',pin='".$pi."',phone='".$po."',email_id='".$eme."' WHERE user_id='".$ver."'";
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}
header("Location:r5.php");
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
.hi{
   margin-top:150px;
   }
</style>
<body bgcolor="lightblue">
<form action="ch3.php" method="post">
<div class="hi">
<center>
<h1>Department Employee Master</h1>

<div class="employee">
<p><Table>
<tr><td></td></tr></table>
<p>Employee ID: <select name="emp"  value="<?php echo $idd1 ?>"">
<option>D1203</option>
<option>D1204</option>
<option>D1205</option>
<option>D1206</option>
<option>D1207</option>
</select>
<p><Table>
<tr><td></td></tr></table>
<p>Designation ID: <select name="emp_id"  value="<?php echo $idd2 ?>"">
<option>Ed1203</option>
<option>Ed1204</option>
<option>Ed1205</option>
<option>Ed1206</option>
<option>Ed1207</option>
</select>
<p><Table>
<tr><td></td></tr></table>
<p>Department ID: <select name="dep_id"  value="<?php echo $idd3 ?>"">
<option>Eg1203</option>
<option>Eg1204</option>
<option>Eg1205</option>
<option>Eg1206</option>
<option>Eg1207</option>
</select>
<p>Date_of_birth:<input name="bir_name" type="text" size="18" hight="5"  value="<?php echo $idd4 ?>""></p>
<p>Date_of_joining:<input name="joi_name" type="text" size="18" hight="5"  value="<?php echo $idd5 ?>""></p>
<p>Flat no.<input name="f_name" type="text" size="18" hight="5"  value="<?php echo $idd6 ?>""></p>

</div>
<div class="emp">
<p id="p2">street<input name="s_name" type="text" size="18" hight="5"  value="<?php echo $idd7 ?>""></p>
<p id="p1">city<input name="ci_name" type="text" size="18" hight="5"  value="<?php echo $idd8 ?>""></p>
<p id="p1">state<input name="st_name" type="text" size="18" hight="5"  value="<?php echo $idd9 ?>""></p>
<p id="p1">country<input name="cou_name" type="text" size="18" hight="5"  value="<?php echo $idd10 ?>""></p>
<p id="p1">pin<input name="pin_name" type="text" size="18" hight="5"  value="<?php echo $idd12 ?>""></p>
<p id="p1">phone<input name="phone_name" type="text" size="18" hight="5"  value="<?php echo $idd13 ?>""></p>
<p id="p1">Email_Id<input name="e_name" type="text" size="18" hight="5"  value="<?php echo $idd14 ?>""></p>
</div>
<div class="but">
<button type="Insert" name="change">Change</button>

</div>
</div>
</center>
</form>
</body>
</html>