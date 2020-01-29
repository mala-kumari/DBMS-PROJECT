<?php
session_start();
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
if(isset($_POST['insert']))
{
    $nn= $_SESSION['namee'];
    $evi=$_POST['evi_id'];
    $inv=$_POST['inve'];
    $evity=$_POST['ev'];
    $evda=$_POST['ev_name'];
    $result="INSERT INTO evidence_master(uname,evidence_id,investigation_id,evidence_type_id,evidence_date)VALUES('$nn','$evi','$inv','$evity','$evda')";
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
<body bgcolor="lightblue">
    <form action="s10.php" method="post">
<center>
<h1>Evidence Master</h1>
<p><Table>
<tr><td></td></tr></table>
<p>Evidence ID: <select name="evi_id">
<option>Ev1203</option>
<option>Ev1204</option>
<option>Ev1205</option>
<option>Ev1206</option>
<option>Ev1207</option>
</select>
<p><Table>
<tr><td></td></tr></table>
<p>Investigation ID: <select name="inve">
<option>Iv1203</option>
<option>Iv204</option>
<option>Iv1205</option>
<option>Iv206</option>
<option>Iv1207</option>
</select>
<p><Table>
<tr><td></td></tr></table>
<p>Evidence Type ID: <select name="ev">
<option>Ivt1203</option>
<option></option>
<option>Ivt1205</option>
<option>Ivt206</option>
<option>Ivt1207</option>
</select>
<p>Evidence Date:<input name="ev_name" type="text" size="18">
</p>
<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</form>
</body>
</head>
</html>
