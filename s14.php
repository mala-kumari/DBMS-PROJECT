<?php
session_start();
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
if(isset($_POST['insert']))
{
    $nn= $_SESSION['namee'];
    $evid= $_POST['evii'];
    $Ename= $_POST['E_name'];
    $Dname= $_POST['DE_name'];
    $result="INSERT INTO evidence_type_master(uname,evidence_id,evidence_name,descri)VALUES('$nn','$evid','$Ename','$Dname')";
    $output=mysqli_query($connection,$result);
    if($output)
    {
        echo"<h3>succesful!!!</h3>";
    }
    header("Location:s10.php");
}
?>

<! doctype html>
<head>
<body bgcolor="lightblue">
<center>
<h1>Evidence Type Master</h1>
<form action="s14.php" method="post">
<p><Table>
<tr<td></td></tr></table>
<p>Evidence ID: <select name="evii">
<option>Ni1203</option>
<option>Ni1204</option>
<option>Ni1205</option>
<option>Ni1206</option>
<option>Ni1207</option>
</select>
<p>Evidence  Name :<input name="E_name" type="text" size="18">
</p>
<p>Description :<input name="DE_name" type="text" size="18">
</p>
<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</form>
</body>
</head>
</html>
