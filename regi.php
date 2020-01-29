<?php
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
if(isset($_POST['regis']))
{
  $nnm=$_POST['uname'];
  $ema=$_POST['em_name'];
  $mob=$_POST['mo_name'];
  $dobb=$_POST['dob_name'];
  $passw=$_POST['psw'];
  $result="INSERT INTO regi(naame,email,mobile,dob,p_password)VALUES('$nnm','$ema','$mob','$dobb','$passw')";
  $output=mysqli_query($connection,$result);
  if($output)
  {
    echo"<h3>succesful!!!</h3>";
  }
  header("Location:complaint.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 35%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.bg{
  background-image: url("m2.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
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
<center>
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
</center>
</body>
<body class="bg">

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Create Account</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="regi.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="down.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="uname"><b>Email id</b></label>
      <input type="text" placeholder="Enter Email id" name="em_name" required>

      <label for="uname"><b>Mobile NO.</b></label>
      <input type="text" placeholder="Enter Mobile" name="mo_name" required>

      <label for="uname"><b>Date Of Birth</b></label>
      <input type="text" placeholder="Enter date of birth" name="dob_name" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
     

        
      <button type="submit" name="regis">Registerd</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="login.php">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
