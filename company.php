
 <?php
//  error_reporting(0);



 require('db_connection.php');

// require 'db_connection.php';
if($_SERVER["REQUEST_METHOD"]=='POST'){
  $company_name=$_POST["company_name"];
  $batch=$_POST["batch"];
  $cgpa =$_POST["cgpa"];
  $role=$_POST["role"];
  $link=$_POST["link"];
 $sql= "INSERT INTO `company` (`company_name`, `branch`, `cgpa`, `role`) VALUES ('$company_name', '$branch', '$cgpa', '$role')";
  
   
    $result=mysqli_query($conn,$sql);
    if($result){
       echo "You have successfully registered...  Login to Continue...";
		header("location:facultydashboard.php");
    }
    
  }
  else header("location:faculty.html");
?> 





 