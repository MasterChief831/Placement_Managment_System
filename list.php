
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
           
  <table class="table  table-striped">
    <thead>
      <tr>
        <th>Enrollment_no</th>
        <th>Roll_no</th>
        <th>name</th>
        <th>Gender</th>
        <th>branch</th>
        <th>year</th>
        <th>Current_semr</th>
        
        <th>Email</th>
        <th>photo1</th>
        <th>DELETE</th>
        
       </tr>
    </thead>
    <tbody>
      <?php
     include 'db_connection.php';
      $sql="select * from student_register";
      $query= mysqli_query($conn,$sql);
      // $result= mysqli_fetch_array($query);
           while($result=mysqli_fetch_array($query)) {
             ?>
             
             <tr>
             <td> <?php echo $result['Enrollment_no']?></td>
             <td> <?php echo $result['Roll_no']?></td>
             <td> <?php echo $result['name']?></td>
             <td> <?php echo $result['Gender']?></td>
             <td> <?php echo $result['branch']?></td>
             <td> <?php echo $result['year']?></td>
             <td> <?php echo $result['Current_semr']?></td>
             <td> <?php echo $result['email']?></td>
             <td> <a href='photo.php?Enrollment_no=<?php echo $result['Enrollment_no']?>'>View</td>
             <!-- <td> <img src="" width="100%" height="100%"> </td> -->
             <td> <a href='Delete.php?Enrollment_no=<?php echo $result['Enrollment_no']?>'>DELETE</td>
             <!-- <td> <a href='photo.php?Enrollment_no='>View</td> -->
             </tr>
             <?php
           }
      
      ?>
      
    </tbody>
  </table>
 
</div>

</body>
</html>