<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Search Properties</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <style>
 #searchform {font-size: 0.8em; background-color: #ffffff; width: 30%; border-radius: 25px; padding: 20px; border: 5px solid #D4AF37; min-width: 300px; margin-left: 40px; margin-top:30px;}
 select{margin: 10px;}
 #btnSubmit {margin-left: 75px; margin-bottom: 10px;}
 </style>
 </head>
<body>
<div id="container">
<div id="header">
<img src="images\banner3.png"
width = "100%" height="300" alt = "Eithens Estates Banner">
</div>
<?php include("includes/nav.html");?>
<div id="content">
<form method="post" action="results.php" id="searchform">
<h3>Search Properties</h3>
<hr>
<div id ="gettown" class="searchbox">
<label> Location: </label>
<select name="location" required="required">
 <option value="">Select Town</option>
 <?php
   require "connect.php";
   $sql="select DISTINCT town from property";
   $result=mysqli_query($link, $sql);
   if (mysqli_num_rows($result) >0)
  {
   while ($row=mysqli_fetch_array($result)){
    $town=$row['town'];
    echo "<option value='$town'>$town</option>";
   }
  }
mysqli_close($link);
?>
</select>
</div>

<div id ="getcategory">
<label> Category: </label>
<select name="category" required="required">
<option value="">Select Category</option>
<?php
  require "connect.php";
  $sql="select * from category";
  $result=mysqli_query($link, $sql);
  if (mysqli_num_rows($result) >0)
  {
   while ($row=mysqli_fetch_array($result)){
     $categoryname=$row['categoryname'];
	 $categoryid=$row['categoryid'];
     echo "<option value='$categoryid'>$categoryname</option>";
   }
  }
mysqli_close($link);
?>
</select>
</div>

<div id="price">
<label>Price:</label>
<select name="price" required="required">
   <option value="">Select</option>
  <option value="1">Less than &euro; 100,000</option>
  <option value="2">&euro; 100,000 - &euro; 200,000</option>
  <option value="3">&euro; 200,000 - &euro; 300,000</option>
  <option value="4">Greater than &euro; 300,000 </option>
</select>
</div>

<div><button type="submit" name="submit" id="btnSubmit" class="backbutton">Search</button></div>
</form>
</div>
<?php include("includes/footer.html");?>
</div>
</body>

</html>