<?php
session_start();
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
if(isset($_POST['insert']))
{
    $nn= $_SESSION['namee'];
    $wwid= $_POST['wid'];
    $fir= $_POST['fno'];
    $des= $_POST['d_name'];
    $result="INSERT INTO crime_witness(uname,witness_id,fir_no,des_cr)VALUES('$nn','$wwid','$fir','$des')";
    $output=mysqli_query($connection,$result);
    if($output)
    {
        echo"<h3>succesful!!!</h3>";
    }
    header("Location:s14.php");
}
?>

<!doctype html>
<head>
<body bgcolor="lightblue">
<center>
<h1>Crime Witness Master</h1>
<form action="s15.php" method="post">
<p><Table>
<tr<td></td></tr></table>
<p>Witness ID: <select name="wid">
<option>s51203</option>
<option>s51204</option>
<option>s51205</option>
<option>s51206</option>
<option>s51207</option>
</select>
<p><Table>
<tr<td></td></tr></table>
<p>FIR NO.: <select name="fno">
<option>F1203</option>
<option>F1204</option>
<option>F1205</option>
<option>F1206</option>
<option>F1207</option>
</select>
<p>Description :<input name="d_name" type="text" size="18">
</p>
<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</form>
</body>
</head>
</html>
