<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Display Properties</title>
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
<div id="displayproperties">
<?php
require 'connect.php';
$categoryid= $_GET["categoryid"];
$sql="SELECT * from property, category WHERE property.categoryid=$categoryid AND 
category.categoryid=$categoryid";
$result=mysqli_query($link, $sql);



if(mysqli_num_rows($result)>0)
{
$output=mysqli_query($link, $sql);
$getcategory=mysqli_fetch_array($output);
echo "<h3><p style='color:#D4AF37'>";
echo $getcategory["categoryname"];
echo "</p></h3>";
echo "<table>";
echo "<tr>
<td><strong>Image</td>
<td><strong>Address</td>
<td><strong>Price</td>
<td><strong>Description</td>
<td><strong>Details</td>
</tr>";
while($row=mysqli_fetch_array($result)) {
$propertyid=$row["propertyid"];
$categoryid=$row["categoryid"];
$image=$row["image"];
$address=$row["address1"];
$productdesc=$row["shortdescription"];
$price=$row["price"];
echo "<tr>
<td><img src='$image' width=100 height=100> </td>
<td>$address</td>
<td>&euro; $price</td>
<td>$productdesc</td>
<td><a href='moredetails.php?propertyid=$propertyid'>Details</a></td>
</tr>";
}
echo "</table>";
}
else
{
echo "<h3> There are currently no items in this category</h3>";
}
mysqli_close($link);
?>
</div>
</div>









<?php include("includes/footer.html");?>
</div>

</div>
</body>
</html>
