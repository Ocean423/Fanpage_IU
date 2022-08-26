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
        background-image: url(images/%EA%B7%B8%EB%9D%BC%EB%8D%B0%EC%9D%B4%EC%85%9812.png);
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
        <a href="http://program.tving.com/tvn/mymister/"><img src="images/%EB%82%98%EC%9D%98%EC%95%84%EC%A0%80%EC%94%A8%20%ED%94%84%EB%A1%9C%ED%95%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">이지안</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>드라마 속 주인공 남자들은 전부 능력자다.<br><br>

        의사 변호사 사업가와 같은<br>
        선망의 직업을 갖고 있던가,<br>
        기억력 추리력 같은<br>
        탁월한 지적 능력을 갖고 있던가,<br>
        아예 현실세계의 어떤 구애도 받지 않는<br>
        외계에서 온 사람이던가,<br>
        어떤 식으로든 능력자다.<br><br>

        그런데!<br>
        우리 주변에 실제 그런 능력자들이 있었던가.<br>
        있었다고 한들,<br>
        그런 능력자들 덕분에<br>
        감동했던 적이 있었던가.<br><br>

        사람에게 감동하고 싶다.<br>
        요란하지는 않지만,<br>
        인간의 근원에 깊게 뿌리 닿아 있는 사람들.<br><br>

        여기 아저씨가 있다.<br>
        우러러 볼만한 경력도, 부러워할 만한 능력도 없다.<br>
        그저 순리대로 살아갈 뿐이다.<br><br>

        그러나 그속엔 아홉살 소년의 순수성이 있고,<br>
        타성에 물들지 않은 날카로움도 있다.<br>
        인간에 대한 본능적인 따뜻함과 우직함도 있다.<br>
        우리가 잊고 있었던 ‘인간의 매력’을 보여주는 아저씨.<br>
        그를 보면, 맑은 물에 눈과 귀를 씻은 느낌이 든다.<br><br>

        길거리에 넘쳐나는 흔하디흔한 아저씨들.<br>
        허릅하고 한심하게 보이던 그들이,<br>
        사랑스러워 죽을 것이다.<br>
        눈물 나게 낄낄대며 보다가, 끝내 펑펑 울 것이다.</p>
    </div>
    
    <div class="albumInfo">
        <h3>CAST</h3>
        <p>이지안 (21세) <br>
        "내가 어떤 앤지 알고도 나랑 친할 사람이 있을까?"<br><br>

        차가운 현실을 온몸으로 버티는 거친 여자.<br><br>

        여섯 살에 병든 할머니와 단둘이 남겨졌다. 꿈, 계획, 희망 같은 단어는 쓰레기통에 버린 지 오래. 버는 족족 사채 빚 갚는다. 그래서 하루하루 닥치는 대로 일하고, 닥치는 대로 먹고, 닥치는 대로 산다.<br><br>

        일생에 지안을 도와줬던 사람이 없었던 것은 아니다. 딱 네 번, 그 뒤로 다들 도망갔다. ‘선량해 보이고 싶은 욕망을 채우기 위해 나의 불행함을 이용하려는 인간들.’ 세상에 대한, 인간에 대한 냉소와 불신만이 남은 차가운 아이.<br><br>

        어느 날 사채업자로부터 벗어날 좋은 기회를 잡았다. 죄책감 따위는 없다. 그래서 아저씨 박동훈에게 접근하는데... 이 아저씨, 깊이 알면 알 수록 더 궁금하다.<br><br>

        ‘아무도 박동훈 건들지마! 다 죽여버리기 전에! 망가뜨려도 내가 망가뜨리고, 살려도 내가 살릴거야.’ </p>
    </div>
    
    <div class="video">
        <h3>TEASER</h3>
        
        <iframe src="https://youtube.com/embed/3UAgiKj3_nA"></iframe>
        <iframe src="https://youtube.com/embed/5_xO4xNw7DM"></iframe>
        
        <h3>HIGHLIGHT</h3>
        <iframe src="https://youtube.com/embed/TwZ42Jrpq4k"></iframe>
        
        <h3>MAKING</h3>
        <iframe src="https://youtube.com/embed/MoWAgNBR_pY"></iframe>
        <iframe src="https://youtube.com/embed/8qfqsshYWYQ"></iframe>
        
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

