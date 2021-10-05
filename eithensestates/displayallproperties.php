<!DOCTYPE html>
<html lang="en">
<head>
<title>Display All Properties</title>
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
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "eithensestates");

$sql="SELECT * from property";
$result=mysqli_query($link, $sql);


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
$image=$row["image"];
$address=$row["address1"];
$price=$row["price"];
$description=$row["shortdescription"];
echo "<tr>
<td><img src='$image' width=100 height=100> </td>
<td>$address</td>
<td>&euro; $price</td>
<td>$description</td>
<td><a href='moredetails.php?propertyid=$propertyid'>Details</a></td>
</tr>";
}
echo "</table>";
mysqli_close($link);
?>
</div>





<?php include("includes/footer.html");?>
</div>
</div>
</body>
</html>