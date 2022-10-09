
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
        <th>Company Name</th>
        <th>Batch</th>
        <th>CGPA</th>
        <th>Role</th>
        
       </tr>
    </thead>
    <tbody>
      <?php
     include 'db_connection.php';
      $sql="select * from company";
      $query= mysqli_query($conn,$sql);
      // $result= mysqli_fetch_array($query);
           while($result=mysqli_fetch_array($query)) {
             ?>
             
             <tr>
             <td> <?php echo $result['company_name']?></td>
             <td> <?php echo $result['batch']?></td>
             <td> <?php echo $result['cgpa']?></td>
             <td> <?php echo $result['role']?></td>
             
             </tr>
             <?php
           }
      
      ?>
      
    </tbody>
  </table>
 
</div>

</body>
</html>