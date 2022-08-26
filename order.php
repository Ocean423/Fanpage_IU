<?php
session_start();
include_once('connect.php');

$orderno = mt_rand(11111,99999); //주문번호
$email = $_SESSION['uid'];
$orddate = date('Y/m/d');
$amount = 0; 
$status = "주문완료";

$sql = "insert into order(orderno,email,orddate,amount,status) values('$orderno','$email','$orddate',$amount,'$status')";

if($conn->query($sql)){
	$sql = "select * from cart where email = '$email'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){ 
		$no = 1;
		$error = false;
		while($row = $result->fetch_assoc()){ 
			$name = $row['name'];
			$qty = $row['qty'];
            $amount = $row['amount'];
			
			$sql = "insert into ordAll(orderno, no, name, qty, amount)
				values($orderno, $no, '$name','$size', $amount)";
			if($conn->query($sql)) $no++; //다음순번으로 증가시킴
			else {
                echo "<script>alert('주문내역을 저장중에 오류가 발생하였습니다.');</script>".$conn->error;
                echo "<script>location.replace('mypage_cart.php');</script>";
				$error = true;
				break;
			}			
		}
		//order 테이블의 amount 컬럼 변경
		$sql = "update order set amount = $amount where orderno = '$orderno'";
		if(!$conn->query($sql)) { //오류가 발생한 경우
			echo $conn>error;
			$error = true;
		}
		//cart 테이블을 삭제
		$sql = "delete from cart where email = '$email'";
		if(!$conn->query($sql)) { //오류가 발생한 경우
			echo $conn>error;
			$error = true;
		}
	}
	if(!$error) {
        echo "<script>alert('주문 완료되었습니다.');</script>";
		echo "주문 완료되었습니다.<br>"; //에러가 없으면!
		echo "<script>location.replace('main.php');</script>";
	}
		
}
else
	echo $conn->error;
?>