
<?php
 $conn=new mysqli("localhost","root","","sgt_website");
 $i=01;
?>
<?php 
 session_start();
 if(isset($_SESSION['username'])){
?>
<html>
<head>
<title>view</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
<body>
<p class="alignleft"><h3><a href="main.php" class="btn">HOME</a></h3></p>

<div class="header">
<h2>Select the faculty name</h2></div>
<form action="add1.php" method="POST">
<select name="name">
 <?php 
 $res=$conn->query("select * from faculty");
 while($row=mysqli_fetch_assoc($res)) { 
 echo '<option>'.$row['facultyname'].'</option>';
 }
 
echo '</select><button type="submit" name="genfac">Show</button>';
?>
</form>
<br><div class="header">
<h2>Select the class</h2></div>
<form action="add1.php" method="POST">
<select name="name">
 <?php 
 $res=$conn->query("select * from class");
 while($row=mysqli_fetch_assoc($res)) { 
 echo '<option>'.$row['classname'].'</option>';
 }
echo '</select><button type="submit" name="genclass">Show</button>';
?>
</form>
</body>
<?php
 }
 else {
	 header("location:login.php"); 
 }
?>
</html>