<html>
<title>
 TIME TABLE GENERATOR

</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php 
 session_start();
 if(isset($_SESSION['username'])){
?>
<div class="header">
<center><h2> TIME TABLE GENERATOR </h2></center>
</div>
<center><br>
<div class="input-group">
  		<a href="insertclass.php"> <button type="submit" class="btn" name="INSERT CLASSES" >Insert Class<br></button></a>
  	</div>
<div class="input-group">
  		<a href="sirlogic.php"> <button type="submit" class="btn" name="Add Class Subjects" >Add Class Subjects<br></button></a>
  	</div><div class="input-group">
  		<a href="faculty_reg.php"> <button type="submit" class="btn" name="Faculty Registration" >Faculty Registration<br></button></a>
  	</div>
<div class="input-group">
  		<a href="addsub.php"> <button type="submit" class="btn" name="Add Faculty Subject" >Add Faculty Subjects<br></button></a>
  	</div>
<div class="input-group">
  		<a href="labroom.php"> <button type="submit" class="btn" name="Add Labroom" >Add Labroom<br></button></a>
<div class="input-group">
  		<a href="labfix.php"> <button type="submit" class="btn" name="Generate time table" >Generate time table<br></button></a>
  	</div>
<div class="input-group">
  		<a href="generatefac.php"> <button type="submit" class="btn" name="View time table" >View time table<br></button></a>
  	</div>
</center>
<?php
 }
 else {
	 header("location:login.php"); 
 }
?>
</body>
</html>