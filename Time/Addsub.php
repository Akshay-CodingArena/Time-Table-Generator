<html>
<head>
<?php 
 session_start();
 if(isset($_SESSION['username'])){
?>
<title>faculty subject</title>
<link rel="stylesheet" type="text/css" href="style5.css">
</head>

<body>
<p class="alignleft"><h3><a href="main.php" class="btn">HOME</a></h3></p>
<div class="header">
Add Faculty Subjects
</div>
<form action="add1.php" method="POST">
Enter the faculty name <input type="text" name="naam"><center><button type="submit" name="subfac">Submit your entry</button></center>
</form>
</body>
<?php
 }
 else {
	 header("location:login.php"); 
 }
?>
</html>