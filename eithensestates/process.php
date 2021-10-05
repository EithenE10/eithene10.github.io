<!DOCTYPE html>
<html lang="en">
<head>
<title>Testimonial Process Page</title>
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
$title=$_POST["title"];
$content=$_POST["content"];
$author_name=$_POST["author_name"];
$email=$_POST["author_email"];
$sql_insert="INSERT INTO comment (title, content, author_name, author_email) 
VALUES ('$title', '$content', '$author_name', '$email')";
if(mysqli_query($link, $sql_insert)) {
echo "<h3><p style='color:#D4AF37'>Testimonial Added!</p></h3><p style='color:#D4AF37'>Thank you for your feedback. Our administrators moderate all 
comments and it will be attended to shortly</p>";
echo "<a href='getcomments.php'>Return to Testimonials page</a>";}
else {

	echo "<p style='color:#D4AF37'>An error occurred, please try again! </p>";
}
mysqli_close($link);
?>






</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>