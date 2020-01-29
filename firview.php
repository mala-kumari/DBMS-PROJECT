<?php
session_start();
$con=mysqli_connect('localhost','root','','crime_management');
if(mysqli_connect_error())
{
 echo "Failed to connect to mysql:" .mysqli_connect_error(); 
}
    
    $result=mysqli_query($con,"SELECT * FROM fir ");
    echo"<center>";
    echo "<b> <u>ALL TYPE FIR </u></b>";
    echo "</center>";
    echo"
    <table border=2>
    <tr>
    <th>District Name :</th>
    <th>Police Station Name:</th>
    <th>Complaint Type :</th>
    <th>Occurance Date :</th>
    <th>Details:</th>
    <th>Suspect Details :</th>
    <th>Victim Name:</th>
    <th>Category:</th>
    <th>Identification NO. :</th>
    <th>Permanent Address:</th>
    <th>Contact NO. :</th>
    <th>Email Id :</th>
    <th>Case solved :</th>
    <th>Evidence Image. :</th>
    
    </tr>";
    $i=0;
    
    while ($row = mysqli_fetch_array($result))
    {
        
        echo "<tr>
        <td>" . $row['District_name'] . "</td>
        <td>" . $row['Police_station_name'] . "</td>
        <td>" . $row['Complaint_type'] . "</td>
        <td>" . $row['occurance_date'] . "</td>
        <td>" . $row['Details'] . "</td>
        <td>" . $row['Suspect_Details'] . "</td>
        <td>" . $row['victim_name'] . "</td>
        <td>" . $row['category'] . "</td>
        <td>" . $row['identification_no'] . "</td>
        <td>" . $row['permanent_add'] . "</td>
        <td>" . $row['contact_no'] . "</td>
        <td>" . $row['Email_id'] . "</td>";
       
    
?>
        <td>
        <form action="firview.php" method="post">
       <input type="submit" name="action" value="<?php echo $row['checked'] ?>"/>
        <input type="hidden" name="id" value="<?php echo $row['user_id'] ?>"/>
        </form>
        </td>
       
    
    
<?php

echo"<td><img src='image/".$row['i_image']."'/></td>";
echo "</tr>";
    }
echo "</table>";



if(isset($_POST['action']) && isset($_POST['id']))
{

   $id=$_POST['id'];
   
   $sql = "UPDATE fir SET checked='solved' where user_id=' ". $id ." '";
   

if($con->query($sql)== TRUE)
{
    echo "Solved";
}
else{
    echo"dshjdsc";
}

}

mysqli_close($con);

?>
<html>
<style>
     .bg{
  background-image: url("bc2.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
    <body class="bg">
</body>

    </html>