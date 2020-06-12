<html>
<title>
labroomfix</title>
 <link rel="stylesheet" type="text/css" href="style.css"></head>
<body><?php
$conn = new mysqli("localhost","root","","sgt_website");
 $conn->query("delete  from classtimetable");
 $conn->query("delete  from facultytimetable");
 $conn->query("delete  from labtimetable");
 $result=$conn->query("select * from class");
 while( $row=mysqli_fetch_assoc($result)) {
 $class=$row['classname'];
 $t=0;
 $l=1;
 $sub="sub".$l;
 $load="load".$l;
 $status="status".$l;
 while($subj=$row[$sub]){
 $lod=$row[$load];
 $k=0;
 $u=0;
if(strpos($subj,"lab")) {
	echo $class.$class.$subj;
while($lod>0)
{
 $k=$u*7;
 $u++;
 $lod--;
 $m=1;
 $subb="sub".$m;
 $classs="class".$m;
 while($m<10){
b: 
 $conn=new mysqli("localhost","root","","sgt_website");
 $result2=$conn->query("select facultyname from faculty where $subb='$subj' and $classs='$class'");
 if($row2=mysqli_fetch_assoc($result2))
 {  
  $fac=$row2['facultyname'];
  if($row3=mysqli_fetch_assoc($result3=$conn->query("select * from facultytimetable where facultyname='$fac'"))){
    if($row4=mysqli_fetch_assoc($result4=$conn->query("select * from classtimetable where classname='$class'"))){
     $skip=0;
a:
   $y=$k+1;
 if(($k)<10) {
  $days="days0".$k;   
  $daysn="days0".$y;
  if($y==10){
  $daysn="days".$y;
 } 
 }
  else {
  $days="days".$k;
  $daysn="days".$y;
  } 
o:
 while($row4[$days]!='0' || $skip==1) {
  $skip=0;
   $k++;
   $y++;
  if($k>42){ 
   $k=0;
  }
  
  if(($k)<10) {
  $days="days0".$k;
  $daysn="days0".$y;  
  if($y==10){
 $daysn="days".$y;
} 
  }
  else {
  $days="days".$k;
  $daysn="days".$y;
  }         
   }
 $zz=3;
  while($zz<39){
   if($k==$zz){
    $k++;
	$skip=1;
	goto o;
   }
   $zz=$zz+7;
  }
  $ll=6;
  while($ll<=42){
	 if($k==$ll){
    $k++;
	$skip=1;
	goto o;
   }
   $ll=$ll+7;  	  
  }
     if($row4[$daysn]=='0' && $row4[$daysn]=='0'){
       if($row3[$days]=='0' && $row3[$daysn]=='0'){        
         $conn=new mysqli("localhost","root","","sgt_website");  
         $entry=$class." ".$subj;
         $z=1;
         $labbi="lab".$z;
         $got=0;
         while($z<4){
         if($row7=mysqli_fetch_assoc($row6=$conn->query("select * from lab where $labbi='$subj'"))){
            
            $rooom=$row7['Room'];  
            $got=1;  
            if(!mysqli_fetch_assoc($conn->query("select * from labtimetable where Room = '$rooom'"))){        
               $conn->query("insert into labtimetable(Room) values('$rooom')");
         }
            break;
         }
         $z++;
         $labbi="lab".$z;
         }
         if($got==1){
         $res8=$conn->query("select * from labtimetable where Room='$rooom'");
         $row8=mysqli_fetch_assoc($res8);
         if($row8[$days]=='0'){
         $conn->query("update labtimetable set $days='$subj' ,$daysn='$subj' where Room=$rooom");
         $conn->query("update classtimetable set $days='$subj' ,$daysn='$subj' where classname='$class'") ;
         $conn->query("update facultytimetable set $days='$entry', $daysn='$entry' where facultyname='$fac'");   
         $row2=mysqli_fetch_assoc($result2=$conn->query("select facultyname from faculty where $subb='$subj' and $classs='$class'"));
         $row3=mysqli_fetch_assoc($result3=$conn->query("select * from facultytimetable where facultyname='$fac'"));
         $row4=mysqli_fetch_assoc($result4=$conn->query("select * from classtimetable where classname='$class'"));
         }
          else{
        $skip=1;
        goto a;    
       }}
        }
       else {
             $skip=1;
             goto a;
          }
 
     }
   else {
       $skip=1;
       goto a;
   }
     }
    else{
       $conn->query("insert into classtimetable(classname) values('$class')");
        $conn = new mysqli("localhost","root","","sgt_website");
         goto b;
     }
  }
  else{  
  $conn->query("insert into facultytimetable(facultyname) values('$fac')");
  $conn = new mysqli("localhost","root","","sgt_website");
 goto b;
  }
  break;
 }
 $m++;
 $classs="class".$m;
 $subb="sub".$m;
 }
 }
 }
else {
 $ran=0;
while($lod!=0)
{
 $k=(($u*7)+($ran));
 $u++;
 $lod--;
 $m=1;
 $subb="sub".$m;
 $classs="class".$m;
 while($m<10){
d: 
 if($row2=mysqli_fetch_assoc($result2=$conn->query("select facultyname from faculty where $subb='$subj' and $classs='$class'")))
 {  
  $fac=$row2['facultyname'];
  if($row3=mysqli_fetch_assoc($result3=$conn->query("select * from facultytimetable where facultyname='$fac'"))){
    if($row4=mysqli_fetch_assoc($result4=$conn->query("select * from classtimetable where classname='$class'"))){
     $skip=0;
c:
 if(($k)<10) {
  $days="days0".$k;   
  }
  else {
  $days="days".$k;
  } 
 while($row4[$days]!='0' || $skip==1) {
  $skip=0;
   $k++;
  if($k>42){ 
   $k=0;
  }
  if(($k)<10) {
  $days="days0".$k;   
  }
  else {
  $days="days".$k;
  }         
   }
     if($row4[$days]=='0'){
       if($row3[$days]=='0'){
         $conn=new mysqli("localhost","root","","sgt_website");  
         $entry=$class." ".$subj;
         $conn->query("update classtimetable set $days='$subj' where classname='$class'") ;
         $conn->query("update facultytimetable set $days='$entry' where facultyname='$fac'");   
         $row2=mysqli_fetch_assoc($result2=$conn->query("select facultyname from faculty where $subb='$subj' and $classs='$class'"));
		 $ran=mt_rand(0,2);
         $row3=mysqli_fetch_assoc($result3=$conn->query("select * from facultytimetable where facultyname='$fac'"));
         $row4=mysqli_fetch_assoc($result4=$conn->query("select * from classtimetable where classname='$class'"));
       
        }
       else {
             $skip=1;
             goto c;
          }
 
     }
     }
    else{
       $conn->query("insert into classtimetable(classname) values('$class')");
        $conn = new mysqli("localhost","root","","sgt_website");
         goto d;
     }
  }
  else{  
  $conn->query("insert into facultytimetable(facultyname) values('$fac')");
  $conn = new mysqli("localhost","root","","sgt_website");
 goto d;
  }
  break;
 }
 $m++;
 $classs="class".$m;
 $subb="sub".$m;
 }
 }
}
 $l++;
 $sub="sub".$l;
 $load="load".$l;
 
 }
}
echo "Timetable generated successfully";
header("location:main.php");
?>
</body>
<html>


