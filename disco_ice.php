<!DOCTYPE html>
<html>
<head>
    <title>Activity</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
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
        background-image: url(images/%EA%B7%B8%EB%9D%BC%EB%8D%B0%EC%9D%B4%EC%85%983.png);
        background-repeat : no-repeat;
		background-size : cover; 
    }
    .mainImg img{
        border-radius: 70%;
        width: 500px;
        height: 500px;
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
        border: 1px solid darkgray;
        border-radius: 20px;
        
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
        color: coral;
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
        <a href="https://www.melon.com/album/detail.htm?albumId=1313571"><img src="images/%EC%96%BC%EC%9D%8C%EA%BD%83%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">얼음꽃</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>‘가요계 대세’ 아이유와 ‘피겨 여왕’ 김연아의 만남.<br>
        SBS 김연아의 KISS &amp; CRY 주제가 [얼음꽃]<br><br>

        모두가 기다려온 두 국민여동생의 만남이 눈 앞으로 다가왔다. 풍부한 음악적 감성으로 가요계의 디바로 우뚝 선 아이유와 완벽한 피겨실력에 버금가는 뛰어난 가창력을 선보였던 김연아의 환상적인 하모니로 탄생한 듀엣곡 “얼음꽃”이 드디어 공개된다. 이번 듀엣은 아이유가 김연아에게 깜짝 러브콜을 보냈고, 평소 아이유의 팬임을 밝혀온 김연아가 아이유의 듀엣곡 제안에 흔쾌히 응하면서 성사되었다. “얼음꽃”은 SBS 예능프로그램 ‘김연아의 KISS &amp; CRY’의 주제가로 사용이 되며, 음원의 수익금은 피겨 발전에 사용될 예정이다.<br><br>

        공개 전부터 많은 기대와 관심을 한 몸에 받은 아이유의 김연아의 듀엣곡 “얼음꽃”은 국내 최고의 히트메이커인 이민수 작곡가와 김이나 작사가의 합작품으로, 전작인 “잔소리”, “좋은 날”에 이은 대히트를 예고하고 있다. 미국 동요 Grandfather’s Clock을 모티브로 한 도입부분의 멜로디라인을 시작으로 아이유와 김연아가 주고 받는 부드러운 감성은 귀에 자연스럽게 감긴다. 여기에 후렴구에 폭발하는 아이유와 김연아의 뛰어난 가창력은 한층 웅장해지는 곡의 스케일과 어우러져 한 편의 드라마를 연출한다.<br><br>

        ”얼음꽃”의 가사는 2010 벤쿠버 올림픽에서 최고의 연기를 선보인 김연아의 뜨거운 눈물이 모티브가 되어 완성되었다. 화려하고 아름다운 모습을 보여주었다가 물로 녹아버리는 “얼음꽃”처럼 꿈을 위해 나아가는 과정 속에서 흘리는 눈물이 단순한 슬픈 눈물이 아닌 다시 피어나기 위한 눈물만 흘리며 성장해주길 바라는 마음이 아이유와 김연아의 올곧은 목소리로 표현되었다. 아이유와 김연아의 가창력을 충분히 만끽할 수 있는 “얼음꽃”은 고음처리가 많은 곡의 특성 때문에 녹음 전 관계자들의 우려 섞인 걱정이 많았는데, 김연아는 자신의 실력을 유감없이 선보이며 뛰어난 가창력으로 아이유를 비롯한 관계자들을 놀라게 했다.<br><br>

        이번 작업에는 아이유의 김연아의 아름다운 마음에 반한 두 삼촌팬이 든든한 지원군으로 나섰다. 국내 가요계에서 락의 전설로 통하고 있는 넥스트와 부활이 그 주인공. 넥스트의 기타리스트이자 국내 최고의 테크니션인 김세황은 곡의 클라이막스라고 할 수 있는 기타 솔로 연주를 선보였으며, 최근 팬들의 사랑을 한 몸에 받고 있는 부활의 베이시스트 서재혁이 베이스 연주로 참여하여 곡의 완성도를 한층 더 높였다. 사람들의 환호 혹은 비난 속에서도 흔들리지 않고 스스로를 믿으며 자신의 꿈을 키워 온 아이유와 김연아가 함께 전하는 “얼음꽃”은 지금 세상 모든 곳에서 자신의 꿈을 위해 노력하며 성장중인 모든 이들에게 큰 힘이 될 것이다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/8fCksQtuVek"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>얼음꽃(feat.김세황)&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김이나</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이민수</td>
            </tr>
        </table>
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

