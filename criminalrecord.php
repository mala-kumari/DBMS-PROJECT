<?php
session_start();
$connection=mysqli_connect('localhost','root','','crime_management')or die("not connected");
$msg="";
if(isset($_POST['save']))
{
  
     $nn= $_SESSION['namee'];
      $no=$_POST['cr_id'];
      $ho=$_POST['cr_name'];
      $do=$_POST['ct_name'];
     $nno=$_POST['ad_name'];
     $ago=$_POST['co_name'];
     $seo=$_POST['hi_name'];
     $deao=$_POST['wei_name'];
     $addo=$_POST['arr_name'];
     $heio=$_POST['arc_name'];
     $weio=$_POST['ars_name'];
     $exto=$_POST['ar_name'];
     $into=$_POST['art_name'];
     $psto=$_POST['j_name'];
     $pseo=$_POST['cc_name'];

     $target="image/".basename($_FILES['image']['name']);
     $image=$_FILES['image']['name'];



     $result="INSERT INTO criminal(uname,ci,cn,ct,arr,con,hei,wei,arrp,arrc,arrs,arrco,arretim,jail,cloth,i_image)VALUES('$nn','$no','$ho','$do','$nno','$ago','$seo','$deao','$addo','$heio','$weio','$exto','$into','$psto','$pseo','$image')";
     $output=mysqli_query($connection,$result);
    if($output)
    {
        echo"<h3>Succesful!!</h3>";
     
    }
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
    $msg="Image upload successfully";

}else{
    $msg="There was a problem uploading image";
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
  background-image: url("bc4.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="bg">
<form action="" method="post" enctype="multipart/form-data">
<center>
<h1>Criminal  Record</h1>
<div class="employee">
<p><Table>
<tr<td></td></tr></table>
<p>Criminal_ID: <select name="cr_id">
<option>Ds11203</option>
<option>Ds11204</option>
<option>Ds11205</option>
<option>Ds11206</option>
<option>Ds11207</option>
</select>
<p id="p1"> Criminal Name<input name="cr_name" type="text" size="18" hight="5"></p>
<p id="p1">Criminal Type<input name="ct_name" type="text" size="18" hight="5"></p>
<p id="p1">Arrest date<input name="ad_name" type="text" size="18" hight="5"></p>
<p id="p1">Contact NO.<input name="co_name" type="text" size="18" hight="5"></p>
<p>Height<input name="hi_name" type="_text" size="18" hight="5">
<p id="p1">Weight<input name="wei_name" type="text" size="18" hight="5"></p>
</div>
<div class="emp">
<p id="p2">Arrest place<input name="arr_name" type="text" size="18" hight="5"></p>
<p id="p1">Arrest city<input name="arc_name" type="text" size="18" hight="5"></p>
<p id="p1">Arrest state<input name="ars_name" type="text" size="18" hight="5"></p>
<p id="p1">Arrest country<input name="ar_name" type="text" size="18" hight="5"></p>
<p id="p1">Arrest time<input name="art_name" type="text" size="18" hight="5"></p>
<p id="p1">jail Add:<input name="j_name" type="text" size="18" hight="5"></p>
<p id="p1">Criminal cloth No.<input name="cc_name" type="text" size="18" hight="5"></p>
</div>
<div class="but">
<button type="Insert" name="save">Insert</button>
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Search</button></br>
</div>
</center>
<div id="content">

<input type="hidden" name="size" value="1000000"></br>

    <p>Select Criminal image to upload:</p>
    <center>
    <div>
    <input type="file" name="image" >
    </div>
    
    </center>
</form>
</div>
</body>

</html>