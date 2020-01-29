<?php
session_start();
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");

if(isset($_POST['save']))
{
  
     $nn= $_SESSION['namee'];
      $no=$_POST['pos'];
      $ho=$_POST['h_name'];
      $do=$_POST['d_name'];
     $nno=$_POST['n_name'];
     $ago=$_POST['a_name'];
     $seo=$_POST['s_name'];
     $deao=$_POST['dd_name'];
     $addo=$_POST['aa_name'];
     $heio=$_POST['hh_name'];
     $weio=$_POST['w_name'];
     $exto=$_POST['ex_name'];
     $into=$_POST['in_name'];
     $psto=$_POST['psti_name'];
     $pseo=$_POST['psei_name'];

     $result="INSERT INTO post(uname,pn,ho,dr,na,ag,se,death,addr,hei,wei,exter,inter,pst,pet)VALUES('$nn','$no','$ho','$do','$nno','$ago','$seo','$deao','$addo','$heio','$weio','$exto','$into','$psto','$pseo')";
     $output=mysqli_query($connection,$result);
    if($output)
    {
        echo"<h3>Succesful!!</h3>";
     header("Location:criminalrecord.php");
    }
}
?>



<!doctype html>
<head>
<style>
.employee{
padding:0;
width:350px;
min-hight:100px;
float:left;
margin-left:400px;
}
.emp{
padding:0;
width:350px;
min-hight:100px;
float:right;
margin-right:400px;
}
.but{
     float:left;
     margin-left:650px;
     margin-bottom: 100px:
     }
#p2{
  margin-top: 30px;
}
#p1{
 margin-top: 20px;
}
.cri{
    float:left;
    margin-bottom:200px;
   }
   .bg{
  background-image: url("jj.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="bg">
<form action="post.php" method="post">
<center>
<h1><u>Postmortem Report</u></h1>
<div class="employee">
<p><Table>
<tr<td></td></tr></table>
<p>Postmortem NO: <select name="pos">
<option>p11203</option>
<option>p11204</option>
<option>p11205</option>
<option>p11206</option>
<option>p11207</option>
</select>
<p id="p1"> Hospital Name<input name="h_name" type="text" size="18" hight="5"></p>
<p id="p1">DR. Name<input name="d_name" type="text" size="18" hight="5"></p>
<p id="p1">Name<input name="n_name" type="text" size="18" hight="5"></p>
<p id="p1">Age<input name="a_name" type="text" size="18" hight="5"></p>
<p>Sex<input name="s_name" type="text" size="18" hight="5"></p>
<p id="p1">Death Details<input name="dd_name" type="text" size="18" hight="5"></p>
</div>
<div class="emp">
<p id="p2">Address:<input name="aa_name" type="text" size="18" hight="5"></p>
<p id="p1">Height<input name="hh_name" type="text" size="18" hight="5"></p>
<p id="p1">Weight<input name="w_name" type="text" size="18" hight="5"></p>
<p id="p1">External injury<input name="ex_name" type="text" size="18" hight="5"></p>
<p id="p1">Internal injury<input name="in_name" type="text" size="18" hight="5"></p>
<p id="p1">postmortem starting time<input name="psti_name" type="text" size="18" hight="5"></p>
<p id="p1">postmortem ending time<input name="psei_name" type="text" size="18" hight="5"></p>
</div>
<div class="but">
<button type="Insert" name="save">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Delete</button>

</div>
</center>
</form>
</body>
</html>