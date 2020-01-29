


<?php
$connection=mysqli_connect('localhost','root','','crime_management') or die("not connected");
session_start();
if(isset($_POST['save']))
{
 // echo "ok!!";
    $name = $_POST['name'];
    echo $_SESSION['namee']=$name;
    $password = $_POST['login_password'];
    $result=mysqli_query($connection,"SELECT * FROM people WHERE naame='".$name. "'");
    $row=mysqli_fetch_array($result);
    if($password==$row['p_password'])
    {
        header("Location:insh.php");
    }
    else{
      echo"incorrect password";
    }
    }

?>

<! doctype html>
<style>
.gt{
   text-align:center;
   margin-top:65px;
   text-size:50px;
color:black;
   }
.w3-container1{
    padding:0;
    float:right;
    margin-right:100px;
   }
.w3-container{
    padding
    float:left;
    margin-left:0px;    
}
.col-right{
    float:left;
    padding:0;
    margin-left:200px;
   }
.img1{
   padding:0;
   margin-left:600px;
  }    

.img2{
     
   
              max-width: 100px;
             position: relative;
             margin: auto;
             float:right;
             margin-right:100px;
             width:0 0 800px;
             }    
  
.mySlides {display:none;
text-align="right";}
.rr{
    float:right;
    margin-right:60px;
}
.bg{
  background-image: url("background.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="bg">
<center>
<h1><u>CRIME RECORD MANEGMENT SYSTEM</u></h1>
<img src="sym.jpg"><br>
</center>
<div class="rr"> 
<a href="sighin.php">
<button type="submit" name="retrive">Create account</button>
</a></div>
<a href="complaint.php">
<button type="submit" name="retrive">complaint</button></a>
<form action="login.php" method="post">
<div class="gt">
<p>User Name :<input name="name" type="text" size="20"></p>
<p>Password : <input name="login_password" type="password" size="22"></p>
<button type="submit" name="save">Sign In</button>
</div>
</form>

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
<div class="w3-container">
 <!-- <h1 style="color:blue;">Most Wanted</h1><br>-->
  </div>
  <div class="col-right">
<!--  <h1 style="color:blue;">Missing Person</h1> -->
</div> 
<div class="w3-container1">
<!--<h1 style="color:blue;">Ciber Crime</h1><br>-->
</div> 
<div class="w3-content w3-section" style="max-width:500px" text-align="bottom">
  <img class="mySlides w3-animate-top" src="wanted1.jpg" style="width:70%">
  <img class="mySlides w3-animate-bottom" src="wanted2.jpg" style="width:70%">
  <img class="mySlides w3-animate-top" src="wanted3.jpg" style="width:70%">
  <img class="mySlides w3-animate-bottom" src="wanted4.jpg" style="width:70%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>

<div class="img1">
<div class="w3-content w3-section" style="max-width:500px" text-align="bottom">
  <img class="mySlides w3-animate-top" src="mis1.jpg" style="width:50%">
  <img class="mySlides w3-animate-bottom" src="mis2.jpg" style="width:50%">
  <img class="mySlides w3-animate-top" src="mis3.jpg" style="width:50%">
  <img class="mySlides w3-animate-bottom" src="s121.jpg" style="width:50%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>
<div class="img2">
<div class="w3-content w3-section" style="max-width:500px" text-align="bottom">
  <img class="mySlides w3-animate-top" src="cy1.jpg" style="width:300%">
  <img class="mySlides w3-animate-bottom" src="cy2.jpg" style="width:300%">
  <img class="mySlides w3-animate-top" src="cy3.jpg" style="width:300%">
  <img class="mySlides w3-animate-bottom" src="cy4.jpg" style="width:300%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>



</body>
</html>
