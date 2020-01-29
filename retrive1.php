
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body bgcolor="lightblue">

<?php
$con=mysqli_connect('localhost','root','','crime_management');
if(mysqli_connect_error())
{
 echo "Failed to connect to mysql:" .mysqli_connect_error(); 
}
$result=mysqli_query($con,"SELECT * FROM user where u_name='aditi'");
echo "<table align='center' >
<tr>
<th>User Name</th>
<th>Password</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>"  . $row['u_name'] ."</td>";
    echo "<td>" .$row['user_password'] ."</td>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>

