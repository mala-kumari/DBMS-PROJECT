<!DOCTYPE html>
<html>
    <head>
        <style>
            table th,td {
                padding:10px;
        
                border-collapse:collapse;

            }
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body bgcolor="lightblue">
    <center>
    <h2><u>CRIME  CATEGORY NATURE MASTER</u></h2>
</center>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  
  <img src="rr6.jpg" width="1520px" height="350px">

  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  
  <img src="rr4.jpg"  width="1520px" height="350px">

  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  
  <img src="rr5.jpg"  width="1520px" height="350px">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>   
<?php
session_start();
$con=mysqli_connect('localhost','root','','crime_management');
if(mysqli_connect_error())
{
 echo "Failed to connect to mysql:" .mysqli_connect_error(); 
}
      $n=$_SESSION['namee'];
      $result=mysqli_query($con,"SELECT * FROM crime_category_nature_master WHERE uname='".$n. "'");
      $row=mysqli_fetch_array($result);
      $idd=$row['user_id'];
      $_SESSION["id6"]=$idd;
      echo"<center>";
      echo "<table>";
    echo "<tr>";
    echo "<th>Nature ID :</th>";
    echo "<td>" . $row['nature_id'] . "</td>";
    echo"</tr>";
    echo"<tr>";
    echo "<th>Category ID :</th>";
    echo "<td>" . $row['category_id'] . "</td>";
    echo "</th>";
    echo"<tr>";
    echo "<th>Nature Name:</th>";
    echo "<td>" . $row['nature_name'] . "</td>";
    echo"</tr>";
    echo "<tr>";
    echo"<th>Description :</th>";
    echo "<td >" . $row['des_c'] . "</td>";
    echo"</tr>";
echo "</table>";
echo "</center>";
if(isset($_POST['delete']))
  {

    // sql to delete a record
$sql = "DELETE FROM crime_category_nature_master WHERE user_id='".$ver."'";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}
  }
mysqli_close($con);
?>
<center>
<form action="r8.php" method="post">
<button type="Insert" name="delete">Delete</button>
</form>
<a href="ch6.php">
<button type="Insert" name="change">Change</button>
</a>
</center>
<a href="r8.php">
<button type="Insert" name="next">Next</button>
</a>
</body>
</html>