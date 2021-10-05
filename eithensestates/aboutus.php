<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>About Us</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/aboutusstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body id="aboutus">
<div id="container">
<div id="header">
<img src="images\banner3.png"
width = "100%" height="300" alt = "Eithens Estates Banner">
</div><!-- Closing header -->

<?php include("includes/nav.html");?>
<div id="content">
<div id="divcontainer">


<div id="whitebox1">
<img src="images\CEO1.png"
width= "55%" height="55%" alt="CEO Eithen's Estates">
<h2>CEO Eithen O'Neil</h2>
<p> Featured 3 times on the cover of Time Magazine as a property and real estate guru.  </p>
</div><!-- Closing whitebox1 -->

<div id="whitebox2">
<h1>Mission Statement</h1>
<p>We redefined the traditional model by building specialized departments ready to give clients unparalleled expertise and a positive experience</p>
<ul>
<li><strong>Knowledgeable.</strong> We strive to understand our markets and our clients needs.</li>
<li><strong>Connected.</strong> Relationships are everything to us; we connect people to their homes and to their communities.</li>
<li><strong>Upstanding.</strong> Our clients needs and best interests are at the heart of everything we do.</li>
<li><strong>Effective.</strong> We set a high bar and move mountains to exceed expectations.</li>
</ul>
</div><!-- Closing whitebox2 -->

<div id="whitebox3">
<img src="images\ziben.jpeg"
width= "55%" height="55%" alt="CEO Eithen's Estates">
<h2>COO Yaqian Zhang</h2>
<p> Oversees Business Operations, Marketing and Sales,  and Human Resources. 4x Michelin Star Chef </p>
</div><!-- Closing whitebox1 -->









</div><!-- Closing divcontainer -->
<p>
<button onclick="goBack()" class="backbutton">Go Back to Previous Page</button>
<script>
function goBack() {
 window.history.back();
}
</script>
</p>
</div><!-- Closing content -->
<?php include("includes/footer.html");?>
</div><!-- Closing container div -->


</div>
</body>
</html>