<?php
session_start();
include_once('connect.php');
$email = $_SESSION['uid'];
$title = $_GET['title'];
$contents = $_GET['contents'];
$date = date('Y/m/d');

$sql = "insert into community(writer, title, content, date)
		values('$email', '$title','$contents','$date')";
if($conn->query($sql)) {
	echo "<script>alert('게시글 업로드 성공!');</script>";
    echo "<script>location.replace('community.php');</script>";
}
else {
	echo "<script>alert('게시글 업로드에 실패.');</script> <br>".$conn->error;
}
?>
