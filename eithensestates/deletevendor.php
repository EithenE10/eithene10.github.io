<?php
require 'connect.php';
$vendor_email= $_GET['vendor_email'];
$sql= "DELETE FROM vendor WHERE vendor_email='$vendor_email'";
if (mysqli_query( $link, $sql))
{
header("Location: http://localhost/eithensestates/managevendors.php");
 exit;
}
else
{
 echo "Could not delete Vendor";
}
mysqli_close($link);
?>