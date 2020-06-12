<html>
<link rel="stylesheet" type="text/css" href="style7.css">
<p class="alignleft"><h3><a href="main.php" class="btn">HOME</a></h3></p>
<center><p<h3><a href="sirlogic.php" class="btn1">BACK</a></h3></p></center>
<body>
 
<?php
 $conn = new mysqli("localhost","root","","sgt_website");
 if(isset($_POST['goo'])) {
   
   $name=$_POST['naam'];
   $res=$conn->query("select * from facultyregistration where facultyname='$name'");
   if(mysqli_fetch_assoc($res) == false)
   {
   
   $conn->query("update counter set notfound=1");
   }
   else {
   if(!$conn->query("update facultyregistration set stat=1 where facultyname='$name'")){
   
   }
   }
   echo $name;     
 header('Location:facultytimetable.php');
 }
 else if(isset($_POST['gen'])) {
 
 $class=$_POST['sel'];
 echo $class;
 $res=$conn->query("select * from class where classname='$class'");
 $res2=$conn->query("select * from classtimetable where classname='$class'");
 $i=1;
 $j=0;
 $k=0;
 $row=mysqli_fetch_assoc($res);
 $row2=mysqli_fetch_assoc($res2);
 $b=$i;
 while($row[$sub="sub".$b]!=NULL&&$b<=15) {
 echo "sgt";
 $conn = new mysqli("localhost","root","","sgt_website");
 $res2=$conn->query("select * from classtimetable where classname='$class'");
 $row2=mysqli_fetch_assoc($res2);
 if($stat=$row[$status="status".$b]>=4) {

 $m=mt_rand(0,7);
 $no=-9;
 while(($stat=$row[$status="status".$b])!='0') {
 $no=$no+7+$m+$b;
 $j=round($no/10);
 $k=$no%10;
 $days="days".$j.$k;
 if($j>4) {
 $j=0;
 }
 while($row2[$days="days".$j.$k]!='0') {
 if($j>4) {
  $j=0;
  
 }
 else if($j==4 && $k>2) {
  $k=0;
 }
 if($k==9)
 {
 $j++;
 $k=0;
 }
 else
 {
 $k++;
 }
 }
 $sub="sub".$b;
 if($conn->query("update classtimetable set $days='$row[$sub]' where classname='$class'"));
 {
 echo "".$j.$k;
 }
 $stat--;
 $conn->query("update class set $status='$stat'") ; 
 $conn = new mysqli("localhost","root","","sgt_website");
 $res=$conn->query("select * from class where classname='$class'");
 $row=mysqli_fetch_assoc($res);
echo $stat;
  $res2=$conn->query("select * from classtimetable where classname='$class'");
 $row2=mysqli_fetch_assoc($res2);
 }
 
 $conn = new mysqli("localhost","root","","sgt_website");
 $res2=$conn->query("select * from classtimetable where classname='$class'");
 $row2=mysqli_fetch_assoc($res2);
} 
 $b++;
 }
 while($row[$sub="sub".$i]&&$i<=15)
 {
 echo $sub."is going to load";
 echo $row[$sub];
 $status=$row[$lod="status".$i];
 $m=0;
 $no=-9;
 while($status!=0) {
 $no=$no+8+$m+$i;
 $m++;
 $j=$no/10;
 $j=round($j);
 $k=$no%10;
 $days="days".$j.$k;
 if($j>5)
 {
 $j=0; 
 }
 while($row2[$days="days".$j.$k]!='0') {
 if($k==9)
 {
 $j++;
 $k=0;
 }
 else
 {
 $k++;
 }
}
 if($conn->query("update classtimetable set $days='$row[$sub]' where classname='$class'")){
 echo "good".$days."Subject loaded is ".$row[$sub]; 
 $status--; 
 $conn = new mysqli("localhost","root","","sgt_website");
 $sp="status".$i;
 $res=$conn->query("update class set $sp='$status' where classname='$class'");
 $res2=$conn->query("select * from classtimetable where classname='$class'");
 $row2=mysqli_fetch_assoc($res2);
 $days="days".$j.$k;
 echo "this is".$j.$k;
 }
 echo "1 sub finish";
 }
 $i++;
}
}

