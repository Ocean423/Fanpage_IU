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
        <a href="https://www.melon.com/album/detail.htm?albumId=2248659"><img src="images/%EB%B4%84%EC%82%AC%EB%9E%91%EB%B2%9A%EA%BD%83%EB%A7%90%EA%B3%A0.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">봄 사랑 벚꽃 말고</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>2014년 봄 캐롤 탄생 HIGH4 with IU "봄 사랑 벚꽃 말고"<br><br>

        'IU'와의 콜라보로 음원 공개 전부터 화제를 불러 모았던 'HIGH4' with 'IU' (하이포, 아이유) "봄 사랑 벚꽃 말고"가 4월 8일 정오에 공개되었다. 이번 "봄 사랑 벚꽃 말고"는 'HIGH4'의 데뷔곡이자 'IU'가 직접 작사에 참여한 것은 물론 가창과 함께 뮤직비디오까지 출연해 ‘HIGH4(하이포)’의 가요계에 발돋움 하는데 적극적으로 지원하였다. 'HIGH4' with 'IU'의 "봄 사랑 벚꽃 말고"는 사랑의 계절로 여겨지는 봄에 홀로 느끼는 외로움을 재치 있는 가사와 달콤한 멜로디로 표현한 곡으로, 아이유의 상큼한 보이스와 'HIGH4(하이포)' 멤버들의 감미로운 보컬과 랩이 어우러진 곡으로 솔로들을 위한 상큼한 봄 노래이다.<br><br>

        음원 발매 전부터 'IU'의 적극적인 홍보로 화제를 불러 모았던 신인 보이그룹 'HIGH4(하이포)'는 지난 2007년 아이유를 발굴한 최갑원 프로듀서에 의해 발탁, 멤버들 가각 약 2~7년의 시간 동안 꾸준히 실력을 쌓아온 남성 그룹으로 아이유를 비롯해 엠블랙 천둥, 피에스타 혜미와 함께 그들만의 애칭인 '쭈구리' 멤버였던 김성구(리더,보컬)와 함께 백명한(보컬), 알렉스(랩), 임영준(랩) 4명으로 구성되어 있으며 멤버들이 직접 작사, 작곡이 가능하며 풍부한 가창력을 바탕으로 강하면서도 섬세한 감성이 돋보이는 보컬 라인과 파워풀하면서도 정확한 메시지를 전달하는 랩퍼 라인이 조화를 이룬 팀이다. 'HIGH4'는 이번 "봄 사랑 벚꽃 말고" 음원 이후 5월 말에 HIGH4만의 이름으로 정규 미니앨범을 발매 예정으로 앞으로의 그들의 행보를 기대해보자.<br><br>

        TRACK LIST<br><br>

        01. "봄 사랑 벚꽃 말고" (작곡:이종훈, 이채규 / 작사: IU(아이유) / 편곡:이종훈, 이채규) - 리얼 악기 사운드로 완성된 펑키한 리듬과 중독성 강한 멜로디로 상쾌한 봄의 청량감을 느낄 수 있는 곡으로, 외로운 솔로들의 마음을 위로하는 따뜻한 봄 노래이다.
        02. "봄 사랑 벚꽃말고 (Inst.)"</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/ouR4nn1G9r4"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>봄 사랑 벚꽃말고&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이종훈,이채규</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이종훈,이채규</td>
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




