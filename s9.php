<?php
session_start();
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
if(isset($_POST['insert']))
{
    $nn=$_SESSION['namee'];
    $sec=$_POST['sque_id'];
    $fir=$_POST['fir_no'];
    $des=$_POST['desc_name'];
    $result="INSERT INTO crime_sequence(uname,sequence_id,fir_no,descr)VALUES('$nn','$sec','$fir','$des')";
    $output=mysqli_query($connection,$result);
    if($output)
    {
        echo"<h3>Succesful!!</h3>";
        header("Location:s15.php");
    }
}
?>
<! doctype html>
<head>
<body bgcolor="lightblue">
    <form action="s9.php" method="post">
<center>
<h1>Crime Sequence</h1>
<p><Table>
<tr><td></td></tr></table>
<p>Sequence ID: <select name="sque_id">
<option>s1203</option>
<option>s1204</option>
<option>s1205</option>
<option>s1206</option>
<option>s1207</option>
</select>
<p><Table>
<tr><td></td></tr></table>
<p>FIR NO.: <select name="fir_no">
<option>F1203</option>
<option>F1204</option>
<option>F1205</option>
<option>F1206</option>
<option>F1207</option>
</select>
<p>Description :<input name="desc_name" type="text" size="18"></p>
<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</form>
</body>
</head>
</html>
