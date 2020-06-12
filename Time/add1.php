<html>

<body>
<p class="alignleft"><h3><a href="main.php" class="btn">HOME</a></h3></p>
 <?php 
 if(!$conn=new mysqli("localhost","root","","sgt_website")){
 
 }
      if(isset($_POST['genfac'])){
		  ?>
<div class="alignright"><a title="Print Screen" alt="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;" button type="submit" class="btn">PRINT BUTTON</a></div>
	 <br><p><h3><a href="generatefac.php" class="btn">BACK</a></h3></p><br></body>
       
	    
		<link rel="stylesheet" type="text/css" href="style5.css">
		<?php
	   /*$name=$_POST['name'];
	    echo $name;
        if($res=$conn->query("select * from facultytimetable where facultyname='$name'")){
         echo '<center><table border="10" width="75%" bgcolor="white"> <col align="left"><col align="left">
  <col align="right"><tr><th  width="(100/x)%">Day</th><th  width="(100/x)%">1</th><th  width="(100/x)%">2</th><th  width="(100/x)%">3</th><th  width="(100/x)%">4</th><th  width="(100/x)%">5</th><th  width="(100/x)%">6</th><th  width="(100/x)%">7</th></tr>';
         $i=0;
         while($i<42) {          
          if(round($i/7)==0) {
          echo '<tr><th>Monday</th>';
$day="days0".$i;
          if($i%7==0){
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
  if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
}
          if($i%7==1){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
         if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
         }
if($i%7==2){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
         if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==3){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==4){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==5){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==6){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
         if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
}
         if(round($i/7)==1) {
         echo '<tr><th>Tuesday</th>';
if($i%7==0){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }           
if($i%7==1){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
          if($i%7==2){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
         }
         if(round($i/7)==2) {
         echo '<tr><th>Wednesday</th>';
 if($i%7==0){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
}
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
         }
         if(round($i/7)==3) {
         echo '<tr><th>Thursday</th>';
if($i%7==0) {
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
}
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
         }
         if(round($i/7)==4) {
         echo '<tr><th>Friday</th>';
if($i%7==0){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
}
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
         
  if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
         }
          if(round($i/7)==5) {
         echo '<tr><th>Saturday</th>';
if($i%7==0){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]==0)
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {
          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }
           }
         }
         }
        
       } */
	   
	   
	   $name=$_POST['name'];
 echo '<div class="header">'.$name.'</div>';
        if($res=$conn->query("select * from facultytimetable where facultyname='$name'")){
         echo '<center><table border="10" width="75%" bgcolor="white"> <col align="left"><col align="left">
  <col align="right"><tr><th  width="(100/x)%">Day</th><th  width="(100/x)%">1</th><th  width="(100/x)%">2</th><th  width="(100/x)%">3</th><th  width="(100/x)%">4</th><th>Lunch</th><th  width="(100/x)%">5</th><th  width="(100/x)%">6</th><th  width="(100/x)%">7</th></tr>';
         $i=0;
         while($i<42) {          
          if(round($i/7)==0) {
          echo '<tr><th>Monday</th>';
$day="days0".$i;
          if($i%7==0){
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
  if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  
          if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
}
          if($i%7==1){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }else {  
          if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==2){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
         if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  
          if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
 echo '<th rowspan = "6" id="vertical" style="verticle-align: buttom">L<br>U<br>N<br>C<br>H<br><br>B<br>R<br>E<br>A<br>K</th>';
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==3){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
?>
     <th rowspan = "6" id="vertical" style="verticle-align: buttom">L<br>U<br>N<br>C<br>H<br><br>B<br>R<br>E<br>A<br>K</th>
<?php
$i++;
  }
   else {  
          if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
          echo '<th rowspan = "6" id="vertical" style="verticle-align: buttom">L<br>U<br>N<br>C<br>H<br><br>B<br>R<br>E<br>A<br>K</th>';
           $i++;
           }} 
           }
if($i%7==4){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
         if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
}
         if(round($i/7)==1) {
         echo '<tr><th>Tuesday</th>';
if($i%7==0){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }           
if($i%7==1){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
          if($i%7==2){
$day="days0".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
         }
         if(round($i/7)==2) {
         echo '<tr><th>Wednesday</th>';
 if($i%7==0){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
}
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
         }
         if(round($i/7)==3) {
         echo '<tr><th>Thursday</th>';
if($i%7==0) {
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
}
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
         }
         if(round($i/7)==4) {
         echo '<tr><th>Friday</th>';
if($i%7==0){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
}
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
         
  if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
         }
          if(round($i/7)==5) {
         echo '<tr><th>Saturday</th>';
if($i%7==0){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from facultytimetable where facultyname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
         }
         }      
       }
	          
       }


	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   



 else if(isset($_POST['genclass'])){
	 ?>
	 <div class="alignright"><a title="Print Screen" alt="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;" button type="submit" class="btn">PRINT BUTTON</a></div>
	 
	  <link rel="stylesheet" type="text/css" href="style5.css">
	 <br><p><h3><a href="generatefac.php" class="btn">BACK</a></h3></p><br></body>
       <?php
       $name=$_POST['name'];
 echo '<div class="header">'.$name.'</div>';
        if($res=$conn->query("select * from classtimetable where classname='$name'")){
         echo '<center><table border="10" width="75%" bgcolor="white"> <col align="left"><col align="left">
  <col align="right"><tr><th  width="(100/x)%">Day</th><th  width="(100/x)%">1</th><th  width="(100/x)%">2</th><th  width="(100/x)%">3</th><th  width="(100/x)%">4</th><th>Lunch</th><th  width="(100/x)%">5</th><th  width="(100/x)%">6</th><th  width="(100/x)%">7</th></tr>';
         $i=0;
         while($i<42) {          
          if(round($i/7)==0) {
          echo '<tr><th>Monday</th>';
$day="days0".$i;
          if($i%7==0){
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
  if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  
          if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
}
          if($i%7==1){
$day="days0".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }else {  
          if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==2){
$day="days0".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
         if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  
          if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
 echo '<th rowspan = "6" id="vertical" style="verticle-align: buttom">L<br>U<br>N<br>C<br>H<br><br>B<br>R<br>E<br>A<br>K</th>';
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==3){
$day="days0".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
?>
     <th rowspan = "6" id="vertical" style="verticle-align: buttom">L<br>U<br>N<br>C<br>H<br><br>B<br>R<br>E<br>A<br>K</th>
<?php
$i++;
  }
   else {  
          if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
          echo '<th rowspan = "6" id="vertical" style="verticle-align: buttom">L<br>U<br>N<br>C<br>H<br><br>B<br>R<br>E<br>A<br>K</th>';
           $i++;
           }} 
           }
if($i%7==4){
$day="days0".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days0".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days0".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
         if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
}
         if(round($i/7)==1) {
         echo '<tr><th>Tuesday</th>';
if($i%7==0){
$day="days0".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }           
if($i%7==1){
$day="days0".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
          if($i%7==2){
$day="days0".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
         }
         if(round($i/7)==2) {
         echo '<tr><th>Wednesday</th>';
 if($i%7==0){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
}
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
  else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
         }
         if(round($i/7)==3) {
         echo '<tr><th>Thursday</th>';
if($i%7==0) {
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
}
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
         }
         if(round($i/7)==4) {
         echo '<tr><th>Friday</th>';
if($i%7==0){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
}
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
         
  if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
         }
          if(round($i/7)==5) {
         echo '<tr><th>Saturday</th>';
if($i%7==0){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
 if($i%7==1){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
          if($i%7==2){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
         }
if($i%7==3){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
           if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==4){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==5){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
if($i%7==6){
$day="days".$i;
$row=$conn->query("select $day from classtimetable where classname='$name'");
$arr=mysqli_fetch_assoc($row);
          if($arr[$day]=='0')
  {
    echo '<td>'." __ ".'</td>';
$i++;
  }
   else {  if(strpos($arr[$day],"lab")) {
 echo '<td colspan=2 id="vertical" align="center">'.$arr[$day].'</td>';
 $i=$i+2;
} else {

          echo '<td>'.$arr[$day].'</td>';
           $i++;
           }}
           }
         }
         }      
       }
$sec=$conn->query("select * from class where classname='$name'");
$secc=mysqli_fetch_assoc($sec);
$j=1;
$sub="sub".$j;
echo '<table border="10" width="25%" bgcolor="white"><tr><th>Subject</th><th>Facultyname</th></tr>';
while($subb=$secc[$sub]) {
$k=1;
$subi="sub".$k;
$classi="class".$k;
while($k<15) {
error_reporting(E_ERROR | E_PARSE);
if(mysqli_fetch_assoc($conn->query("select facultyname from faculty where $subi = '$subb' and $classi='$name'")))
 {
     $ak=mysqli_fetch_assoc($conn->query("select facultyname from faculty where $subi = '$subb' and $classi='$name'"));
     echo '<tr><td>'.$subb.'</td><td>'.$ak['facultyname'].'</td></tr>';
     break;     
 }
$k++;
$subi="sub".$k;
$classi="class".$k;
}
$j++;
$sub="sub".$j;
}
echo '</table>';      
       }



       else if(isset($_POST['submit_btn'])){
        $name=$_POST['Name'];
        $id=$_POST['Id'];
        $gender=$_POST['gender'];
           $age=$_POST['Age'];
           $ph=$_POST['Phone'];
           $em=$_POST['Email'];
           $stat=0;                         
            if(!$conn->query("Insert into facultyregistration(facultyname,facultyid,age,gender,phoneno,emailaddress,stat) values('$name','$id','$age','$gender','$ph','$em','$stat')")){
                echo "why",$id,$gender,$age,$ph,$em,$stat;
            }
            else {
     if(!$conn->query("insert into faculty(facultyid,facultyname) values('$id','$name')")){
    echo "unsucessful";
   }
   echo "sucessfully inserted into database";
 header('Location:faculty_Reg.php');   }
            
    }
 if(isset($_POST['sub'])){
 session_start();
 $name = $_SESSION['varname'];
 $sub = $_POST['subject'];
 $class = $_POST['class'];
 $i=1;
 $res=$conn->query("select * from faculty where facultyname='$name'");
 $row=mysqli_fetch_assoc($res);
 while($row['sub'.$i.'']) {
 $i++;
 }
 $subj="sub".$i;
 $classs="class".$i;
 if($res2=$conn->query("update faculty set $subj='$sub',$classs='$class' where facultyname='$name'")){
 $z=1;
 goto l;
 }
 echo "got it";
 }
 if(isset($_POST['up'])){
	 ?>
	 <link rel="stylesheet" type="text/css" href="style8.css">
	 <br>
	 <br>
	 <?php
  session_start();
  $fac=$_SESSION['fac'];
    $result10=$conn->query("select * from faculty where facultyname='$fac'");
$row55=mysqli_fetch_assoc($result10);
echo '<form action="facadd.php" method="POST">';
echo '<table border="10" width="75%" bgcolor="white" style =" margin-left : 350px;"><tr>
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
     </table>';
echo '</form>';

  }  
 if(isset($_POST['subfac'])) {
	 ?>
	 <link rel="stylesheet" type="text/css" href="style5.css">
	 <br><p><h3><a href="addsub.php" class="btn">BACK</a></h3></p><br></body>
	 <?php
 $z=0; l:
 $chk=0;
  $res=$conn->query("select * from facultyregistration");
 if($z==0) {
 $fname=$_POST['naam'];
 session_start();
 $_SESSION['fac']=$fname;
 while($row=mysqli_fetch_assoc($res)) {
 $name=$row['facultyname'];
 if($name==$fname){
 $chk=1;
 $_SESSION['varname'] = $name;

 echo '<div class="header" ><h2>'.$name.'</h2></div>'.'';
     echo '<center><div align="center">';
 echo '<form action="'.$_SERVER['PHP_SELF'].'" method="POST">';
 echo "Enter the subject with its respective class".'<select name ="class">';
 $rowss=$conn->query("select classname from class");
 while($resultt=mysqli_fetch_assoc($rowss)){
	 echo '<option>'.$resultt['classname'].'</option>';
 }
 echo '<input type="text" name="subject" placeholder="subject name">';
 echo '<button type="submit" name="sub">Add</button>';
 echo '<button type="submit" name="up">Update</button>';
 echo '</form></div></center>';
 }
 }
 if($chk==0){
 echo '<center><h3>'.$fname.'</h3>This name is not registered 
     <br><br> List of Names Registered here ';
 echo '<table border =10 bgcolor="white" >';
 $ress=$conn->query("select * from facultyregistration");
 while($row12=mysqli_fetch_assoc($ress)){
 echo '<tr><th>'.$row12['facultyname'].'</th></tr>';
 }
 echo '</table></center>';
 }
 }

	
	 
 else { 
  ?>
	 <link rel="stylesheet" type="text/css" href="style5.css">
	 <br><p><h3><a href="addsub.php" class="btn">BACK</a></h3></p><br></body>
	 <?php
 echo '<div class="header"><h2 style=" align-content="center" " >'.$name.'</h2></div>'.'';
 echo '<form action="'.$_SERVER['PHP_SELF'].'" method="POST">';
 echo "Enter the subject with its respective class".'<select name ="class">';
 $rowss=$conn->query("select classname from class");
 while($resultt=mysqli_fetch_assoc($rowss)){
	 echo '<option>'.$resultt['classname'].'</option>';
 }
 echo '<input type="text" name="subject" placeholder="subject name">';
 echo '<button type="submit" name="sub">Add</button>';
 
 echo '<button type = "submit" name="finisher">Submit</button>';
 echo '</form>';
 }
 }
if(isset($_POST['finisher'])){
 header('Location:addsub.php');
}

?>
</body>

</html>