<?php 
//db_connect.php
// Set database access info 
DEFINE ('DB_HOST','elephant.ecs.westminster.ac.uk');
DEFINE ('DB_USER', 'w1483905'); 
DEFINE ('DB_PASSWORD', 'OhDctKaKApkL'); 
DEFINE ('DB_NAME', 'w1483905_0'); 
// Make connection
$conn=@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
   if (!$conn) {
   die('Did not connect to MySQL: ' . mysqli_connect_error()); 
   }
//select the database
 mysqli_select_db($conn, DB_NAME);
?>

