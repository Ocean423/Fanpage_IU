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
        background-image: url(images/%EA%B7%B8%EB%9D%BC%EB%8D%B0%EC%9D%B4%EC%85%9812.png);
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
        border: 1px solid gray;
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
        <a href="https://www.melon.com/album/detail.htm?albumId=10052968"><img src="images/%EC%82%AC%EB%9E%91%EC%9D%B4%20%EC%9E%98%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">사랑이 잘</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>1년 6개월만의 컴백! '아이유(IU)' 정규4집, 두 번째 선공개곡 [사랑이 잘]<br>
            이름만으로도 충분한, 동갑내기 뮤지션 '아이유'와 '오혁'의 첫 콜라보레이션<br><br>

            역시 '아이유' 였다.<br><br>

            지난달 24일 아련한 감성을 담은 포크 발라드 첫 번째 선공개곡 "밤편지"를 발표한 '아이유'는 발매 직후 8개 음원 차트 정상을 '퍼펙트 올킬'하는 저력 속에, 올 들어 전례 없는 무서운 차트 독주로 대체 불가한 '아이유'의 독보적 음원 파워를 입증해 내었다.<br><br>

            '아이유'가 정규4집 발매 전 두 번째로 꺼내놓은 선공개곡 [사랑이 잘]은 나란히 놓인 두 이름만으로도 부연 설명이 필요 없는 '아이유'와 밴드 혁오의 보컬 '오혁'이 공식적으로 발표하는 최초의 콜라보레이션 송으로, 그간 남다른 음악적 교감과 친분을 쌓아온 동갑내기 두 뮤지션의 만남에 이미 대중의 폭발적인 관심과 기대를 모아온 바 있다.<br><br>

            '아이유', '오혁'이 작사, 작곡부터 콘셉트 재킷 촬영까지 특별한 애정을 담아 완성한 [사랑이 잘]은, 권태기에 놓인 남녀의 솔직 담백한 대화 장면을 두 아티스트의 매혹적인 보이스로 녹여낸 곡이다. 미니멀한 악기 구성의 R&amp;B 넘버인 이 곡에서 '아이유'와 '오혁'은, 현실적이면서도 감각적인 가사와 멜로디를 주고 받으며 권태기 남녀의 갈등을 긴장감 있게 표현해 냈으며, Track Producer로는 데뷔곡 "미아"부터 "봄, 사랑, 벚꽃 말고", "레옹", "스물셋" 등을 함께해온 작곡가 이종훈이 참여해 곡의 완성도를 더했다.<br><br>

            5주 간의 프리 릴리즈(Pre-release) 프로젝트로, 발표하는 선공개 곡과 프리뷰 티저마다 각기 다른 컬러와 음악적 성장을 보여주며 기대감을 끌어올리고 있는 '아이유'의 정규4집 본 앨범은 2주 뒤인 오는 4월 21일 전격 공개된다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/8H1D7XUPNFI"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>사랑이 잘 (With 오혁)&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이종훈, 아이유, 오혁</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유, 오혁</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이종훈</td>
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




