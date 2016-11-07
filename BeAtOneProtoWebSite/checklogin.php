<?php
//use ob_start if you get a ‘headers already sent’ message
ob_start();
//establish a connection to the Database
require_once('db_connect.php');
//create query
$q="CREATE TABLE admin1 (ID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), username varchar(20), password varchar(40))";
//execute query
$result=@mysqli_query($conn, $q);
//populate the table
$userName=$_REQUEST['myusername'];
$userPass=$_REQUEST['mypassword'];
$qinsert = "INSERT INTO admin1 (username, password) VALUES ('{$userName}','{$userPass}')";
mysqli_query($conn, $qinsert);
//access the username and password sent from form
$fname=$_POST['myusername'];
$fpassword=$_POST['mypassword'];
//create query
$sql="SELECT * FROM admin1 WHERE username='$fname' AND password='$fpassword'";
$result=mysqli_query($conn, $sql);
//$row=mysqli_fetch_array($result);
//while ($row=mysqli_fetch_array($result)){
echo $row['username'].'-'.$row['password'];
//if($row['username'] == $fname && $row['password'] == $fpassword ) {
// create a session variable
//session_start() must be called before any output is sent
session_start();
$_SESSION['user']=1;
//redirect to file "login_success.php"
//header() must be called before any output is sent
// If session is not registered redirect back to main page
//header ("Location: HomePage.php");
//}
//}
if(!isset($_SESSION['user'])){
header("Location: signUp.php");
exit();
}
//use ob_end_flush if you get a ‘headers already sent’ message
ob_end_flush();
?>
