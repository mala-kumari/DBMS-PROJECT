
<?php
session_start();

?>



<!doctype html>
<html>
<head>
<style>
.container{
          float:left;
          padding:0;
          margin:0 0 500px;}
*{
margin:0px;
padding:0px;
}
#container ul{
list-style:none;
}
#container ul li{
background-color:#3C3E94;
width:150px;
border:1px solid white;
height:35px;
line-height:35px;
text-align:center;
float:left;
color:white;
font-size:15px;
position:relative;
}
#container ul li:hover{
background-color:#388222;
}
#container ul ul{
display:none;
}
#container ul li:hover>ul{
display:block;
}
.bg{
  background-image: url("c2.webp");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<meta charset="utf-8">
<center>
<h1><u><b>CRIME  RECORD  MANAGEMENT  SYSTEM</b></u></h1></center>
</head>
<body class="bg">
<div id="container">
<ul>
<li>Department
<ul>
<a href="s1.php">
<li>Designation Master</li>
</a>
<a href="s2.php">
<li>Department Master</li>
</a>
<a href="s3.php">
<li>Department Employee Master</li>
</a>
<a href="s4.php">
<li>Police Station Master</li>
</a>
</ul>
</li>
<li>Crime
<ul>
<a href="s5.php">
<li>Crime Category Master</li>
</a>
<a href="s13.php">
<li>Crime Category Nature Master</li>
</a>
<a href="s6.php">
<li>Victim Master</li></a>
<a href="s7.php">
<li>Victim FIR Master</li></a>
</ul>
</li>
<li>Investigation
<ul>
<a href="s8.php">
<li>Investigation Master</li></a>
<a href="s9.php">
<li>Crime Sequence Estimation Master</li></a>
<a href="s15.php">
<li>Crime Witness Master</li></a>
<a href="s14.php">
<li>Evidence type master</li></a>
<a href="s10.php">
<li>Evidence Master</li></a>
</ul>
</li>
<li>Chargesheet
<ul>
<a href="s11.php">
<li>Crime Charge Sheet Master</li></a>
</ul>
</li>
<a href="forensic.pdf">
<li>Forensic Report
</li></a>
<a href="post.php">
<li>Postmortem
</li></a>
<a href="s12.php">
<li>Login Master</li></a>
<a href="criminalrecord.php">
<li>Criminal Record
</li></a>
<a href="passfile.html">
<li>Security</li></a>
</li>
</ul>
</div>
<div class="slider-frame">
<div class="slide-image">
<div class="img-container">
<img src="download.jpg">

<div class="img-container">
<img src="arrest.jpg">
</div>
<div class="img-container">
<img src="sym.jpg">
</div>
<div class="img-container">
<img src="s32.jpg">
</div>
<div class="img-container">
<img src="s121.jpg">
</div>
<div class="img-container">
<img src="s21.jpg">
</div>
</div>
</div>
</div>
</body>
</html>

