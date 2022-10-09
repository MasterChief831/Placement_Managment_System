
 <?php
//  error_reporting(0);



 require('db_connection.php');

// require 'db_connection.php';
if($_SERVER["REQUEST_METHOD"]=='POST'){
  $company_name=$_POST["company_name"];
  $package=$_POST["package"];
  $date=$_POST["date"];
  $offers=$_POST["offers"];
  // $role=$_POST["role"];
 $sql= "INSERT INTO `company` (`company_name`, `package`, `date','offers') VALUES ('$company_name', '$branch', '$cgpa', '$role','$offers')";
  
   
    $result=mysqli_query($conn,$sql);
    if($result){
       echo "You have successfully registered...  Login to Continue...";
		header("location:facultydashboard.php");
    }
    
  }
  else header("location:faculty.html");
?> 





 