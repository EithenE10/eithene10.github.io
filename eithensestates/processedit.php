<?php
require 'connect.php';
$propertyid=$_POST['propertyid'];
$address=$_POST['address1'];
$town=$_POST['town'];
$county=$_POST['county'];
$price=$_POST['price'];
$bedrooms=$_POST['bedrooms'];
$description=$_POST['shortdescription'];
$longdescription=$_POST['longdescription'];
$image=$_POST['image'];
$categoryid=$_POST['categoryid'];
$vendor_email=$_POST['vendor_email'];
$sql= "UPDATE property SET address1='$address', town='$town', county='$county', price='$price', 
shortdescription='$description', longdescription='$longdescription', image='$image', categoryid='$categoryid', vendor_email='$vendor_email' WHERE propertyid=$propertyid";
if (mysqli_query( $link, $sql))
{
 header("Location: http://localhost/eithensestates/manageproperties.php");
 exit;
}
else 
{
echo "Could not update product";
}
mysqli_close($link);
?>

