<?php
session_start();
include_once('connect.php');
$email = $_SESSION['uid'];
$name = $_GET['name'];
$qty = $_GET['qty'];
$option = $_GET['option'];

$price = $_GET['price'];
$amount = ($price * $qty)+2500;


$sql = "insert into cart(email, name, qty, amount, option)
		values('$email', '$name',$qty, $amount, '$option')";
if($conn->query($sql)) {
	echo "<script>alert('장바구니에 상품을 담았습니다.');</script>";
    echo "<script>location.replace('shop.php');</script>";
}
else {
	echo "<script>alert('장바구니에 상품을 담는 중에 오류가 발생했습니다.');</script> <br>".$conn->error;
}
?>
