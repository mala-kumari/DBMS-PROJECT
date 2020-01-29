<?php

$connection=mysqli_connect('localhost','root','','crime_management') or die("not connect");

session_start();
if(isset($_POST['insert']))
{
   $nn=$_SESSION['namee'];
    $dis=$_POST['d_name'];
    $pol=$_POST['p_name'];
    $comp=$_POST['c_name'];
    $occu=$_POST['o_name'];
    $det=$_POST['dt_name'];
    $sus=$_POST['sus_name'];
    $na=$_POST['V_name'];
    $cat=$_POST['cat_name'];
    $ide=$_POST['id_na'];
    $per=$_POST['per_add'];
    $Cont=$_POST['con'];
    $email=$_POST['emai_id'];
    $check="unsolved";

    $target="image/".basename($_FILES['image']['name']);
     $image=$_FILES['image']['name'];
    $result="INSERT INTO fir(uname,District_name,Police_station_name,Complaint_type,occurance_date,Details,Suspect_Details,victim_name,category,identification_no,permanent_add,contact_no,Email_id,i_image,checked)VALUES('$nn','$dis','$pol','$comp','$occu','$det','$sus','$na','$cat','$ide','$per','$Cont','$email','$image','$check')";
    $output=mysqli_query($connection,$result);
    if($output)
    {
        
        echo"<h3>FIR Registered!!!</h3>";
        header("Location:crime.php");
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
<style>

.header{
       padding:2px 16px;
      text-align:left;
      background:#0033CC;
      color:white;
}
table,th,td{
border:1px solid black;
}
.para{
      float:right;
      margin-right:980px;
      color:red;
      }
.si{
    float:right;
    margin-right:960px;
    margin-bottom:20px;
    color:black;
   }
   .bg{
  background-image: url("bc12.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="bg">

<div class="header">    
<img src="s32.jpg"width="10%" hight="50%">     
</div>
<table style="width:10%" hight="10%">
<tr>
<td>Date Details</td></tr>
<tr>
<tr>
<td>Time Details</td></tr>
<tr>
<td>History of Police</th></td>
<tr>
<td>Details of forensic Doctor</td></tr>
<tr>
<td>Attach Evidence Details</td></tr>
<tr>
<td>Attach Evidence image</td></tr>
<tr>
<td>Attach investigation Details</td></tr>
<tr>
<td>Attach per day Details</td></tr>
<tr>
<td>Attach postmortem Details</td></tr>
<tr>
<td>Attach Autopsy Details</td></tr>
<tr>
<td>Attach Evidence file Details</td></tr>
<tr>
<td>Attach Chargesheet Details</td></tr>
<tr>
<td>Attach Department Details </td></tr>
<tr>
<td>Attach FIR details</td></tr>
<tr>
<td>Attach Chargesheet Details</td></tr>
<tr>
<td>Attach Evidence Details</td></tr>
<tr>
<td>Attach Evidence image</td></tr>
<div class="para">
<p style="font-size:20px;" "color:red;"><u><b>Submit complaints Information From  :</b></u></p>
</div>
<div class="si">
<p style="font-size:20px;"><u><b>submit to Police Station :</b><u></p>
<form action="fir.php" method="post" enctype="multipart/form-data">
<p>District Name :<input name="d_name" type="text" size="15"></p>
<p>Police Station Name :<input name="p_name" type="text" size="15"></p>
<p style="font-size:20px;"><u><b>Details of Complaint/Information to Police:</b></u></p>
<p>Complaint type :<input  name="c_name" type="text" size="15"></p>
<p>Occurance Date:<input name="o_name" type="text" size="15"></p>
<p>Details     :
<input name="dt_name" type="text" size="25">
</p>
<p>Suspect D.:
<input  name="sus_name" type="text" size="25">
</p>
<p style="font-size:20px;">Your Details :</p>
<p>Name :<input name="V_name" type="text" size="15"></p>
<p>category :<input name="cat_name" type="text" size="15"></p>
<p>Identification No.:<input name="id_na" type="text" size="15"></p>
<p>Permanent Address:
<input name="per_add" type="text" size="25">
</p>
<p>Contact No.:<input name="con" type="text" size="15"></p>
<p>Email  Id :<input  name="emai_id" type="text" size="15"></p>
<button type="submit" name="insert">Submit</button>
<div id="content">

<input type="hidden" name="size" value="1000000"></br>

    <p>Attach Evidence Image:</p>
    
    <div>
    <input type="file" name="image" >
    </div>
   
</form>
<a href="crime.php">
<button onclick="document.getElementById().style.display='block'"style="width:auto;">Next</button></a>
</div>
</body>
</html>