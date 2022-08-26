<!DOCTYPE html>
<html>
<head>
    <title>회원가입</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    
    <style>
    * {
        font-family: "Lato", sans-serif;
    }
    html, body {
        height: 100%;
        color: #101010;
        line-height: 1.8;
    }
        
    * {
        box-sizing: border-box;
    }

    body {
        margin-left: auto;
        margin-right: auto;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-image: url(w6.jpg);
        min-height: 100%; /*img 화면전체 차지*/
        
    }
    .info{
        padding-top: 15px;
        color: white;
    }
    .container{ /* info+signupBox */
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 60px;
        }
    .signupBox{
        color: white;
        margin-left: 25%;
        margin-right: 25%;
        border-radius: 5px;
        padding: 20px;
        }
    input[type=text], input[type=password],select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        background-color: white;
        opacity: 0.9;
        
    }
    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }
    input[type=submit] {
        background-color: white;
        color: black;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
		margin-top: 10px;
        float: right;
    }
    input[type=submit]:hover {
        background-color: lightgray;
    }
    
    .col-75 {
        float: center;
        width: 75%;
        margin-top: 7px;
        
    }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    </style>
</head>
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
    
<!--    본문-->
    
        <div class="container">
            <div class="info w3-center">
                <h1>회원가입</h1>
            </div>
        <div class="signupBox" >
          <form action="signupproc.php" method="post">
            <div class="row">
              <div class="col-75">
                  <label>이메일</label>
                <input class="w3-input w3-animate-input" type="text" name="email" placeholder="User email.." style="width: 90%">
              </div>
            </div>
            <div class="row">
              <div class="col-75">
                <label>이름</label>
                <input class="w3-input w3-animate-input" type="text" name="name" placeholder="User name.." style="width: 90%">
              </div>
            </div>
            <div class="row">
              <div class="col-75">
                <label for="lname">비밀번호</label>
                <input class="w3-input w3-animate-input" type="password" name="pwd" placeholder="Password.." style="width: 90%">
              </div>
            </div>
            <div class="row">
              <div class="col-75">
                <label>전화번호</label>
                <input class="w3-input w3-animate-input" type="text" name="phone" placeholder="Mobile.." style="width: 90%">
              </div>
            </div>
            <div class="row">
              <div class="col-75">
                <label>주소</label>
                <input class="w3-input w3-animate-input" type="text" name="address" placeholder="Address.." style="width: 90%">
              </div>
            </div>
            <div class="row">
              <input type="submit" value="등록">
            </div>
          </form>
        </div> <!-- signupBox end -->
        </div> <!-- container end -->
    </body>
</html>






