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
//added all the above stuff

<?php
require 'connect.php';
$vendor_email=$_POST['vendor_email'];
$vendor_firstname=$_POST['vendor_firstname'];
$vendor_surname=$_POST['vendor_surname'];
$vendor_phone=$_POST['vendor_phone'];
$sql= sprintf('UPDATE vendor SET vendor_email = "%s", vendor_firstname = "%s", vendor_surname = "%s", vendor_phone = "%s" WHERE vendor_email="%s"',
$vendor_email,
$vendor_firstname,
$vendor_surname,
$vendor_phone,
$vendor_email
);





if (mysqli_query( $link, $sql))
{
 header("Location: http://localhost/eithensestates/managevendors.php");
 exit;
}
else 
{
echo "Could not update Vendor, please try again!";
}
mysqli_close($link);
?>

