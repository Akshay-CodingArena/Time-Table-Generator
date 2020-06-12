 <?php
 $conn= new mysqli("localhost","root","","sgt_website");
 echo'<link rel="stylesheet" type="text/css" href="style5.css">';
 session_start();  $kk=1;
 $fac=$_SESSION['fac'];
 while($kk<11){
 $up="upp".$kk;
 $sub="sub".$kk;
 $cls="class".$kk;
 $subj=$_POST[$sub];
 $class=$_POST[$cls];
 if(isset($_POST[$up])){
 
 if($conn->query("update faculty set $sub='$subj',$cls='$class' where facultyname='$fac'")){
 
  $result10=$conn->query("select * from faculty where facultyname='$fac'");
$row55=mysqli_fetch_assoc($result10);
echo '<form action="'.$_SERVER['PHP_SELF'].'" method="POST">';
echo '<p class="alignleft"><h3><a href="main.php" class="btn">HOME</a></h3></p>';
echo '<br><br><center><table border="10" align="center" width="75%" bgcolor="white"><tr>
     <td>Facultyname</td> 
     <td>'.$fac.'</td>
     <tr><td>Sub1</td>
     <td><input type="text" placeholder="'.$row55['sub1'].'" name="sub1"></td><td>Class</td><td><input type="text" placeholder="'.$row55['class1'].'" name="class1"></td><td><BUTTON TYPE="submit" name="upp1">UPDATE</td></tr>
     <tr><td>Sub2</td><td><input type="text" placeholder="'.$row55['sub2'].'" name="sub2"></td><td>Class</td><td><input type="text" placeholder="'.$row55['class2'].'" name="class2"></td><td><BUTTON type="submit" name="upp2">UPDATE</td></tr>
     <tr><td>Sub3</td><td><input type="text" placeholder="'.$row55['sub3'].'" name="sub3"></td><td>Class</td><td><input type="text" placeholder="'.$row55['class3'].'" name="class3"></td><td><BUTTON TYPE="submit" name="upp3">UPDATE</td></tr>
     <tr><td>Sub4</td><td><input type="text" placeholder="'.$row55['sub4'].'" name="sub4"></td><td>Class</td><td><input type="text" placeholder="'.$row55['class4'].'" name="class4"></td><td><BUTTON type="submit" name="upp4">UPDATE</td></tr>
     <tr><td>Sub5</td><td><input type="text" placeholder="'.$row55['sub5'].'" name="sub5"></td><td>Class</td><td><input type="text" placeholder="'.$row55['class5'].'" name="class5"></td><td><BUTTON type="submit" name="upp5">UPDATE</td></tr>
     <tr><td>Sub6</td><td><input type="text" placeholder="'.$row55['sub6'].'" name="sub6"></td><td>Class</td><td><input type="text" placeholder="'.$row55['class6'].'" name="class6"></td><td><BUTTON type="submit" name="upp6">UPDATE</td></tr>
     <tr><td>Sub7</td><td><input type="text" placeholder="'.$row55['sub7'].'" name="sub7"></td><td>Class</td><td><input type="text" placeholder="'.$row55['class7'].'" name="class7"></td><td><BUTTON type="submit" name="upp7">UPDATE</td></tr>
     <tr><td>Sub8</td><td><input type="text" placeholder="'.$row55['sub8'].'" name="sub8"></td><td>Class</td><td><input type="text" placeholder="'.$row55['class8'].'" name="class8"></td><td><BUTTON type="submit" name="upp8">UPDATE</td></tr>
     <tr><td>Sub9</td><td><input type="text" placeholder="'.$row55['sub9'].'" name="sub9"></td><td>Class</td><td><input type="text" placeholder="'.$row55['class9'].'" name="class9"></td><td><BUTTON type="submit" name="upp9">UPDATE</td></tr>
     <tr><td>Sub10</td><td><input type="text" placeholder="'.$row55['sub10'].'" name="sub10"></td><td>Class</td><td><input type="text" placeholder="'.$row55['class10'].'" name="class10"></td><td><BUTTON type="submit" name="upp10">UPDATE</td></tr>
     </table></center>';
echo '</form>';
 }
 }
 $kk++; 
}
?>