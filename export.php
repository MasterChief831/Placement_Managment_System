<?php

include 'db_connection.php';
if($_SERVER["REQUEST_METHOD"]=='POST'){
  $branch=$_POST["branch"];
  $cgpa=$_POST["cgpa"];
  $year=$_POST["year"];
  $sql="select Enrollment_no,name,Gender,year,Current_semr,phone,cgpa,10th,12th from student_register where branch='$branch' AND cgpa >'$cgpa' AND  year='$year' ";
  // if(!$sql) echo "no";
  // else echo "yes";
  $result=mysqli_query($conn,$sql);
  // if(!$result) echo "no";
  // else echo "yes";
  // echo "a".$result."a";
  $html='<table><tr><td>Enrollment_no</td><td>name</td><td>Gender</td><td>year</td><td>Current_semr</td><td>phone</td><td>cgpa</td><td>10th</td><td>12th</td></tr>';
  while($row=mysqli_fetch_assoc($result)){
    $html.='<tr><td>'.$row['Enrollment_no'].'</td><td>'.$row['name'].'</td><td>'.$row['Gender'].'</td><td>'.$row['year'].'</td><td>'.$row['Current_semr'].'</td><td>'.$row['phone'].'</td><td>'.$row['cgpa'].'</td><td>'.$row['10th'].'</td><td>'.$row['12th'].'</td></tr>';

  }
  $html.='</table>';
  header('Content-Type:application/xls');
  header('Content-Disposition:attachment;filename=report.xls');
  echo $html;

}
?>