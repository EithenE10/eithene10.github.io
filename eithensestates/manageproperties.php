<!DOCTYPE html>
<html lang="en">
<head>
<title>Manage Properties</title>
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
<a href="addproperty.php">Add a new property</a>
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "eithensestates");

$sql="SELECT * from property";
$result=mysqli_query($link, $sql);




if(mysqli_num_rows($result)>0)
{
echo ("<table>");
}
else
{
echo ("There are no items in the databse");
}
echo "<tr>
<td><strong>Image</td>
<td><strong>Address</td>
<td><strong>Price</td>
<td><strong>Description</td>
<td><strong>Edit</td>
<td><strong>Delete</td>
</tr>";







while($row=mysqli_fetch_array($result)) {
$propertyid=$row["propertyid"];
$image=$row["image"];
$address=$row["address1"];
$description=$row["shortdescription"];
$price=$row["price"];
echo "<tr>
<td><img src='$image' width=100 height=100> </td>
<td>$address</td>
<td>&euro; $price</td>
<td>$description</td>
<td><a href='editproperty.php?propertyid=$propertyid'>Edit</a></td>
<td><a href='confirmdeleteproperty.php?propertyid=$propertyid'>Delete</a></td>
</tr>";
}
echo "</table>";
mysqli_close($link);
?>
</div>






</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>