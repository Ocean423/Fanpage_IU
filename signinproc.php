<?php
session_start(); //★PHP 첫번째 줄에 있어야 함. 세션 시작
//회원가입하고 자동적으로 로그인된 상태로 만들거면 session만들어주면 됨.
//회원가입따로 로그인따로 할거면 session_start();쓸 필요 없다~
include_once('connect.php');  // connect.php 파일 내용을 가져온다.

# 로그인 양식의 데이터 가져오기
$email = $_POST['email'];
$pwd = $_POST['pwd'];

# SELECT SQL 명령문 작성
$sql = "select * from member where email = '$email' and pwd = '$pwd'";
#echo $sql;

# 명령문 실행
//result에는 셀렉트로 검색된 레코드들이 저장됨.
//$result 변수는 객체.
//$var_dump($result); 
$result = $conn->query($sql);  // 검색된 레코드들이 저장. $result 변수는 객체 //위 셀렉트문 실행시키는 문장
//var_dump($result);
if($result->num_rows > 0) {
	//객체니까 멤버가르킬때->사용. 실행된 결과값이 레코드에 들어감
	$record = $result->fetch_assoc();  // 레코드 한개를 가지는 연관배열 
	//var_dump($record); //array.
	
	# 로그인한 유저의 세션정보 기록하기. 어디에? 세션변수를 만들어서 그 변수에 저장.
	//그래야 로그인정보를 다른페이지에서도 쓸수있다
	//세션변수는 여러페이지에서 사용가능!
	
	$_SESSION['uid'] = $email;  // uid 세션변수에 $email 값을 저장 
	//세션변수명이 uid라고 생각하기!
	//연관배열형태로 있다. 생각!
	$_SESSION['name'] = $record['name'];
	/*이름은 셀렉트문에서 나옴.*/
	echo "<script>location.replace('main.php');</script>";
	
}
else{
	echo "<script>alert('로그인에 실패하였습니다.');</script>";
	echo "<script>location.replace('signin.html');</script>";
}
?>