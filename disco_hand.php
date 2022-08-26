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
        <a href="https://www.melon.com/song/detail.htm?songId=3441132"><img src="images/%EB%82%B4%EC%86%90%EC%9D%84%EC%9E%A1%EC%95%84%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">내 손을 잡아</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>전 국민이 사랑하는 톱스타 독고진(차승원 역)과 전 국민이 욕하는 한물 간 아이돌 구애정(공효진 역)이 서로를 향한 마음으로 사랑하게 되는 과정을 그린 드라마로 두 배우의 찰떡궁합 코믹한 표정과 연기로 동시간대 1위와 시청률 20%를 기록했다. 동시에 2011년 당시 가장 내로라하는 가수들의 OST 참여로 화제를 모았다.<br><br>
 
        OST 첫 곡으로 발표되어 많은 사랑을 받은 검증된 최고의 보이스 '케이윌' 의 "리얼러브송"을 시작으로 발라드 여신으로 변신한 '지나' 의 "내 사람이라서", 전국민의 마음을 두근두근 설레게 만들며 휴대폰 벨소리를 바꾸게 한 '써니힐' 의 "두근두근", 첫 자작곡이라고는 믿기지 않을 정도의 놀라운 실력을 보여주며 싱어송라이터로서의 면모를 유감없이 발휘한 뮤지션 '아이유' 의 "내 손을 잡아", 수많은 경쟁자를 노래실력 하나만으로 이기고 이제는 최고의 가수로 성장한 '허각' 의 "나를 잊지 말아요" 등 우열을 가리기 힘든 어마어마한 스타들이 참여하여, 발표되는 즉시 온라인 음원 차트들을 점령하고, 음원차트 내에서 [최고의 사랑 OST] 끼리 서로 경합하는 진 풍경이 벌어지기도 했다. 특히, "나를 잊지 말아요" 는 발표되는 즉시 온라인 음원차트 상위권을 유지하며 인기를 끌었던 곡으로 그 해 코리아드라마 어워즈에서 OST상을 수상하기도 했다.

        국내 최정상급 아티스트들이 대거 참여하여 드라마 애청자뿐만 아니라 드라마를 보지 않은 대중들에게도 널리 사랑받는 곡들을 탄생시킨 OST 앨범이다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/BYQBs_4-MOo"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>내 손을 잡아&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
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
                <td>Arranged by 고릴라</td>
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