else if(isset($_POST['upcl'])) {
$cou=$_POST['sel'];
session_start();
$_SESSION['CLASS']=$cou;
$result10=$conn->query("select * from class where classname='$cou'");
$row55=mysqli_fetch_assoc($result10);
echo '<form action='.$_SERVER['PHP_SELF'].' method="POST">';
echo '<center><table border="10" width="65%" bgcolor="white"><tr>
     <td>Classname</td> 
     <td>'.$cou.'</td>
     <tr><td>Sub1</td>
     <td><input type="text" placeholder="'.$row55['sub1'].'" name="sub1"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load1'].'" name="load1"></td><td><button type="submit"name="upp1">Update</td></tr>
     <tr><td>Sub2</td><td><input type="text" placeholder="'.$row55['sub2'].'" name="sub2"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load2'].'" name="load2"></td><td><button type="submit"name="upp2">Update</td></tr>
     <tr><td>Sub3</td><td><input type="text" placeholder="'.$row55['sub3'].'" name="sub3"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load3'].'" name="load3"></td><td><button type="submit"name="upp3">Update</td></tr>
     <tr><td>Sub4</td><td><input type="text" placeholder="'.$row55['sub4'].'" name="sub4"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load4'].'" name="load4"></td><td><button type="submit"name="upp4">Update</td></tr>
     <tr><td>Sub5</td><td><input type="text" placeholder="'.$row55['sub5'].'" name="sub5"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load5'].'" name="load5"></td><td><button type="submit"name="upp5">Update</td></tr>
     <tr><td>Sub6</td><td><input type="text" placeholder="'.$row55['sub6'].'" name="sub6"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load6'].'" name="load6"></td><td><button type="submit"name="upp6">Update</td></tr>
     <tr><td>Sub7</td><td><input type="text" placeholder="'.$row55['sub7'].'" name="sub7"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load7'].'" name="load7"></td><td><button type="submit"name="upp7">Update</td></tr>
     <tr><td>Sub8</td><td><input type="text" placeholder="'.$row55['sub8'].'" name="sub8"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load8'].'" name="load8"></td><td><button type="submit"name="upp8">Update</td></tr>
     <tr><td>Sub9</td><td><input type="text" placeholder="'.$row55['sub9'].'" name="sub9"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load9'].'" name="load9"></td><td><button type="submit"name="upp9">Update</td></tr>
     <tr><td>Sub10</td><td><input type="text" placeholder="'.$row55['sub10'].'" name="sub10"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load10'].'" name="load10"></td><td><button type="submit"name="upp10">Update</td></tr>
     <tr><td>Sub11</td><td><input type="text" placeholder="'.$row55['sub11'].'" name="sub11"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load11'].'" name="load11"></td><td><button type="submit"name="upp11">Update</td></tr>
     <tr><td>Sub12</td><td><input type="text" placeholder="'.$row55['sub12'].'" name="sub12"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load12'].'" name="load12"></td><td><button type="submit"name="upp12">Update</td></tr>
     <tr><td>Sub13</td><td><input type="text" placeholder="'.$row55['sub13'].'" name="sub13"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load13'].'" name="load13"></td><td><button type="submit"name="upp13">Update</td></tr>
     <tr><td>Sub14</td><td><input type="text" placeholder="'.$row55['sub14'].'" name="sub14"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load14'].'" name="load14"></td><td><button type="submit"name="upp14">Update</td></tr>
     <tr><td>Sub15</td><td><input type="text" placeholder="'.$row55['sub15'].'" name="sub15"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load15'].'" name="load15"></td><td><button type="submit"name="upp15">Update</td>
     </tr></table></center>';
echo '</form>';
}
else if(isset($_POST['addd'])) {
 $result2=$conn->query("select * from counter");
 $row2=mysqli_fetch_assoc($result2);
 if($row2['Coun']==0) {
 $sub=$_POST['ss'];
 $lo=$_POST['load'];
 $cou=$_POST['sel'];
 $conn->query("Update counter set Coun=1");
 $result1=$conn->query("select * from counter");
 $row=mysqli_fetch_assoc($result1);
 $subj="sub".$row['COUNT'];
 $lod="load".$row['COUNT'];
 $stat="status".$row['COUNT'];
 $new=$row['COUNT']+1;

 if(!$result = $conn->query("Update class set $subj='$sub',$lod=$lo,$stat=$lo,stat=1 where classname='$cou'")) {
echo "Failed";
 }
 else {
 $result2= $conn->query("Update counter set COUNT='$new'");
 header('Location:Sirlogic.php');
}
}
else{
 $sub=$_POST['ss'];
 $lo=$_POST['load'];
  $result1=$conn->query("select * from counter");
 $row=mysqli_fetch_assoc($result1);
 $subj="sub".$row['COUNT'];
 $lod="load".$row['COUNT'];
 $stat="status".$row['COUNT'];
 $cou=mysqli_fetch_assoc($conn->query("select * from class where stat=1"));
 $course=$cou['classname'];
 if(!$result3 = $conn->query("Update class set $subj='$sub',$lod=$lo,$stat=$lo,stat=1 where classname='$course'")) {
echo "Failed".$sub.$lo.$cou['classname'];
 }
 else {
 $new=$row['COUNT']+1;
 $result2= $conn->query("Update counter set COUNT='$new'");
 header('Location:Sirlogic.php');
} 
}
}

