<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
if(isset($_POST['insert']))
{
    $nn=$_SESSION['namee'];
    $desi=$_POST['desi_id'];
    echo $_SESSION['desi']=$desi;
    $desina=$_POST['Des_name'];
    echo $_SESSION['desina']=$desina;
    $dess=$_POST['Desc_name'];
    echo $_SESSION['dess']=$dess;
    $result="INSERT INTO designation_master(user,Designation_id,Designation_name,Designation_desc)VALUES('$nn','$desi','$desina','$dess')";
    $output=mysqli_query($connection,$result);
    if($output)
    {
        echo"<h3>Succesful!!</h3>";
        header("Location:s2.php");
    }
    
}
?>
<! doctype html>
<head>
<style>
.ho{
margin-top:150px;
}
.bg{
  background-image: url("background.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="bg">
    <form action="s1.php" method="post">
<div class="ho">
<center>
<h1><u>Designation Master</u></h1>
<p><Table>
<tr><td></td></tr></table>
<p>Designation ID: <select name="desi_id">
<option>E1203</option>
<option>E1204</option>
<option>E1205</option>
<option>E1206</option>
<option>E1207</option>
</select>
<p>Designation Name<input name="Des_name" type="text" size="18"></p>
<p>Designation Desc<input name="Desc_name" type="text" size="18">
</p>
<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</div>
</form>
</body>
</head>
</html>
