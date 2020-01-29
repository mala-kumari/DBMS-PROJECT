<html>
    <style>
         .bg{
  background-image: url("bc1.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
        </style>
<body class="bg">
<?php
$img1="cy1.jpg";
$img2="cy3.jpg";
$md5img1=md5(file_get_contents($img1));
$md5img2=md5(file_get_contents($img2));
?>
<center>
<h1><u>Compair two image</u></h1>
<table border="2">
<tr>
<th>Image1</th>
<th>Image2</th>
<th>Result</th>
</tr>
<tr>

<td><img src="<?php echo $img1;?>" width="300em"/></td>
<td><img src="<?php echo $img2;?>" width="300em"/></td>
<?php
if($md5img1==$md5img2)
{
    echo"<td><b>Both image are same</b></td>";
}
else{
    echo"<td><b>Both image are diffrent</b></td>";
}
?>
</tr>
</table>
</center>
</body>
</html>