<!DOCTYPE html>
<html lang="en">
<head>
<title>Get Comments</title>
<meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id = "container">
<div id="header">
<img src="images\banner3.png"
width = "100%" height="300" alt = "Eithens Estates Banner">
</div>
<?php include("includes/nav.html");?>
<div id = "content">

<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link,"eithensestates");
$sql="SELECT * from comment WHERE status='planned'";
$result=mysqli_query($link, $sql);

echo "<table>";
echo "<tr>
	<th> Title</th>
	<th>Content</th>
	<th>Author</th>
	<th>Created</th>
	</tr>";
while($row=mysqli_fetch_array($result)) {
	$title=$row["title"];
	$content=$row["content"];
	$author=$row["author_name"];
	$created=$row["created_at"];
echo "<tr>
	<td>$title</td>
	<td>$content</td>
	<td>$author</td>
	<td>$created</td>
	</tr>";
}
echo "</table>";
mysqli_close($link);
?>

<div id = "addtestimonial">

<h3><p style='color:#D4AF37'>Add a Testimonial</p></h3>
<p style='color:#D4AF37'>Please leave your feedback on your experience of our site. We appreciate your feedback and 
take all your comments into consideration! </p>
<!--form for user to enter feedback -->
<form method="post" action="process.php" id="commentform">
<p style='color:#D4AF37'><label>Title:</label>
<input type="text" name="title" required="required"><br>
<label>Content: </label>
<textarea name="content" rows="8" cols="30" ></textarea><br>
<label>Name:</label>
<input type="text" name="author_name" required="required"><br>
<label>Email: </label>
<input type="email" name="author_email" required="required"><br>
<input type="submit" id="mysubmit" name="submit" required="required" class="backbutton" value="Add Comment"></p>
</form>

</div>
<?php include("includes/footer.html");?>
</div>



























</div>

</body>
</html>