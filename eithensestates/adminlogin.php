<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Admin Login</title>
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
if (empty($_SESSION)) 
session_start(); 
if (isset($_SESSION['errors'])) {
echo "<div class='form-errors'>";
foreach($_SESSION['errors'] as $error) 
{
 echo "<p>";
 echo $error;
 echo "</p>";
}
echo "</div>";
}
unset($_SESSION['errors']);
?>
<h3><p style='color:#D4AF37'> Login</p> </h3>
<form action="login_action.php" method="POST">
<p>
<p style='color:#D4AF37'><label>Email: </label></p><input type="email" name="admin_email" required="required">
</p><p>
<p style='color:#D4AF37'><label>Password: </label></p><input type="password" name="password" required="required">
</p><p>
<input type="submit" value="Login" class="backbutton">
</p>
</form>







</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
