<?php
 include 'db_connection.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $a=$_GET['Enrollment_no'];
  $sl="select photo1 from student_register where Enrollment_no='$a' ";
  $qury= mysqli_query($conn,$sl);
  
  while($result=mysqli_fetch_array($qury)) {
    ?>
     <img src="<?php echo $result['photo1']?>" width="100%" height="100%">
   
   

<?php
  }
  ?>
</body>
</html>