
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <title>Bootstrap Example</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <center>
<font style="font-family:cambria"><h1 class="page-header" style="margin:auto;">Search Students</h1></font>
<br><br>
<form method="post" action="">
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Branch</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="branch" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CGPA</label>
    <input type="text" name="cgpa" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Year</label>
    <input type="text" name="year" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="button" class="btn btn-primary">Filter</button> -->
  <table class="table" style="margin:auto;">
    <thead>
      <tr>
      <th><input type="text" class="form-control" id="exampleInputEmail1" name="branch" aria-describedby="emailHelp" placeholder="Branch" style="width:50%; border:2px solid blue; margin:auto;"></th>
      <th><input type="text" name="cgpa" class="form-control" id="exampleInputPassword1" placeholder="CGPA"style="width:50%; border:2px solid blue; margin:auto;"></th>
      <th> <input type="text" name="year" class="form-control" id="exampleInputPassword1"placeholder="Year"style="width:50%; border:2px solid blue; margin:auto;"></th>
     <th><button type="submit" name="button" class="btn btn-primary">Filter</button></th> 
     <!-- <th><a href="export.php"><button type="submit" name="button" class="btn btn-primary">Filter</button></a></th>  -->
      </thead>
      </table>
</form>
<br><br>
<table class="table">
  <thead>
    <tr>
    <th scope="col">Enrollment_no</th>
        <th scope="col">Roll_no</th>
        <th scope="col">name</th>
        <th scope="col">Gender</th>
        <th scope="col">branch</th>
        <th scope="col">year</th>
        <th scope="col">Current_semr</th>       
         <th scope="col">CGPA</th>
        <th scope="col">Email</th>

    </tr>
  </thead>
  <tbody>
     <?php
      include 'db_connection.php';
      if(isset($_POST['button'])){
           $branch=$_POST['branch'];
           $year=$_POST['year'];
           $cgpa=$_POST['cgpa'];
         $sql="select * from student_register where branch='$branch'AND year='$year' AND cgpa>='$cgpa' ";
         $query= mysqli_query($conn,$sql);
         if(mysqli_num_rows($query)>0){
           while($result=mysqli_fetch_array($query)){
             ?>
             <tr>
             <td> <?php echo $result['Enrollment_no']?></td>
             <td> <?php echo $result['Roll_no']?></td>
             <td> <?php echo $result['name']?></td>
             <td> <?php echo $result['Gender']?></td>
             <td> <?php echo $result['branch']?></td>
             <td> <?php echo $result['year']?></td>
             <td> <?php echo $result['Current_semr']?></td>
             <td> <?php echo $result['cgpa']?></td>
             <td> <?php echo $result['email']?></td>
           </tr>

        <?php
           }
         }
      }
     
     
     ?>
    </tbody>
</table>

</body>
</html>