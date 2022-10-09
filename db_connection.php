<?php
 
$server="localhost";
$username="root";
$password="";
$database="placement";

$conn = mysqli_connect($server,$username,$password,$database);
if(! ($conn) ) die("Sorry we failed to connect: ". mysqli_connect_error());

// if ($mysqli->connect_errno) {
//   printf("Connect failed: %s\n", $mysqli->connect_error);
//   exit();
// }

// $GLOBALS['conn']=$mysqli;

?>
