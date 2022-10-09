<?php
require ('db_connection.php');
$Enrollment_no=$_POST["Enrollment_no"];
$Roll_no =$_POST["Roll_no"];
$Username =$_POST["Username"];
$name=$_POST["name"];
$Gender=$_POST["Gender"];
// $BOD=$_POST["BOD"];
$branch=$_POST["branch"];
$year=$_POST["year"];
$Current_semr=$_POST["Current_semr"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$cgpa=$_POST["cgpa"];
$tenth=$_POST["10th"];
$twelve=$_POST["twelve"];

if (!preg_match("/^[a-z0-9A-Z]*$/",$Enrollment_no)) 
{
    echo "Only letters and digit allowed in the Enrollment_no field"; 
}
elseif (!preg_match("/^[a-z0-9A-Z]*$/",$Roll_no)) 
{
    echo "Only letters and digit allowed in the Roll_no field"; 
}
else if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
{
    echo "Only letters allowed in the NAME field"; 
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    echo "Invalid email format"; 
}
else if	((!preg_match("/^[0-9]*$/",$phone)) || strlen($phone) != 10) 
{
	 echo "Enter the valid 10 digit numbers"; 
} 
else {
$sql="UPDATE `student_register` SET `Enrollment_no` = '$Enrollment_no', `Roll_no` = '$Roll_no', `Username` = '$Username', `name` = '$name', `Gender` = '$Gender', `branch` = '$branch', `year` = '$year', `Current_semr` = '$Current_semr', `email` = '$email', `phone` = '$phone', `cgpa` = '$cgpa', `10th` = '$tenth', `12th` = '$twelve' WHERE `student_register`.`Enrollment_no` = '$Enrollment_no'; ";
  $result = mysqli_query($conn, $sql);
  if($result)
	{
		// echo "You have successfully registered...  Login to Continue...";
		header("location:studentdashboard.php");
	}
	else
	{
		echo "Enter the valid details";
		 header("location:stedit.php");
	}
}
?>