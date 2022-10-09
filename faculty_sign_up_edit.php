
 <?php
//  error_reporting(0);



 require('db_connection.php');

// require 'db_connection.php';
if($_SERVER["REQUEST_METHOD"]=='POST'){
  $College_Id=$_POST["College_Id"];
  $Enrollment_no=$_POST["Enrollment_no"];
  $Name =$_POST["Name"];
  $pass1=$_POST["pass1"];
  $Confirm_Password=$_POST["Confirm_Password"];
  if (!filter_var($College_Id, FILTER_VALIDATE_EMAIL)) 
{
    echo "Invalid email format"; 
}
  elseif (!preg_match("/^[a-z0-9A-Z]*$/",$Enrollment_no)) 
{
    echo "Only letters and digit allowed in the TPO field"; 
}
else if (!preg_match("/^[a-zA-Z ]*$/",$Name)) 
{
    echo "Only letters allowed in the NAME field"; 
}
$existsql="Select* from 'faculty_register' where College_Id='$College_Id'";
$result= mysqli_query($conn,$existsql);
$numExistRows=mysqli_num_rows($result);
if($numExistRows>0){
  $showError="College_Id already exists";
}

else{
  if(($pass1==$Confirm_Password)){
    $hash=password_hash($pass1,PASSWORD_DEFAULT);
    $sql="INSERT INTO `faculty_register` (`College_Id`, `Enrollment_no`, `Name`, `Password`, `Confirm_Password`) VALUES ('$College_Id','$Enrollment_no','$Name','$hash','$hash')";
    
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "You have successfully registered...  Login to Continue...";
		header("location:login.html");
    }
    else
	{
    echo mysqli_error($conn);
		echo "Enter the valid details";
		 header("location:home.html");
	}
  }
else {
	echo "Enter the same password in both the fields";
}
}
}
?> 





 