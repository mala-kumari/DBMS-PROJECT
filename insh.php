<!DOCTYPE html>
<html>
    <style>
      .bg{
  background-image: url("bc4.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
#myInput {
  background-image: url('searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-top: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 80%; /* Full-width */
  border: 2px solid #ddd; /* Add a grey border */
  font-size: 15px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}



        </style>
<body class="bg">
<a href="fir.php">
<button type="button">INSERT</button></a>
<a href="r2.php">
<button type="button">SHOW DATA</button></a>
<a href="com.php">
<button type="button">COMPAIR CRIMINAL IMAGE AND SIGNATURE</button></a>
</a>
<a href="map.php">
<button type="button">Serch Location</button></a>
</a>
<a href="firview.php">
<button type="button">ALL FIR</button></a>
</a>
<a href="complaint2.php">
<button type="button">Issues</button></a>
</a>
<a href="msg.php">
<button type="button">Massage Send</button></a>
</a>
<form action="" method="post">
<button type="logout" name="log">logout</button>
</form>
<i class="fa fa-search"></i>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

</body>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</html>




<?php
session_start();
$con=mysqli_connect('localhost','root','','crime_management');
if(isset($_POST['log']))
{
  session_unset();
  header("Location:login.php");
}
if(mysqli_connect_error())
{
 echo "Failed to connect to mysql:" .mysqli_connect_error(); 
}
    
    $result=mysqli_query($con,"SELECT * FROM criminal ");
    echo"<center>";
    echo "<b> <u>CRIMINAL  RECORD </u></b>";
    echo "</center>";
    echo"
    <table border=2 id='myTable'>
    <tr class='header'>
    <th>Criminal ID :</th>
    <th>Criminal Name:</th>
    <th>Criminal Type :</th>
    <th>Arrest Date :</th>
    <th>Contact No. :</th>
    <th>Height :</th>
    <th>Weight:</th>
    <th>Arrest place :</th>
    <th>Arrest City :</th>
    <th>Arrest State :</th>
    <th>Arrest Country :</th>
    <th>Arrest Time:</th>
    <th>Jail Add :</th>
    <th>Criminal Cloth No. :</th>
    <th>Criminal Image. :</th>
    </tr>";

    while ($row = mysqli_fetch_array($result))
    {
        
        echo "<tr>
        <td>" . $row['ci'] . "</td>
        <td>" . $row['cn'] . "</td>
        <td>" . $row['ct'] . "</td>
        <td>" . $row['arr'] . "</td>
        <td>" . $row['con'] . "</td>
        <td>" . $row['hei'] . "</td>
        <td>" . $row['wei'] . "</td>
        <td>" . $row['arrp'] . "</td>
        <td>" . $row['arrc'] . "</td>
        <td>" . $row['arrs'] . "</td>
        <td>" . $row['arrco'] . "</td>
        <td>" . $row['arretim'] . "</td>
        <td>" . $row['jail'] . "</td>
        <td>" . $row['cloth'] . "</td>
        <td><img src='image/".$row['i_image']."'/></td></tr>";
    }
echo"</table>";
mysqli_close($con);

?>




