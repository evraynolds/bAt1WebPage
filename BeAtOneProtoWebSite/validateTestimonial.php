<?php
//runonce.php - run this script only once!
ob_start();
//establish a connection to the Database
require_once('db_connect.php');
//create query
$q="CREATE TABLE admin1 (ID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), username varchar(20), password varchar(40), testimonial varchar(70))";
//execute query
$result=@mysqli_query($conn, $q);
//populate the table
$testimonial=$_REQUEST['shareTestimonial'];
$qinsert = "INSERT INTO admin1 (testimonial) VALUES ('{$testimonial}')";
mysqli_query($conn, $qinsert);
$testim=$_POST['shareTestimonial'];
$sql="SELECT testimonial FROM admin1";
$result=mysqli_query($conn, $sql);
while ($row=mysqli_fetch_array($result)){
  if($row['testimonial'] == $testim) {
echo $row['testimonial'];
echo '<br>';

}
}
header('Location: aboutUs.php');
/*$query="SELECT * FROM admin1";
$result=mysqli_query($conn, $query);
while ($row=mysqli_fetch_array($result)){
echo $row['username'].'-'.$row['password'];
echo '<br>';
}*/
/*if($row['username'] == $fname && $row['password'] == $fpassword ) {
  session_start();
  $_SESSION['user']=1;
header ("Location: HomePage.php");
}
if(!isset($_SESSION['user'])){
header("Location: signUp.php");
exit();
  }
*/
//check that the table exists by printing the contents – for testing purposes only!
//$query="SELECT * FROM admin1";
ob_end_flush();
?>
