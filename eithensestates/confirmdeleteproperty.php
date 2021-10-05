<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Confirm Delete Property</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<div id="header">
<img src="images\banner3.png"
width = "100%" height="300" alt = "Eithens Estates Banner">
</div>
<?php include("includes/nav.html");?>
<div id="content">

<?php
require 'connect.php';
$propertyid=$_GET['propertyid'];
$sql="SELECT * from property where propertyid=$propertyid";
$result=mysqli_query($link, $sql);
echo "<h3><p style='color:#D4AF37'>Confirm Delete Property</p></h3>";
echo "<p>";
echo "<table>";
echo "<tr>
<td><strong>Image</td>
<td><strong>Address</td>
<td><strong>Price</td>
<td><strong>Description</td>
</tr>";
$row=mysqli_fetch_array($result);
$image=$row["image"];
$address=$row["address1"];
$shortdescription=$row["shortdescription"];
$price=$row["price"];
echo "<tr>
<td><img src='$image' width=100 height=100> </td>
<td>$address</td>
<td>&euro; $price</td>
<td>$shortdescription</td>
</tr>";
echo "</table>";
echo "<p style='color:#D4AF37'>Are you sure you want to delete this property?</p> <p>
<a href='deleteproperty.php?propertyid=$propertyid'>Delete</a>
<a href='manageproperties.php'>Cancel</a>";
mysqli_close($link);
?>

















</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
