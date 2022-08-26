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
    <div class="mainImg w3-content"  id="top">
        <a href="https://programs.sbs.co.kr/drama/scarletheart/main"><img src="images/%EB%8B%AC%EC%9D%98%EC%97%B0%EC%9D%B8%20%ED%94%84%EB%A1%9C%ED%95%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">해수</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>유연천리래상회 무연대면불상봉<br>
            有緣千里來相會 无緣對面不相逢<br>
            인연이 있으면 천리를 떨어져 있어도 만나고, <br>
            인연이 없으면 얼굴을 마주해도 만나지 못한다.<br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    - 한비자<br><br>

            달그림자가 태양을 검게 물들인 날. <br>
            상처 입은 짐승 같은 사내, 4황자(네번째 황자) ‘왕소’(이준기 분) 와 <br>
            21세기 여인 ‘고하진’(이지은 분)의 영혼이 <br>
            미끄러져 들어간 고려 소녀 ‘해수’가 천 년의 시공간을 초월해 만난다. <br><br>

            고려 건국 초. <br>
            태조의 과도한 혼인 정책이 부른 처절한 황위 다툼이 <br>
            곧 예고 되지만, 아직은 청춘을 만끽 중인 8명의 황자들은 <br>
            당찬 현대 여성의 영혼을 지닌 해수를 순식간에 주목한다. <br>
            황위를 둘러싼 치열한 궁중 암투 속에서 <br>
            해수와 황자들의 인연은 끈끈하게 이어지고...<br>
            해수는 역사에 기록된 황자들의 운명에 끼어들 것인가 고민한다. <br>
            누구보다 장차 피의 군주 ‘광종’이 될 4황자 왕소.<br>
            차라리 만나지 않았으면, 그토록 고통스럽게 서로를 <br>
            그리워하지 않았을 4황자와의 짙은 사랑이 <br>
            고려 황실을 배경으로 아름답게 펼쳐지는데...</p>
    </div>
    
    <div class="albumInfo">
        <h3>CAST</h3>
        <p>해 수(解樹)<br>

            검은 태양이 뜰 때, 운명의 상대를 찾아 영혼의 시간여행이 시작됐다-<br><br>

            10세기 고려 여인.<br>
            21세기 대한민국 ‘고하진’의 영혼이 수직 낙하한 신체의 주인이다. 8황자 ‘왕욱’의 아내 ‘해씨’의 육촌동생으로, 병든 언니의 말동무로 송악에 온 지 여러 해째.<br><br>

            나례(귀신 쫓는 행사)를 앞두고 목욕재계 하는 황자들을 훔쳐보려 황궁 세욕터에 숨어 들었다가 물에 빠져 정신을 잃는데... 해수의 진짜 영혼이 떠난 자리에 대신 들어선 사람이 바로 ‘고하진’ <br><br>

            연인과 베프에게 쌍으로 배신 당해 인생 막장에 몰린 고하진 역시, 심정지 일보 직전 상태에서 어떤 이유로 고려의 한복판, 황궁에서 해수의 외모를 뒤집어 쓴 채 죽었다 살아난 거다. <br>
            하진은 도저히 현대로 돌아갈 방법을 찾지 못하자 ‘해수’의 모습으로 고려에서 버텨내기로 마음 먹는데...<br>
            아무리 감추려 애를 써도 다른 고려 여인과는 확연히 차이나는 말과 행동, <br>
            독특한 현대적 사고 방식, 특유의 다정하고 씩씩한 기질...예전의 해수와는 사뭇 달라진 분위기 탓에 8황자 왕욱을 비롯한 황자들의 주목을 받게 되고, 그들과 다양한 사건 사고로 엮이게 된다. </p>
    </div>
    
    <div class="video">
        <h3>TEASER</h3>
        
        <iframe src="https://youtube.com/embed/uJwVyV9BM5w"></iframe>
        <iframe src="https://youtube.com/embed/FDmU_lRxmH8"></iframe>
        
        <h3>HIGHLIGHT</h3>
        <iframe src="https://youtube.com/embed/UuOCFTRsg7o"></iframe>
        
        <h3>MAKING</h3>
        <iframe src="https://youtube.com/embed/G1ipEXCzDmo"></iframe>
        <iframe src="https://youtube.com/embed/yPk7bG_EiYY"></iframe>
        
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

