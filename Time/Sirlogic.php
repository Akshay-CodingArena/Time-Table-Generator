<html>
<head><title></title><link rel="stylesheet" type="text/css" href="style3.css"></head>
<body>
<?php 
 session_start();
 if(isset($_SESSION['username'])){
?>
<p class="alignleft"><h3><a href="main.php" class="btn">HOME</a></h3></p>
<div class="header">Add Subjects</div>
<form action="add.php" method="post">
<table>
<tr>
<td><?php $conn= new mysqli("localhost","root","","sgt_website");
          $result=$conn->query("select * from counter ");
          $row=mysqli_fetch_assoc($result);
if($row['Coun']==0) {
 echo "Select Course".'</td>'.'<td>'.'<select name="sel">'; 
 $result1=$conn->query("select * from class");  
 $i=1;
 while($row1=mysqli_fetch_assoc($result1) )
 {
 echo '<option>'.$row1['classname'].'</option>';
 $i++;
 }
 echo '</td>';
} else {
 $row2=mysqli_fetch_assoc($conn->query("select * from class where stat=1"));
 echo "Selected Class".'</td>'.'<td>'.$row2['classname']; 
}?>
</td>
</tr>
<tr>
<td>Enter the Subject</td>
<td><input type="text" name="ss">Load</td>
<td><select name="load"> <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>
<input type="submit" name="addd" value="Add">
<input type="submit" name="upcl" value="Update">
</td>
</tr>
<tr>
<td><input type="submit" name="submitt" value ="Submit">
</tr>
</table>
</form>
</body>
<?php
 }
 else {
	 header("location:login.php"); 
 }
?>
</html>