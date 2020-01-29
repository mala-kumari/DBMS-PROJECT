
<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
if(isset($_POST['insert']))
{
    $nn= $_SESSION['namee'];
    $nid= $_POST['nname'];
    $cid= $_POST['C_name'];
    $Nna= $_POST['N_name'];
    $dna= $_POST['D_name'];
    $result="INSERT INTO crime_category_nature_master(uname,nature_id,category_id,nature_name,des_c)VALUES('$nn','$nid','$cid','$Nna','$dna')";
    $output=mysqli_query($connection,$result);
    if($output)
    {
        echo"<h3>succesful!!!</h3>";
    }
    header("Location:s6.php");
}
?>

<! doctype html>
<head>
<body bgcolor="lightblue">
    <form action="s13.php" method="post">
<center>
<h1>Crime Category Nature Master</h1>
<p><Table>
<tr<td></td></tr></table>
<p>Nature ID: <select name="nname">
<option>N1203</option>
<option>N1204</option>
<option>N1205</option>
<option>N1206</option>
<option>N1207</option>
</select>
<p><Table>
<tr<td></td></tr></table>
<p>Category ID: <select name="C_name">
<option>CT1203</option>
<option>CT1204</option>
<option>CT1205</option>
<option>CT1206</option>
<option>CT1207</option>
</select>
<p>Nature Name :<input name="N_name" type="text" size="18">
</p>
<p>Description :<input name="D_name" type="text" size="18">
</p>
<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</form>
</body>
</head>
</html>
