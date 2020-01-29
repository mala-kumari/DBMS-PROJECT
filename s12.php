<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
if(isset($_POST['insert']))
{
   $nn=$_SESSION['namee'];
   $dep=$_POST['u_name'];
   $depid=$_POST['pr'];
   $depti=$_POST['emno'];
   $high=$_POST['o_name'];
   $high1=$_POST['c_name'];
   $high2=$_POST['ch_name'];
   $result="INSERT INTO login_u(uname,user_name_n,pinn,en,ol,cu,cd)VALUES('$nn','$dep','$depid','$depti','$high','$high1','$high2')";
   $output=mysqli_query($connection,$result);
   if($output)
   {
      echo"<h3>Succesful!!</h3>";
   }
   
}
?>
<! doctype html>
<head>
<body bgcolor="lightblue">
<form action="s12.php" method="post">
<center>
<h1>Login Master</h1>
<p>Login User Name:<input name="u_name" type="text" size="18"></p>
<p><Table>
<tr<td></td></tr></table>
<p>Profile ID: <select name="pr">
<option>p1203</option>
<option>p1204</option>
<option>p1205</option>
<option>p1206</option>
<option>p1207</option>
</select>
<p><Table>
<tr<td></td></tr></table>
<p>Employee No.: <select name="emno">
<option>Em1203</option>
<option>Em204</option>
<option>Em1205</option>
<option>Em206</option>
<option>Em1207</option>
</select>
<p>Old password:<input name="o_name" type="text" size="18">
</p>
<p>Current password:<input name="c_name" type="text" size="18">
</p>
<p>change Date:<input name="ch_name" type="text" size="18">
</p>
<button type="insert" name="insert">Insert</button>
</form>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</body>
</head>
</html>
