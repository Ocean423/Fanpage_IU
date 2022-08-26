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
        background-image: url(images/%EA%B7%B8%EB%9D%BC%EB%8D%B0%EC%9D%B4%EC%85%982.jpg);
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
        <a href="https://www.melon.com/album/detail.htm?albumId=2121646"><img src="images/%ED%95%98%EB%A3%A8%EB%81%9D.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">스무 살의 봄</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>팬들에게 전하는 조금은, 사적인 이야기::: 아이유 싱글 [스무 살의 봄]<br><br>
 
        아이유가 봄과 함께 팬들 곁으로 돌아왔다. 지난 해 정규앨범 [LAST FANTASY]로 싱어송라이터로의 성장을 보여주고, 이어진 성공적인 일본데뷔, 여성 솔로 아티스트로서의 자신감을 보여준 국내 첫 전국투어 단독콘서트 개최 소식 등 활발한 음악적 활동을 이어온 아이유가 새 앨범을 통해 변함없는 사랑과 응원을 보내준 팬들에게 다시 한번 싱그러운 음악을 선물한다. 새로운 싱글 [스무 살의 봄]은 아이유가 스무 살이 된 후 발표하는 첫 앨범으로, 데뷔4년 차에 접어든 아이유의 조금은, 사적이고 솔직한 내면의 감성을 선보인다. 아이유의 이번 싱글은 조영철 프로듀서가 총괄 프로듀싱을 맡았으며, 더 이상 설명이 필요 없는 국내 최고의 히트메이커 박근태, 김도훈 작곡가와 김이나 작사가가 참여했으며, JYP 소속의 심은지 작곡가, 김은수 작사가가 참여해 눈길을 끈다. 더불어 아이유가 자작곡을 수록해 싱어송라이터로의 면모를 이어간다.<br><br>

        총3곡이 수록된 [스무 살의 봄]은 아이유의 자작곡인 "복숭아"로 달콤한 시작을 알린다. 사랑의 설렘을 그린 봄 향기 가득한 러브송 "복숭아"는 사랑이 시작될 때의 설렘을 어쿠스틱한 사운드와 감성으로 표현한 곡으로, 풋풋하고 소녀적인 아이유의 감성이 잘 표현된 곡이다. 사랑하는 연인을 바라보는 것만으로도 좋아서 어쩔 줄 몰라하는 애틋한 마음이 표현된 가사는 잔잔하면서도 달콤한 멜로디와 함께 어우러져 아이유에게 고백을 받는 듯한 설렘을 안겨준다. 또한, 아이유가 직접 연주한 리코더와 트라이앵글 소리는 곡과 어우러져 소녀감성을 더한다.<br><br>

        [스무 살의 봄]의 타이틀곡인 "하루 끝"은 박근태 작곡가와 김도훈 작곡가의 합작품으로 김이나 작사가가 함께 곡 작업에 참여해 기대를 더한다. "하루 끝"은 올드팝을 연상시키는 디스코풍의 경쾌한 업템포곡으로, 팬들의 많은 사랑을 받고 있는 아이유의 밝은 보컬을 만나볼 수 있는 곡이다. 상대방을 많이 좋아하고 표현하면서 그 다음을 알아주기를 바라는, 먼저 다가와주기를 바라는 여자의 마음을 그린 "하루 끝"은 화려한 스케일의 스트링이 인상적인 사운드와 아이유의 청명하고 밝은 보컬이 어우러지며 듣는 이에게 기분 좋은 설렘을 안겨준다.<br><br>

        마지막 곡인 "그 애 참 싫다"는 심은지 작곡가와 김은수 작사가의 합작품으로, 그 동안 선보였던 곡들과는 다른 스타일을 만나볼 수 있는 곡이다. R&amp;B 스타일의 발라드곡인 이 곡은 제목에서 알 수 있듯이 제3자를 주인공으로 한 시선으로 지나간 사랑을 놓지 못하고 자신을 바라봐주지 않는 남자를 원망하는 마음을 독백형식으로 풀어낸 가사가 인상적인 곡이다. 쓸쓸함을 더하는 어쿠스틱 기타의 사운드와 체념한 듯한 아이유의 보컬 스타일이 어우러져 곡의 분위기를 더한다. 따스한 오월, 아이유가 노래하는 [스무 살의 봄]은 밝은 햇살과 함께 우리에게 따뜻함으로 다가올 것이다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/mzYM9QKKWSg"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>복숭아</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by G,고릴라</td>
            </tr>
            
            <tr>
                <td>2</td>
                <th>하루 끝&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 박근태,김도훈</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김이나</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 김도훈</td>
            </tr>
            
            <tr>
                <td>3</td>
                <th>그 애 참 싫다</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 심은지</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김은수</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 심은지</td>
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

