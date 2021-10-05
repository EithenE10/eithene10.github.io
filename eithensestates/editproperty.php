<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Edit Properties</title>
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
$propertyid=$_GET["propertyid"];
$sql="SELECT * FROM property WHERE propertyid=$propertyid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$propertyid=$row["propertyid"];
$address=$row["address1"];
$town=$row["town"];
$county=$row["county"];
$price=$row["price"];
$bedrooms=$row["bedrooms"];
$description=$row["shortdescription"];
$longdescription=$row["longdescription"];
$image=$row["image"];
$categoryid=$row["categoryid"];
$vendor_email=$row["vendor_email"];
mysqli_close($link);
?>

<form method="post" action="processedit.php">
<input type="hidden" name="propertyid" value="<?php echo $propertyid; ?>"/>
<table>
<tr>
<td><?php echo "<img src='$image' width=100 height=100>" ?></td>
</tr>
<tr>
<td>Property Address:</td><td><input type="text" name="address1" value="<?php echo 
$address; ?>"/></td>
</tr>
<tr>
<td>Town:</td><td><input type="text" name="town" value="<?php echo 
$town; ?>"/></td>
</tr>
<tr>
<td>County:</td><td><input type="text" name="county" value="<?php echo 
$county; ?>"/></td>
</tr>
<tr>
<td>Price:</td><td><input type="text" name="price" value= "<?php echo $price; ?>" /></td>
</tr>
<tr>
<td>Bedrooms:</td><td><input type="text" name="bedrooms" value="<?php echo 
$bedrooms; ?>"/></td>
</tr>
<tr>
<td>Description: </td><td><textarea name="shortdescription" rows="8" cols="35"><?php echo $description; 
?></textarea></td>
</tr>
<tr>
<td>Further Details: </td> <td><textarea name="longdescription" rows="8" cols="35"><?php echo $longdescription; ?></textarea></td>
</tr>
<tr>
<td>Image path: </td><td><input type="text" name="image" value="<?php echo $image; 
?>"/></td>
</tr>
<td>Category ID: </td><td><input type="number" name="categoryid" value="<?php echo 
$categoryid; ?>"/></td>
</tr>
<tr>
<td>Vendor Email: </td><td><input type="text" name="vendor_email" value="<?php echo 
$vendor_email; ?>"readonly /></td>
<tr>
<tr>
<td><input type="submit" name="submit" value="Update Property"/></td>
</tr>
</table>
</form>




















</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