else if(isset($_POST['submitt'])){
  $res1=$conn->query("update counter set COUNT = 1");
 $res2=$conn->query("update counter set Coun = 0");
 $res3=$conn->query("select * from class where stat = 1");
 $cou=mysqli_fetch_assoc($res3);
 $entry=$cou['classname'];
 
  $conn->query("update class set stat = 0");
 if(!$res4=$conn->query("INSERT INTO classtimetable(classname) VALUES ('$entry')")) {
  
    $conn->query("update subjects set stat = 0");
 }
 else {
 $conn->query("update class set stat = 0");
 header('Location:Sirlogic.php');
 }
}
else {
 $kk=1;
while($kk<16){
$lod="load".$kk;
$sub="sub".$kk;
$up="upp".$kk;
$subj=$_POST[$sub];
$load=$_POST[$lod];
$stat="status".$kk;
if(isset($_POST[$up])){
session_start();
$co=$_SESSION['CLASS']; 
if($conn->query("update class set $sub='$subj',$lod='$load',$stat='$load' where classname='$co'")){
echo "update";
$result10=$conn->query("select * from class where classname='$co'");
$row55=mysqli_fetch_assoc($result10);
echo '<form action='.$_SERVER['PHP_SELF'].' method="POST">';
echo '<center><table border="10" width="65%" bgcolor="white"><tr>
     <td>Classname</td> 
     <td>'.$co.'</td>
     <tr><td>Sub1</td>
     <td><input type="text" placeholder="'.$row55['sub1'].'" name="sub1"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load1'].'" name="load1"></td><td><button type="submit"name="upp1">Update</td></tr>
     <tr><td>Sub2</td><td><input type="text" placeholder="'.$row55['sub2'].'" name="sub2"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load2'].'" name="load2"></td><td><button type="submit"name="upp2">Update</td></tr>
     <tr><td>Sub3</td><td><input type="text" placeholder="'.$row55['sub3'].'" name="sub3"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load3'].'" name="load3"></td><td><button type="submit"name="upp3">Update</td></tr>
     <tr><td>Sub4</td><td><input type="text" placeholder="'.$row55['sub4'].'" name="sub4"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load4'].'" name="load4"></td><td><button type="submit"name="upp4">Update</td></tr>
     <tr><td>Sub5</td><td><input type="text" placeholder="'.$row55['sub5'].'" name="sub5"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load5'].'" name="load5"></td><td><button type="submit"name="upp5">Update</td></tr>
     <tr><td>Sub6</td><td><input type="text" placeholder="'.$row55['sub6'].'" name="sub6"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load6'].'" name="load6"></td><td><button type="submit"name="upp6">Update</td></tr>
     <tr><td>Sub7</td><td><input type="text" placeholder="'.$row55['sub7'].'" name="sub7"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load7'].'" name="load7"></td><td><button type="submit"name="upp7">Update</td></tr>
     <tr><td>Sub8</td><td><input type="text" placeholder="'.$row55['sub8'].'" name="sub8"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load8'].'" name="load8"></td><td><button type="submit"name="upp8">Update</td></tr>
     <tr><td>Sub9</td><td><input type="text" placeholder="'.$row55['sub9'].'" name="sub9"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load9'].'" name="load9"></td><td><button type="submit"name="upp9">Update</td></tr>
     <tr><td>Sub10</td><td><input type="text" placeholder="'.$row55['sub10'].'" name="sub10"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load10'].'" name="load10"></td><td><button type="submit"name="upp10">Update</td></tr>
     <tr><td>Sub11</td><td><input type="text" placeholder="'.$row55['sub11'].'" name="sub11"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load11'].'" name="load11"></td><td><button type="submit"name="upp11">Update</td></tr>
     <tr><td>Sub12</td><td><input type="text" placeholder="'.$row55['sub12'].'" name="sub12"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load12'].'" name="load12"></td><td><button type="submit"name="upp12">Update</td></tr>
     <tr><td>Sub13</td><td><input type="text" placeholder="'.$row55['sub13'].'" name="sub13"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load13'].'" name="load13"></td><td><button type="submit"name="upp13">Update</td></tr>
     <tr><td>Sub14</td><td><input type="text" placeholder="'.$row55['sub14'].'" name="sub14"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load14'].'" name="load14"></td><td><button type="submit"name="upp14">Update</td></tr>
     <tr><td>Sub15</td><td><input type="text" placeholder="'.$row55['sub15'].'" name="sub15"></td><td>Load</td><td><input type="text" placeholder="'.$row55['load15'].'" name="load15"></td><td><button type="submit"name="upp15">Update</td>
     </tr></table>';
echo '</form><center>';

}
goto f;
}
$kk++;
}
 }
f:
?>
</body>
</html>