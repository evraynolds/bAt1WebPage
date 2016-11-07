<?php
ob_start();
session_start();
session_destroy();
header("Location: HomePage.php");
ob_end_flush();
?>
