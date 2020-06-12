<?php
$conn = new mysqli("localhost","root","","sgt_website") ;
$sql= "SELECT classname  FROM class";
$stm = $conn->query($sql);
$stm=mysqli_fetch_assoc($stm);
 ?>
 <?//php include('server.php') ?>
<?php 
 session_start();
 if(isset($_SESSION['username'])){
?>
<!doctype html>
<html>
<head>
   <title>
   Faculty Registration
  </title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <p class="alignleft"><h3><a href="main.php" class="btn">HOME</a></h3></p>
  

</head>
<body>
<div class="header">
<h2>Faculty Registration</h2>
</div>
<div>
<form action="add1.php" method="POST">
<table>
  <tr><td><div> <label> NAME : </label></td><td> <input type="text" id="name" name="Name"></div></td></tr>
  <tr><td><div> <label> ID : </label></td><td> <input type="text" id="id" name="Id"></div></td></tr>
  <tr><td><div> <label> AGE : </label> </td><td><input type="text" id="age" name="Age"></div></td></tr>
  <tr><td><div> <label> GENDER : </label></td><td> MALE <input type ="radio" class="gender" name="gender" value="m"> FEMALE <input type="radio" class="gender" id="female" name="gender" value="fm">  </div></td></tr>
  <tr><td><div> <label> PHONE NO : </label></td><td> <input type="text" id="phone" name="Phone"></div></td></tr>
  <tr><td><div> <label> EMAIL ADD : </label></td><td> <input type="text"  id="email" name="Email"></div></td></tr>
</table>
     <div>
                <button type="submit" id ="submit" name="submit_btn">Submit</button>
                <input type="reset" name="reset_btn"  id="reset_btn" >
      </div>
</form>
</div>
</body>
<?php
 }
 else {
	 header("location:login.php"); 
 }
?>
</html>

