<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Add Vendor</title>
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
$vendor_email=$_POST["vendor_email"];
$vendor_firstname=$_POST["vendor_firstname"];
$vendor_surname=$_POST["vendor_surname"];
$vendor_phone=$_POST["vendor_phone"];

$sql_insert="INSERT INTO vendor(vendor_email, vendor_firstname, vendor_surname,
vendor_phone) VALUES ('$vendor_email', '$vendor_firstname', '$vendor_surname', '$vendor_phone')";

if(mysqli_query($link, $sql_insert)) {
echo "<h3><p style='color:#D4AF37'>Vendor Added!</p></h3>";
echo "<a href='admin.php'>Return to Admin page</a>";}
else {
echo "<p style='color:#D4AF37'>An error occurred, try again!</p> ";
}
mysqli_close($link);
?>






















</div>
<?php include("../includes/footer.html");?>
</div>
</body>
</html>
