<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Add Property</title>
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

<h3><p style='color:#D4AF37'>Add a Property</p></h3>
<p>
<div id="addproperty">
<form method="post" action="processadd.php">
<table>
<tr>
<td>Address: </td>
<td><input type="text" name="address1" required="required"/></td>
</tr>
<tr>
<td>Price: </td>
<td><input type="text" name="price" required="required" /></td>
</tr>
<tr>
<td>Description: </td>
<td><textarea name="shortdescription" rows="8" cols="35" required="required" /></textarea></td>
</tr>
<tr>
<td>Long Description: </td>
<td><textarea name="longdescription" rows="8" cols="35" required="required"/></textarea></td>
</tr>
<tr>
<td>Vendor Email: </td>
<td><input type="email" name="vendor_email" required="required" /></td>
</tr>
<tr>
<td>Category ID: </td>
<td><input type="number" name="categoryid" required="required" /></td>
</tr>
<tr>
<td>Image Path: </td>
<td><input type="text" name="image" required="required" /></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Add Property"/></td>
</tr>
</table>
</form>
</div>















</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
