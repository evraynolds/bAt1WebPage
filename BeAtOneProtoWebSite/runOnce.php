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
$userName=$_REQUEST['myusername'];
$userPass=$_REQUEST['mypassword'];
$qinsert = "INSERT INTO admin1 (username, password) VALUES ('{$userName}','{$userPass}')";
mysqli_query($conn, $qinsert);
$fname=$_POST['myusername'];
$fpassword=$_POST['mypassword'];
$sql="SELECT * FROM admin1 WHERE username='$fname' AND password='$fpassword'";
$result=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($result)){
if($row['username'] == $fname && $row['password'] == $fpassword) {
  session_start();
  $_SESSION['user']=1;
header ("Location: HomePage.php");
exit();
}
}
/*if(!isset($_SESSION['user'])){
header("Location: signUp.php");
exit();
  }*/

//check that the table exists by printing the contents – for testing purposes only!
/*$query="SELECT * FROM admin1";
$result=mysqli_query($conn, $query);
while ($row=mysqli_fetch_array($result)){
echo $row['username'].'-'.$row['password'];
echo '<br>';
}*/

ob_end_flush();
?>
