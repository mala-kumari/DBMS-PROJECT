<?php
session_start();
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
if(isset($_POST['insert']))
{
    $nn=$_SESSION['namee'];
    $inv=$_POST['inve_id'];
    $sta=$_POST['star_name'];
    $end=$_POST['end_name'];
    $result="INSERT INTO investigation_master(uname,invest_id,s_start_date,end_date)VALUES('$nn','$inv','$sta','$end')";
    $output=mysqli_query($connection,$result);
    if($output)
    {
        echo"<h3>succesful!!</h3>";
        header("Location:s9.php");
    }
}
?>
<! doctype html>
<head>
<body bgcolor="lightblue">
<form action="s8.php" method="post">
<center>
<h1>Investigation Master</h1>
<p><Table>
<tr><td></td></tr></table>
<p>Investigation ID: <select name="inve_id">
<option>i1203</option>
<option>i1204</option>
<option>i1205</option>
<option>i1206</option>
<option>i1207</option>
</select>
<p>Start Date :<input name="star_name" type="text" size="18"></p>
<p>End Date :<input name="end_name" type="text" size="18">
</p>
<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</form>
</body>
</head>
</html>
