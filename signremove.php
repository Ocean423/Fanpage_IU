<?php
session_start();
# DB 연결
include_once('connect.php');
$email = $_SESSION['uid'];
# DELETE sql 작성
$sql = "delete from member where email = '$email'";
# sql 실행
if($conn->query($sql)) {
	session_destroy();
	echo "<script>alert('회원정보가 삭제되었습니다.');</script>";
    echo "<script>location.replace('main.php');</script>";
}
else {
	echo "<script>alert('회원정보가 삭제에 오류가 발생하였습니다.');</script>".$conn->error;
}
?>