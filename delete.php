<?php
 include 'db_connection.php';
 $a=$_GET['Enrollment_no'];
 $sl="delete from student_register where Enrollment_no='$a' ";
 $qury= mysqli_query($conn,$sl);
 if(qury) header("location:list.php");

?>