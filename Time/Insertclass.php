<!DOCTYPE html>
<html>
<head>
  <title>add subject</title>
  <link rel="stylesheet" type="text/css" href="style5.css">
 
</head>
<body>
<?php 
 session_start();
 if(isset($_SESSION['username'])){
?>
<p class="alignleft"><h3><a href="main.php" class="btn">HOME</a></h3></p>
<?php 
 if(isset($_SESSION['username'])){
?>
<div class="header">
<h2>Insert Classes</h2>
</div>
<?php
 $conn=new mysqli("localhost","root","","sgt_website");
 if(isset($_POST['submit'])){
   $class=$_POST['name'];
   if($conn->query("insert into class(classname) values('$class')")){
    echo '<form>';echo "Class entered successfully";
	
echo '<center><a href="insertclass.php">BACK</center>';
echo'</form>';  }
 }
 else {
 echo '<form action="'.$_SERVER['PHP_SELF'].'" method="POST">';
 echo '<input type="text" name="name">';
 echo '<button type="submit" name="submit">Submit</button>';
 
 echo '</form>';
 
 }
 }
?>
<?php
 }
 else {
	 header("location:login.php"); 
 }
?>
</body>
</html>
