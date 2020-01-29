<?php
$msg="";
if(isset($_POST['upload']))
{
$target="image/".basename($_FILES['image']['name']);
$connection=mysqli_connect('localhost','root','','photos');
$image=$_FILES['image']['name'];
$sql="INSERT INTO images(i_image)VALUES('$image')";
$output=mysqli_query($connection,$sql);
if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
    $msg="Image upload successfully";

}else{
    $msg="There was a problem uploading image";
}
}

?>


<!DOCTYPE html>
<html>
<style>

</style>
<body>
<div id="content">
<?php
$connection=mysqli_connect('localhost','root','','photos');
$sql="select * FROM images";
$result=mysqli_query($connection,$sql);
while($row=mysqli_fetch_array($result)){
    echo"<div id='img_div'>";
    echo"<img src='image/".$row['i_image']."'>";
    echo"</div>";
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
   <p><b><u>Attach Evidence Image And Files</u></b></p>
    <div>
    <input type="file" name="image" >
    </div>
    <div>
    <input type="submit" name ="upload" value="Upload Image">
    </div>
</form>
</div>
</body>
</html>
