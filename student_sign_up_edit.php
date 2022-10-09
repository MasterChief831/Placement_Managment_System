
 <?php
//  error_reporting(0);



 require('db_connection.php');

// require 'db_connection.php';
if($_SERVER["REQUEST_METHOD"]=='POST'){
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
  $pass1=$_POST["pass1"];
  $pass2=$_POST["pass2"];
  $phone=$_POST["phone"];
  $cgpa=$_POST["cgpa"];
  $tenth=$_POST["10th"];
  $twelve=$_POST["twelve"];
   $photo1=$_FILES["photo1"];
  // $photo2=$_FILES["photo2"];
 


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
elseif	((!preg_match("/^[0-9]*$/",$phone)) || strlen($phone) != 10) 
{
	echo "Enter the valid 10 digit numbers."; 
}
elseif($_POST['pass1'] == $_POST['pass2']){
  $hash=password_hash($pass1, PASSWORD_DEFAULT);
  $filename=$photo1['name'];
  $filepath=$photo1['tmp_name'];
  $fileerror=$photo1['error'];
  
    if($fileerror==0){
      $destfile='student_sign_up_edit'.$filename;
      move_uploaded_file($filepath, $destfile);
      $sql="INSERT INTO `student_register` (`Enrollment_no`, `Roll_no`, `Username`, `name`, `Gender`, `branch`, `year`, `Current_semr`, `email`, `pass1`, `pass2`, `phone`, `cgpa`, `10th`, `12th`, `photo1`) VALUES ('$Enrollment_no', '$Roll_no', '$Username', '$name', '$Gender', '$branch', '$year', '$Current_semr', '$email', '$hash', '$hash', '$phone', '$cgpa', '$tenth', '$twelve', '$destfile') ";
      $result = mysqli_query($conn, $sql);
      // $result = mysqli_query($mysqli, $sql);
      if($result)
      {
        echo "You have successfully registered...  Login to Continue...";
        header("location:login.html");
      }
      else
      {
        echo "Enter the valid details";
         header("location:home.html");
      }
    }
 
}


else {
	echo "Enter the same password in both the fields";
}


}
else {
  echo "no";
}






?> 





 