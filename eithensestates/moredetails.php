<!DOCTYPE html>
<html lang="en">
<head>
<title>More Property Details</title>
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
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "eithensestates");
$propertyid= $_GET["propertyid"];
$sql= "SELECT * FROM property WHERE propertyid=$propertyid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$property=$row["propertyid"];
$address1=$row["address1"];
$price=$row["price"];
$shortdescription=$row["shortdescription"];
$description=$row["longdescription"];
$image=$row["image"];
echo "
<img src='$image' width=200 height=200' border=3px>
<h3>";
echo "<p style='color:#D4AF37'>Property Address</p>";
echo "</h3> <p style='color:#D4AF37'>$address1</p>
<br> <h3>";
echo "<p style='color:#D4AF37'>Property Details</p>";
echo "</h3> <p style='color:#D4AF37'>$description</p>
<h3>";
echo "<p style='color:#D4AF37'>Price</p>";
echo "</h3><p style='color:#D4AF37'> &euro; $price </p>";
mysqli_close($link);
?>
<p>
<button onclick="goBack()" class="backbutton">Go Back to Product Listing</button>
<script>
function goBack() {
 window.history.back();
}
</script>
</p>


</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>