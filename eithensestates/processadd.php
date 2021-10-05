<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Add Property</title>
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
$address=$_POST["address1"];
$price=$_POST["price"];
$description=$_POST["shortdescription"];
$longdescription=$_POST["longdescription"];
$vendor_email=$_POST["vendor_email"];
$categoryid=$_POST["categoryid"];
$image=$_POST["image"];

$sql_insert="INSERT INTO property(address1, price, shortdescription, longdescription, vendor_email, 
categoryid, image) VALUES ('$address', '$price', '$description', '$longdescription', '$vendor_email', 
'$categoryid', '$image')";
if(mysqli_query($link, $sql_insert)) {
echo "<h3><p style='color:#D4AF37'>Property Added!</p></h3>";
echo "<a href='manageproperties.php'>Return to Manage Properties page</a>";}
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
