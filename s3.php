<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
if(isset($_POST['insert']))
{
  $nn=$_SESSION['namee'];
  $em=$_POST['emp'];
  echo $_SESSION['em']=$em;
  $emi=$_POST['emp_id'];
  echo $_SESSION['emi']=$emi;
  $de=$_POST['dep_id'];
  echo $_SESSION['de']=$de;
  $dat=$_POST['bir_name'];
  echo $_SESSION['dat']=$dat;
  $da=$_POST['joi_name'];
  echo $_SESSION['da']=$da;
  $flat=$_POST['f_name'];
  echo $_SESSION['flat']=$flat;
  $str=$_POST['s_name'];
  echo $_SESSION['str']=$str;
  $city=$_POST['ci_name'];
  echo $_SESSION['city']=$city;
  $stat=$_POST['st_name'];
  echo $_SESSION['stat']=$stat;
  $coun=$_POST['cou_name'];
  echo $_SESSION['coun']=$coun;
  $pi=$_POST['pin_name'];
  echo $_SESSION['pi']=$pi;
  $po=$_POST['phone_name'];
  echo $_SESSION['po']=$po;
  $eme=$_POST['e_name'];
  echo $_SESSION['eme']=$eme;
  $result="INSERT INTO department_employee_master(uname,employee_id,designation_id,department_id,dob,doj,flat_no,street,city,u_state,country,pin,phone,email_id)VALUES('$nn','$em','$emi','$de','$dat','$da','$flat','$str','$city','$stat','$coun','$pi','$po','$eme')";
  $output=mysqli_query($connection,$result);
  if($output)
  {
    echo"<h3>succesful!!!</h3>";
  }
  header("Location:s4.php");
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
   .bg{
  background-image: url("bc2.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="bg">
<form action="" method="post">
<div class="hi">
<center>
<h1>Department Employee Master</h1>

<div class="employee">
<p><Table>
<tr><td></td></tr></table>
<p>Employee ID: <select name="emp">
<option>D1203</option>
<option>D1204</option>
<option>D1205</option>
<option>D1206</option>
<option>D1207</option>
</select>
<p><Table>
<tr><td></td></tr></table>
<p>Designation ID: <select name="emp_id">
<option>Ed1203</option>
<option>Ed1204</option>
<option>Ed1205</option>
<option>Ed1206</option>
<option>Ed1207</option>
</select>
<p><Table>
<tr><td></td></tr></table>
<p>Department ID: <select name="dep_id">
<option>Eg1203</option>
<option>Eg1204</option>
<option>Eg1205</option>
<option>Eg1206</option>
<option>Eg1207</option>
</select>
<p>Date_of_birth:<input name="bir_name" type="text" size="18" hight="5"></p>
<p>Date_of_joining:<input name="joi_name" type="text" size="18" hight="5"></p>
<p>Flat no.<input name="f_name" type="text" size="18" hight="5"></p>

</div>
<div class="emp">
<p id="p2">street<input name="s_name" type="text" size="18" hight="5"></p>
<p id="p1">city<input name="ci_name" type="text" size="18" hight="5"></p>
<p id="p1">state<input name="st_name" type="text" size="18" hight="5"></p>
<p id="p1">country<input name="cou_name" type="text" size="18" hight="5"></p>
<p id="p1">pin<input name="pin_name" type="text" size="18" hight="5"></p>
<p id="p1">phone<input name="phone_name" type="text" size="18" hight="5"></p>
<p id="p1">Email_Id<input name="e_name" type="text" size="18" hight="5"></p>
</div>
<div class="but">
<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</div>
</div>
</center>
</form>
</body>
</html>