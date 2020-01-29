<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
session_start();
if(isset($_POST['insert']))
{
    $nn= $_SESSION['namee'];
    $cri_id= $_POST['crime'];
    echo $_SESSION['cri']=$cri;
    $crina= $_POST['crime_name'];
    echo $_SESSION['crina']=$crina;
    $descri= $_POST['decr_name'];
    echo $_SESSION['descri']=$descri;
    $result="INSERT INTO crime_category_master(uname,crime_category_id,crime_category_name,d_description)VALUES('$nn','$cri_id','$crina','$descri')";
    $output=mysqli_query($connection,$result);
    if($output)
    {
        echo"<h3>succesful!!!</h3>";
    }
    header("Location:s13.php");
}
?>
<! doctype html>
<head>
    <style>
         .bg{
  background-image: url("jj.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
        </style>
<body class="bg">
<form action="s5.php" method="post">
<center>
<h1><u>Crime Category Master</u></h1>
<p><Table>
<tr><td></td></tr></table>
<p>Crime category ID: <select name="crime">
<option>Ed11203</option>
<option>Ed11204</option>
<option>Ed11205</option>
<option>Ed11206</option>
<option>Ed11207</option>
</select>
<p>Crime Category Name :<input name="crime_name" type="text" size="18"></p>
<p>Description :<input name="decr_name" type="text" size="18">
</p>
<button type="Insert" name="insert">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>
</form>
</body>
</head>
</html>
