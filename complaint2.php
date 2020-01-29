<!DOCTYPE html>
<html>
<style>

div {
   margin-left: 400px;
   margin-right: 400px;
   margin-top: 20px;
  border-radius: 5px;
  background-color: rgba(0, 0, 0, 0.2);
  padding: 20px;
}

.card {
  /* Add shadows to create the "card" effect */
  background: rgba(0,0,0,0.2);
  box-shadow: 0 4px 8px 0  rgba(0,0,0,1);
  transition: 0.2s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,1);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}

</style>

<body>

<center>
<h2>COMPLAINS</h2>
<center>

<div 
<?php

$con=mysqli_connect('localhost','root','','crime_management');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$dt = date("Y/m/d");
$result = mysqli_query($con,"SELECT * FROM complaint " );


while($row = mysqli_fetch_array($result))
{
  echo "<div class='card'>";
  echo "<center><h3>" . $row['heading'] . "</h3></center>";
  echo "<center><p>" . $row['content'] . "<p></center>";
  echo "</div>";
}

mysqli_close($con);
?>
  </div>

</body>
</html>