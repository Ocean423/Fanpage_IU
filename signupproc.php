<?php
include_once('connect.php');  // connect.php 파일 내용을 가져온다.

# 회원가입 입력양식 데이터 가져오기
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
date_default_timezone_set("Asia/Seoul");
$date = date("Y/m/d");  // Y : 2020  m : 05  d : 12

# INSERT SQL 명령어 작성
$sql = "insert into member 
		values('$email', '$pwd', '$name', '$phone','$address', 1000)";
#echo $sql;

# 명령문 실행하고 결과 확인
if($conn->query($sql)) {
	echo "<script>alert('회원가입을 성공하였습니다.');</script>";
	echo "<script>location.replace('main.php');</script>";
}
else
	echo "회원가입중에 오류가 발생하였습니다.<br>".$conn->error;
#$conn.close();
?>