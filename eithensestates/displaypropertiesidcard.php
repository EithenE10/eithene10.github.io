<!DOCTYPE HTML>
<html lang="en">
<head>
 <title>Display Properties by categoryid</title>
 <meta charset="utf-8">
<link rel="stylesheet" href="css/styles.css">
<!-- these styles can be moved to the styles.css stylesheet-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
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
<?php
require 'connect.php';
$categoryid=$_GET["categoryid"]; //parameter is passed in the url and accessed using GET
$sql="SELECT * from property, category WHERE property.categoryid=$categoryid AND 
category.categoryid=$categoryid"; /*accessing records from both tables to identify the 
categoryname as well as the product records in that category*/

$output=mysqli_query($link, $sql);
if(mysqli_num_rows($output)>0)
{
$getcategory=mysqli_fetch_array($output);
echo "<h3><p style='color:#D4AF37'>";
echo $getcategory["categoryname"]; //output category name at the top of the page
echo "</h3></p>";
}
$result=mysqli_query($link, $sql);
$rows=mysqli_num_rows($result); // Return the number of rows in result set
if($rows>0) //if records exist
{
$cols = 3; // Define number of columns
$counter = 1; // Counter used to identify if we need to start or end a row
 while($row=mysqli_fetch_array($result)) {if(($counter % $cols) == 1) { // Check if it's new row ?>
 <br><br><!--space between rows-->
 <div class="newrow"> <!--start a new row-->
 <?php
 }
 $propertyid=$row["propertyid"];
 $image=$row["image"];
 $address1=$row["address1"];
 $shortdescription=$row["shortdescription"];
 $price=$row["price"];?>
 <div class="col"> <!--create a column for a product-->
 <div class="card"> <!--create a styled card for a product-->
 <div class="card-image"><!--create a styled div for the image-->
 <?php
 echo "<img src='$image' style='max-width:65%;'>"?>
 </div>
 <hr>
 <div class="card-body">
 <?php 
 echo "<h4>$address1</h4>"; //output the product name
 echo "&euro;"; echo $price; //output the euro sign and price
 ?>
<p class="card-text">
<?php 
 echo "$shortdescription";
 echo "</p>"
?>
 
<div class="detailslink">
 <?php echo "<a href='moredetails.php?propertyid=$propertyid'>More Details</a>";?>
 <br><br>
 </div> <!--close detailslink-->
 </div> <!--close the card-body-->
 </div> <!--close the card-->
 </div> <!--close the column-->
 
 <?php
 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
 echo "</div>"; //close the row
 }
 $counter++; // increase the counter
 } //end of while loop
 echo"</div><br><br>"; //close the last row and add some space
 }
else 
 {
 echo "<h3>There are no properties in this category</h3>";
 } //end if
mysqli_free_result($result); //free the memory associated with result
 mysqli_close($link); //close the connection
?>
</div> <!--close the content div-->
<p>
<button onclick="goBack()" class="backbutton">Go Back to Previous Page</button>
<script>
function goBack() {
 window.history.back();
}
</script>
</p>
<?php include("includes/footer.html");?>
</div> <!--close the container-->
</body>
</html>

