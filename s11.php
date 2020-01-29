<?php
session_start();
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
if(isset($_POST['save']))
{
     $nn= $_SESSION['namee'];
     $ch=$_POST['chars'];
     $sn=$_POST['s_name'];
     $sdna=$_POST['sd_name'];
     $firnno=$_POST['firno'];
     $evi=$_POST['evid'];
     $pname=$_POST['p_name'];
     $cname=$_POST['C_name'];
     $result="INSERT INTO crime_charge(uname,sheet_no,sheet_dete,sheet_detail,fir_n,evid_type,court_name,fieldby)VALUES('$nn','$ch','$sn','$sdna','$firnno','$evi','$pname','$cname')";
     $output=mysqli_query($connection,$result);
    if($output)
    {
        echo"<h3>Succesful!!</h3>";
     header("Location:post.php");
    }
}
?>


<! doctype html>
<head>
    <style>
         .bg{
  background-image: url("bc2.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
         }
        </style>
<body class="bg">
<form action="s11.php" method="post">
<center>
<h1><u>Crime Charge sheet Master</u></h1>
<p><Table>
<tr<td></td></tr></table>
<p>Charge sheet no.: <select name="chars">
<option>c1203</option>
<option>c1204</option>
<option>c1205</option>
<option>c1206</option>
<option>c1207</option>
</select>
<p>Charge sheet Date:<input name="s_name" type="text" size="18">
<p>Charge sheet Details:<input name="sd_name" type="text" size="18">
<p><Table>
<tr<td></td></tr></table>
<p>FIR No.: <select name="firno">
<option>FIR123</option>
<option>FIR124</option>
<option>FIR134</option>
<option>FIR125</option>
<option>FIR564</option>
</select>
<p><Table>
<tr<td></td></tr></table>
<p>Evidence Type ID: <select name="evid">
<option>Ivt1203</option>
<option>Ivt204</option>
<option>Ivt1205</option>
<option>Ivt206</option>
<option>Ivt1207</option>
</select>
<p>Produced Court Name:<input name="p_name" type="text" size="18">
<p>Charge sheet filed By:<input name="C_name" type="text" size="18">
</p>
<button type="Insert" name="save">save</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</form>
</body>
</head>
</html>
