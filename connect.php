<?php
# Database 접속하기
$server = "localhost";
$account = "root";
$pass = "";
$dbname = "iupage";
$conn = new mysqli($server, $account, $pass, $dbname);
if($conn->connect_error) die("Database connection error!!");

?>