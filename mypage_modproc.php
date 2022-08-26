<?php
session_start();
# DB 연결하기
include_once('connect.php');
# 입력양식의 데이터 가져오기
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

# UPDATE sql 작성
$sql = "update member set name = '$name', pwd = '$pwd', name = '$name', 
        phone = '$phone', address = '$address' where email = '$email'";

#alert로 하기!
if($conn->query($sql)) {
	$_SESSION['name'] = $name;  // 변경된 이름을 세션변수에 저장 
	echo "<script>alert('회원정보가 변경되었습니다.');</script>";
    echo "<script>location.replace('mypage_mod.php');</script>";
}
else {
	echo "<script>alert('회원정보가 변경에 오류가 발생하였습니다.');</script>".$conn->error;
    echo "<script>location.replace('mypage_mod.php');</script>";
}
?>
