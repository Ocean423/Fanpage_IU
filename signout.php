<?php
session_start();
session_destroy(); //세션정보를 삭제.
echo "<script>alert('로그아웃되었습니다.');</script>";
echo "<script>location.replace('main.php');</script>";
?>