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
        <a href="https://www.melon.com/album/detail.htm?albumId=10388744"><img src="images/%EB%A7%88%EC%9D%8C%EC%9D%84%EB%93%9C%EB%A0%A4%EC%9A%94%20%EC%BB%A4%EB%B2%84.png"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">마음을 드려요</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>가수 아이유가 tvN ‘사랑의 불시착’ OST의 대미를 장식한다.<br><br>
        tvN 토 일 드라마 ‘사랑의 불시착’(극본 박지은 / 연출 이정효)의 열한 번째 OST인 아이유의 ‘마음을 드려요’가 공개됐다. ‘마음을 드려요’는 리정혁(현빈 분)과 윤세리(손예진분)의 가슴 시리고 애틋한 소원과 고백이 담겨있는 곡으로, 지난 13회에서 리정혁이 윤세리에게 반지를 건네며 사랑을 약속하는 신에 삽입돼 화제를 모은 바 있다.
        그간 자신의 앨범은 물론이고 다양한 음악 작업을 통해 ‘독보적 음원 여제’로서의 입지를 공고히 해온 아이유는 이번 ‘사랑의 불시착’ 마지막 OST 가창을 맡아 또 하나의 히트곡 탄생을 예고했다.<br><br>
        ‘사랑의 불시착’이 최고 시청률을 경신하며 폭발적인 반응을 얻고 있고, 크러쉬의 ‘둘만의 세상으로 가’, 백예린의 ‘다시 난, 여기’ 등 명품 OST들이 음원차트를 휩쓰는 등 호평을 얻고 있어 이번 아이유의 ‘마음을 드려요’ 역시 좋은 성적을 거둘 것으로 기대된다.<br><br>
        ‘마음을 드려요’는 감정을 강요하지 않고 멋부리지 않은 담백하고 꾸밈없는 멜로디, 진심을 다한 노랫말에 아이유의 목소리가 더해져 더욱 깊은 감동을 선사하는 작품이다. 아이유는 목소리뿐 아니라 미세한 숨소리와 떨림까지 곡에 완벽하게 담아내 듣는 이들의 가슴을 울린다. 또한 잔잔하고 담담하게 시작되는 1절, 스트링의 풍성함이 더해진 2절의 후렴구와 클라이막스 후 등장하는 무반주 속 오롯이 드러난 아이유의 목소리는 뭉클함을 배가시킨다.
        <br><br>
        속삭이듯 노래하는 아이유의 보컬은 드라마 마니아들의 몰입도를 높인다. ‘사랑의 불시착’ 음악을 총괄하고 있는 남혜승 음악감독은 “가장 설레고 아름다운 순간에 눈물 나는 뭉클함을 느낄 수 있는 노래를 만들기 위해 오랫동안 고심했다.”고 곡 탄생 배경을 설명했다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/MYWObMpepKk"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>마음을 드려요&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 남혜승, 박진호</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 남혜승, 박진호</td>
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

