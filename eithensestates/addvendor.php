<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Add Vendor</title>
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

<h3><p style='color:#D4AF37'>Add a Vendor</p></h3>
<p>
<div id="addvendor">
<form method="post" action="processaddvendor.php">
<table>
<tr>
<td>Vendor Email: </td>
<td><input type="text" name="vendor_email" required="required"/></td>
</tr>
<tr>
<td>Vendor First Name: </td>
<td><input type="text" name="vendor_firstname" required="required" /></td>
</tr>
<tr>
<td>Vendor Surname: </td>
<td><textarea name="vendor_surname" required="required" /></textarea></td>
</tr>
<tr>
<td>Vendor Phone Number: </td>
<td><textarea name="vendor_phone" required="required"/></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Add Vendor"/></td>
</tr>
</table>
</form>
</div>















</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
