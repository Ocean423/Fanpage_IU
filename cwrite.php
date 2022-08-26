<!DOCTYPE html>
<html>
<head>
    <title>Community</title>
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
    }
    .img-1{
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-image: url(%EB%B8%94%EB%A3%A8%EB%B0%8Dw2.jpg);
        min-height: 400px;
    }
    .wbox{
        margin: 5%;
        padding-left: 8%;
        padding-right: 10%;
        padding-bottom: 10%;
        padding-top: 5%;
        
        background-color: white;
        opacity: 0.9;
    }
    .title{
        height: 50px;
        width: 80%;
    }
    .contents{
        margin-top: 2%;
        height: 600px;
        width: 80%;
    }
    label{
        padding: 2%;
        
        font-size: 20px;
        color: black;
    }
    h2{
        margin-bottom: 2%;
        background-color: dimgray;
    }
    .btn{
        background-color: black;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
		margin-top: 10px;
        margin-left: 5px;
        float: right;
    }
    .btn:hover{
        background-color: lightgray;
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
        <a href="main.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <a href="main.php.#profile" class="w3-bar-item w3-button w3-padding-large">PROFILE</a>
        <div class="w3-dropdown-hover">
            <a href="Activity.php"><button class="w3-button w3-padding-large">ACTIVITY  <i class="fa fa-caret-down"></i></button></a>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="Activity.php.#discography" class="w3-bar-item w3-button">DISCOGRAPHY</a>
                <a href="Activity.php.#filmography" class="w3-bar-item w3-button">FILMOGRAPHY</a>
            </div>
        </div>
        <a href="Gallery.php" class="w3-bar-item w3-button w3-padding-large">GALLERY</a>
        <a href="community.php" class="w3-bar-item w3-button w3-padding-large">COUMMUNITY</a>
        <a href="shop.php" class="w3-bar-item w3-button w3-padding-large">SHOP</a>
      
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
<div class="img-1 w3-display-container " id="cmMain">
    <div class="w3-display-right" style="white-space: nowrap">
        <span class="w3-padding-large w3-text-white w3-black w3-opacity-min w3-wide w3-xxlarge" >COMMUNITY</span>
    </div>
</div>
    
<!-- Container (Discography Section) -->
<div class="w3-center w3-dark-gray w3-container w3-padding-64">
    <div class="wbox" >
        <h2>자유게시판</h2>
        <form action="addCont.php" method="get">
            <label >제목</label>
            <input class="title" type="text" name="title" placeholder="제목을 입력하세요"><br>
            <label >내용</label>
            <input class="contents" type="text" name="contents" placeholder="내용을 입력하세요"><br>
            <button type="submit" class="btn">글쓰기</button>
        </form>
    </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="#cmMain" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>
    
</body>
</html>
