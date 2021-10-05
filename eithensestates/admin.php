<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Admin Page</title>
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
<h3> <p style='color:#D4AF37'>Administrator Area</p></h3>
<?php
session_start();
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "<p style='color:#D4AF37'>Hi " . $username . "!" . "
";
echo "Choose one of the menu options to Manage Comments, Products or Vendors. &nbsp; 
&nbsp;</p>";
echo "<a href='logout.php'>Logout</a>";
echo "<p><a href='managecomments.php'>Manage Testimonials</a>
<p><a href='manageproperties.php'>Manage Properties</a>
<p><a href='managevendors.php'>Manage Vendors</a>";
}
?>








</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
