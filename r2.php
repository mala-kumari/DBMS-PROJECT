<?phpsession_start();?>
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
  background-image: url("background.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<meta charset="utf-8">
<center>
<h1><u><I>CRIME  RECORD  MANAGEMENT  SYSTEM</I></u></h1></center>
</head>
<body class="bg">
<div id="container">
<ul>
<li>Department
<ul>
<a href="r4.php">
<li>Designation Master</li>
</a>
<a href="r3.php">
<li>Department Master</li>
</a>
<a href="r5.php">
<li>Department Employee Master</li>
</a>
<a href="r6.php">
<li>Police Station Master</li>
</a>
</ul>
</li>
<li>Crime
<ul>
<a href="r7.php">
<li>Crime Category Master</li>
</a>
<a href="crnature.php">
<li>Crime Category Nature Master</li>
</a>
<a href="r8.php">
<li>Victim Master</li></a>
<a href="vicfir.php">
<li>Victim FIR Master</li></a>
</ul>
</li>
<li>Investigation
<ul>
<a href="inve.php">
<li>Investigation Master</li></a>
<a href="csque.php">
<li>Crime Sequence Estimation Master</li></a>
<a href="cw.php">
<li>Crime Witness Master</li></a>
<a href="evid.php">
<li>Evidence type master</li></a>
<a href="evi.php">
<li>Evidence Master</li></a>
</ul>
</li>
<li>Chargesheet
<ul>
<a href="charge.php">
<li>Crime Charge Sheet Master</li></a>
</ul>
</li>
<a href="forensic.pdf">
<li>Forensic Report
</li></a>
<a href="post1.php">
<li>Postmortem
</li></a>
<li>Login Master</li>
<a href="criminal1.php">
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

