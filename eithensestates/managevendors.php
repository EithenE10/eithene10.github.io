<!DOCTYPE html>
<html lang="en">
<head>
<title>Manage Vendors</title>
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
<a href="addvendor.php">Add a new vendor</a>
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "eithensestates");

$sql="SELECT * from vendor";
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
<td><strong>Email</td>
<td><strong>First Name</td>
<td><strong>Last Name</td>
<td><strong>Phone Number</td>
<td><strong>Edit</td>
<td><strong>Delete</td>
</tr>";



while($row=mysqli_fetch_array($result)) {
$vendor_email=$row['vendor_email'];
$vendor_firstname=$row["vendor_firstname"];
$vendor_surname=$row["vendor_surname"];
$vendor_phone=$row["vendor_phone"];
echo "<tr>
<td>$vendor_email</td>
<td>$vendor_firstname</td>
<td>$vendor_surname</td>
<td>$vendor_phone</td>
<td><a href='editvendor.php?vendor_email=$vendor_email'>Edit</a></td>
<td><a href='confirmdeletevendor.php?vendor_email=$vendor_email'>Delete</a></td>
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