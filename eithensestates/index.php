<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body id="home">
<div id="container">
<div id="header">
<img src="images\banner3.png"
width = "100%" height="300" alt = "Eithens Estates Banner">
</div>
<?php include("includes/nav.html");?>
<div id="content">
<div id="divcontainer">
<div id="whitebox1">
<img src="images\housyhouse3.jpg"
width= "40%" height="40%" alt="Buy a Home">
 <h2><span style="color: #673AB7">Buy a Home</span></h2>
 <p> 3+ prime homes for sale. </br></br>Eithen's Estates can match you with a house you will want to call home forever.</p>
<div id="buttonposition">
<a href="displaypropertiesidcard.php?categoryid=1" class="btn"> Search Homes</a>
</div>



<div id="whitebox2">
<img src="images\H2.jpg"
width= "40%" height="40%" alt="Buy Commercial Property">
<h2><span style="color: #673AB7">Commercial Property</span></h2>
<p> Are you interested in investing in a commercial property? </br></br>Or finding a home to open a new thriving business? </br></p>
<div id="buttonposition2">
<a href="displaypropertiesidcard.php?categoryid=2" class="btn2"> Click Here</a>
</div>

<div id="whitebox3">
<img src="images\H3.jpg"
width= "30%" height="30%" alt="Buy a plot of Land">
<h2><span style="color: #673AB7">Buy a Plot</span></h2>
<p> Or maybe you want to purchase a prime plot of land in the Irish countryside?</br></br> Or perhaps a vacant plot in the City suburbs? </p>
<div id="buttonposition3">
<a href="displaypropertiesidcard.php?categoryid=3" class="btn2"> Search Plots</a>
</div>


</div><!-- Closing divcontainer -->

</div><!-- Closing content div -->
</div>
<?php include("includes/footer.html");?>


</div>
</body>
</html>