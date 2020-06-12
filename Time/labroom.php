<html>
<head><title>
labroom</title> <link rel="stylesheet" type="text/css" href="style8.css"></head>
<body>
<?php 
 session_start();
 if(isset($_SESSION['username'])){
?>
<p class="alignleft"><h3><a href="main.php" class="btn">HOME</a></h3></p>
<center>
<div class="header"><h2>Labrooms</h2></div><br><br><br>
<form action=<?php echo $_SERVER['PHP_SELF'];?> method="POST">
<center><table border="10" width="75%" bgcolor="white" style =" margin-left : 350px;">
<tr><th>Room</th><th>Lab1</th><td></td><th>Lab2</th><td></td><th>Lab3</th><td></td></tr>
<?php 
 $conn=new mysqli("localhost","root","","sgt_website");
 $res=$conn->query("select * from lab");
 if(isset($_POST['Room'])){
 $j=1;
 
  while($row=mysqli_fetch_assoc($res)){
  $j++;
  }
  $rom=$_POST['roomn'];
  $conn->query("insert into lab(ID,Room) values('$j','$rom')");
  $conn->query("insert into labtimetable(Room) values('$rom')");
  
 }
 $res=$conn->query("select * from lab ");
$i=1;
 while($row=mysqli_fetch_assoc($res)){
 if(isset($_POST['up'.$i.''])){
  $name=$_POST['lab1'.$i.''];
echo ""; 
 if($conn->query("update lab set lab1='$name' where ID='$i'")){
  echo "";
  goto v;
 }
 
 }
  if(isset($_POST['upp'.$i.''])){
  $name=$_POST['lab2'.$i.''];
  echo $name;
  if($conn->query("update lab set lab2='$name' where ID='$i'")){
  echo "" ;
  goto v;
 }
 }
  if(isset($_POST['uppp'.$i.''])){
   $name=$_POST['lab3'.$i.''];
  if($conn->query("update lab set lab3='$name' where ID='$i'")){
  echo "";
  goto v;
 }
 }
$i++;
}
v:
$res=$conn->query("select * from lab ");
$i=1;
while($row=mysqli_fetch_assoc($res)){
echo ' <tr><td>'.$row['Room'].'</td><td><input type="text" placeholder="'.$row['lab1'].'" name="lab1'.$i.'"></td><td><input type="submit" name="up'.$i.'" value="UPDATE"></td>
<td><input type="text" placeholder="'.$row['lab2'].'" name="lab2'.$i.'"></td><td><input type="submit" name ="upp'.$i.'" value="UPDATE"></td><td>
<input type="text" placeholder="'.$row['lab3'].'" name="lab3'.$i.'"></td><td><input type="submit" name="uppp'.$i.'" value="UPDATE"></td>';
echo '</tr>';
$i++;
 }
?>
</table><br><br>
<h3 style ="display : inline-block; overflow : none; width : 400px ; margin-left :  500px ">To add a room click </h3>
<table  border="10" width="75%" bgcolor="white" style =" margin-left : 560px;"><tr><td>Room no</td><td><input type="text" name = "roomn"></td><td>
<input type="submit" value="Add" name="Room"></td>
</table></p>
</form>
<center>
</body>
<?php
 }
 else {
	 header("location:login.php"); 
 }
?>
</html>