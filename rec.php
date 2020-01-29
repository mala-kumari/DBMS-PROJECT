<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>
<h2>MASSAGE</h2>

<div class="card">
  
<?php

$con=mysqli_connect('localhost','root','','crime_management');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$dt = date("Y/m/d");
$result = mysqli_query($con,"SELECT * FROM msgg" );


while($row = mysqli_fetch_array($result))
{
  echo "<div class='card'>";
  echo "<center><h3>" . $row['heading_g'] . "</h3></center>";
  echo "<center><p>" . $row['content_c'] . "<p></center>";
  echo "</div>";
}

mysqli_close($con);
?>
  </div>
</div>

</body>
</html> 
