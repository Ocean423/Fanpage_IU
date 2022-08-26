<!DOCTYPE html>
<html>
<head>
    <title>MyPage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<style>
    *{
        font-family: "Lato", sans-serif;
    }
    html, body {
        height: 100%;
        color: #101010;
        line-height: 1.8;
        background-color: grey;
    }
    .img-1{
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-image: url(w1.jpg);
        min-height: 400px;
    }
/*    id이름수정!*/
    #goods{ 
        margin-bottom: 5%;
/*        background-color: antiquewhite;*/
    }
    .sidebar{
        display: inline-block;
        position: sticky;
        margin-left: 0%;
        top: 30px;
        width: 80px;
        height: 80px;
    }
    .container{
        margin-left: 15%;
    }
    .Menu{
        text-align: left;
        font-size: 40px;
        padding-left: 5%;
        margin-top: 5%;
        margin-bottom: 5%;
    }
    
    .signupBox{
        color: white;
        margin-left: 25%;
        margin-right: 25%;
        border-radius: 5px;
        padding: 20px;
        }
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: white;
        opacity: 0.9;
        
    }
    label {
        
        font-size: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        display: inline-block;
    }
    input[type=submit], input[type=button]{
        background-color: white;
        color: black;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
		margin-top: 10px;
        margin-left: 5px;
        float: right;
    }
    input[type=submit]:hover,input[type=button]:hover {
        background-color: lightgray;
    }
    
    .col-75 {
        float: center;
        width: 75%;
        margin-top: 7px;
        
    }
    
/*    공간체크*/
    
    .albumFrame{
        background-color: gainsboro;
        border-radius: 4px;
        margin: 5%;
        padding-bottom: 5%;
    }
    .modBox{
        padding: 3%;
    }
    
    
</style>
<body>
<?php
    session_start();
    include_once('connect.php');
    ?>
<!-- 메뉴(Navbar) -->
<div class="w3-top">
    <div id="myNavbar" class="w3-text-white w3-black w3-opacity">
        <a href="javascript:void(0)" onclick="scrolling(event,'#home')" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <a href="javascript:void(0)" onclick="scrolling(event,'#profile')" class="w3-bar-item w3-button w3-padding-large">PROFILE</a>
        <div class="w3-dropdown-hover">
            <a href="Activity.php"><button class="w3-button w3-padding-large">ACTIVITY  <i class="fa fa-caret-down"></i></button></a>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="Activity.php.#discography" class="w3-bar-item w3-button">DISCOGRAPHY</a>
                <a href="Activity.php.#filmography" class="w3-bar-item w3-button">FILMOGRAPHY</a>
            </div>
        </div>
        <a href="Gallery.php" class="w3-bar-item w3-button w3-padding-large">GALLERY</a>
        <a href="community.php" class="w3-bar-item w3-button w3-padding-large">COUMMUNITY</a>
        <a href="Shop.php" class="w3-bar-item w3-button w3-padding-large">SHOP</a>
      
        <?php
        if(isset($_SESSION['uid'])) { //로그인상태이면
            $email = $_SESSION['uid'];
			$name = $_SESSION['name'];
           
            echo "<a href='signout.php' class='w3-bar-item w3-button w3-padding-large w3-right'>로그아웃</a>";
            echo "<a href='mypage_mod.php' class='w3-bar-item w3-button w3-padding-large w3-right'>마이페이지</a>";
        }
        else{
            echo "<a href='signup.php' class='w3-bar-item w3-button w3-padding-large w3-right'>회원가입</a>";
            echo "<a href='signin.php' class='w3-bar-item w3-button w3-padding-large w3-right'>로그인</a>";
        }
        ?>
    </div>
</div>
    
    
<!--첫 번째 패럴랙스 배경 -->
<div class="img-1 w3-display-container " id="myPageMain">
    <div class="w3-display-right" style="white-space: nowrap">
        <span class="w3-padding-large w3-text-white w3-black w3-opacity-min w3-wide w3-xxlarge" >MyPage</span>
    </div>
</div>

<!--section -->
<div class="w3-center w3-container " id="goods">
    
<!-- Sidebar -->
<div class="sidebar w3-left w3-grey w3-bar-block" style="width:15%">
  <h3 class="w3-bar-item">MENU</h3>
  <a href="javascript:void(0)" onclick="location.href = 'mypage_cart.php'" class="w3-bar-item w3-button">장바구니</a>
  <a href="javascript:void(0)" onclick="scrolling(event,'#mod')" class="w3-bar-item w3-button">정보수정</a>
  <a href="javascript:void(0)" onclick="location.href = 'mypage_order.php'" class="w3-bar-item w3-button">주문처리</a>
</div>

<!-- modBox -->
<div class="container">
    <?php
		$sql = "select * from member where email = '$email'";
		$result = $conn->query($sql);
		if($result->num_rows > 0)
			$record = $result->fetch_assoc();
    ?>
    
    
    <h3 class="Menu" style="padding-top: 5px" id="mod">정보수정</h3>
    <div class="albumFrame w3-row-padding w3-justify">
        <div class="modBox" >
          <form action="mypage_modproc.php" method="post">
            <div class="row">
              <div class="col-75">
                  <label>이메일</label>
                <input class="w3-input" type="text" name="email" value="<?=$email?>" readonly class="read" style="width: 70%">
              </div>
            </div>
            <div class="row">
              <div class="col-75">
                <label>이름</label>
                <input class="w3-input" type="text" name="name" value="<?=$record['name']?>" style="width: 70%">
              </div>
            </div>
            <div class="row">
              <div class="col-75">
                <label for="lname">비밀번호</label>
                <input class="w3-input" type="password" name="pwd" value="<?=$record['pwd']?>" style="width: 70%">
              </div>
            </div>
            <div class="row">
              <div class="col-75">
                <label>전화번호</label>
                <input class="w3-input" type="text" name="phone" value="<?=$record['phone']?>">
              </div>
            </div>
            <div class="row">
              <div class="col-75">
                <label>주소</label>
                <input class="w3-input" type="text" name="address" value="<?=$record['address']?>" style="width: 70%">
              </div>
            </div>
            <div class="row">
                <input type="button" onclick="location.href='signremove.php'" value="회원탈퇴">
                <input type="submit" value="수정" >
            </div>
          </form>
        </div> <!-- modBox end -->
        
    </div> <!-- one Theme end -->
    

</div> <!-- container end -->
</div> <!-- all section box end -->
    
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="#myPageMain" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>
    
<script>
// 화면 스크롤 효과
function scrolling(evt, loc) {
    var menus, i;
    menus = document.getElementsByClassName("menu");
    for(i=0; i<menus.length; i++) {
        menus[i].className = menus[i].className.replace("", "");
    }
    evt.currentTarget.className += " ";
    var offset = $(loc).offset();
    $('html, body').animate({scrollTop: offset.top}, 800);
}
</script>

    
</body>
</html>
