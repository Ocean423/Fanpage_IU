<!DOCTYPE html>
<html>
<head>
    <title>Activity</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nanum Myeongjo">
    <link href='http://fonts.googleapis.com/css?family=Staatliches' rel='stylesheet' type='text/css'> 
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
    .all{
        background-image: url(images/%EA%B7%B8%EB%9D%BC%EB%8D%B0%EC%9D%B4%EC%85%988.jpg);
        background-repeat : no-repeat;
		background-size : cover; 
        padding-bottom: 5%; 
        
    }
    .mainImg img{
        width: 500px;
        
        margin: 25%;
        margin-top: 100px;
        margin-bottom: 20px;
        box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        
        transition: all 0.2s;
        transform: scale(1);
    }
    .mainImg:hover img{
        transform: scale(1.1);
        opacity: 0.9;
    }
    
    .albumTitle{
        margin-bottom: 5%;
        font-weight: 800;
        color: beige;
        opacity: 0.9;
    }
    .albumInfo{
        margin-top: 0%;
        margin-left: 15%;
        margin-right: 15%;
    }
    .albumInfo p{
        padding: 5%;
        border: 1px solid gray;
        border-radius: 20px;
        color: beige;
        font-family: 'Nanum Myeongjo';
        font-size: 20px;
    }
    h3{
        width: 100%;
        margin-top: 5%;
        margin-bottom: 5%;
        text-align: center;
        font-family: 'Staatliches';
        font-size: 60px;
    }
    .video{
        margin-left: 15%;
        margin-right: 15%;
    }
    .video iframe{
        width: 100%;
        min-height: 500px;
    }
    .track{
        margin: 15%;
        margin-top: 5%;
    }
    table{
        width: 50%;
        margin-top: 5%;
        margin-left: 25%;
        margin-right: 25%;
        font-size: 20px;
    }
    th{
        text-align: justify;
    }
    td:nth-child(1){
        padding-right: 5px;
        padding-left: 3px;
        color: lightyellow;
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
    

<!-- Container (Filmography Section) -->
    
<div class="all w3-container">
    <div class="mainImg w3-content" id="top">
        <a href="http://program.tving.com/tvn/hoteldelluna"><img src="images/%EB%8D%B8%EB%A3%A8%EB%82%98%20%ED%94%84%EB%A1%9C%ED%95%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">장만월</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>어서오십시오.<br>
            최고의 서비스로 모십니다.<br>
            단, 귀신만!<br><br>
            
            2019년, 서울 시내 가장 번화한 도심 한복판.<br>
            가장 금싸라기 땅에 자리 잡고 있는 낡고 허름한 건물.<br>
            언뜻보면 재건축을 준비하고 있는 빈 건물인 듯도 보이지만<br>
            자세히 보면, 영업 중인 호텔이다.<br><br>

            그 앞을 지나는 수백만의 유동인구가 있지만,<br>
            정작 그 호텔 안으로 들어가는 손님은 거의 없다. 낮에는.<br>
            밤이 깊어 인적이 끊기고 도심이 잠들 때,<br>
            간판에 불이 켜진다.... 호텔 델루나.<br><br>

            령빈(靈賓)전용 호텔 델루나에<br>
            초엘리트 호텔리어 구찬성이 지배인으로 근무하며,<br>
            괴팍하고 심술궂은 사장 장만월과 함께<br>
            특별한 영혼손님들에게 특급서비스를 제공하며 벌어지는 이야기.</p>
    </div>
    
    <div class="albumInfo">
        <h3>CAST</h3>
        <p>장만월 (이지은)<br>
        호텔 델루나의 사장.<br>
        껍데기는 달처럼 고고하고 아름답지만,<br>
        천년도 넘게 묵은 노파가 속에 들어앉은 듯<br>
        쭈글쭈글하게 못난 성격.<br>
        괴팍하고, 심술 맞고, 변덕이 심하고,<br>
        의심과 욕심도 많으며,<br>
        심지어 사치스럽기까지 하다.</p>
    </div>
    
    <div class="video">
        <h3>TEASER</h3>
        <iframe src="https://youtube.com/embed/F6IUs4lzQ2o"></iframe>
        <iframe src="https://youtube.com/embed/7qzpLGHNDCo"></iframe>
        
        <h3>HIGHLIGHT</h3>
        <iframe src="https://youtube.com/embed/kJ3CaQL2TcA"></iframe>
        
        <h3>MAKING</h3>
        <iframe src="https://youtube.com/embed/2F8xpkX7kOk"></iframe>
        <iframe src="https://youtube.com/embed/vw70oDUX1pw"></iframe>
        
    </div>
    
</div>
    
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="#top" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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

