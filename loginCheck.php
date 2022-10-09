<?php
require('db_connection.php');
if($_SERVER["REQUEST_METHOD"]=='POST'){
  $Enrollment_no=$_POST["Enrollment_no"];
  $pass1=$_POST["pass1"];
  $check=$_POST["radio"];
  $login=false;
   if($check=="student"){
     $sql="SELECT * FROM `student_register` where Enrollment_no='$Enrollment_no' ";
     $result=mysqli_query($conn,$sql);
     
    //  echo "yes";

      $num=mysqli_num_rows($result);
      if($num==1){
      //  echo "k";
        while($row=mysqli_fetch_assoc($result)){
          if(password_verify($pass1,$row['pass1'])){
            $login=true;
             session_start();
             $_SESSION['loggedin']=true;
             $_SESSION['Enrollment_no']=$Enrollment_no;
            header("location:studentdashboard.php");
          }
 
        }
         if(!$login) echo"yes1";
      }
     
     else  echo"no1";
    //  $num=mysqli_num_rows($result);
    //  if($num==1){
      
    //    while($row=mysqli_fetch_assoc($result)){
    //      if(password_verify($pass1,$row['pass1'])){
    //        $login=true;
    //        header("location:studentdashboard.html");
    //      }

    //    }
    //  }
    //  else echo"Invalid credentational";

   }
    if($check=="Faculty"){
    $sql="SELECT * FROM `faculty_register` where Enrollment_no='$Enrollment_no' ";
     $result=mysqli_query($conn,$sql);
     
    //  echo "yes";

      $num=mysqli_num_rows($result);
      if($num==1){
      //  echo "k";
        while($row=mysqli_fetch_assoc($result)){
          if(password_verify($pass1,$row['Password'])){
            $login=true;
             session_start();
             $_SESSION['loggedin']=true;
             $_SESSION['Enrollment_no']=$Enrollment_no;
            header("location:facultydashboard.php");
          }
 
        }
         if(!$login) echo"yes1";
      }
     
    //  else  echo"no1";


}
if($check=="student_cordinatore"){
  $sql="SELECT * FROM `student_cordinatore` where Enrollment_no='$Enrollment_no' ";
   $result=mysqli_query($conn,$sql);
   
  //  echo "yes";

    $num=mysqli_num_rows($result);
    if($num==1){
    //  echo "k";
      while($row=mysqli_fetch_assoc($result)){
        if(password_verify($pass1,$row['pass1'])){
          $login=true;
           session_start();
           $_SESSION['loggedin']=true;
           $_SESSION['Enrollment_no']=$Enrollment_no;
          header("location:sc_dashboard.php");
        }

      }
       if(!$login) echo"yes1";
    }
   
  //  else  echo"no1";


}

}

?>