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
        width: 900px;
        margin-left: 5%;
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
        <a href="https://www.netflix.com/kr/title/81044884"><img src="images/%ED%8E%98%EB%A5%B4%EC%86%8C%EB%82%98%20%ED%94%84%EB%A1%9C%ED%95%842.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">IU / 은 / 한나 / 지은</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>
            재능과 개성이 넘치는 4명의 감독, 그들이 만든 4편의 작품. 그 속에서 1명의 뮤즈가 4개의 페르소나로 변신한다. 때론 귀엽게 때론 묘하게, 삶과 사랑을 이야기한다.<br><br>
            
            러브 세트  [19분]<br>
            
            긴장감 넘치는 테니스 경기. 맹렬히 공을 쫓는 두 여자의 격한 비명이 코트를 메운다. 그리고 이를 지켜보는 두 남자. 무엇이 걸린 게임이기에 이토록 절실한 걸까.<br><br>

            썩지않게 아주 오래  [27분]<br>
            말없이 사라졌다 나타난 여자, 그 이유를 알고 싶은 남자. 사랑한다는 이유로, 남자는 진실을 요구한다. 하지만 여자에게는 남자의 마음이 진심이라는 증거가 필요하다.<br><br>

            키스가 죄 [23분]<br>
            한나는 온종일 행방이 묘연한 친구를 찾아 나선다. 간신히 만난 친구의 목덜미에는, 선명한 키스의 흔적. 날카로운 첫 키스의 경험으로, 두 여자는 묘한 상황에 휘말린다.<br><br>

            밤을 걷다  [20분]<br>
            조용한 밤, 산책에 나선 남녀가 대화를 나눈다. 함께한 추억, 궁금했던 일들과 기억나지 않는 꿈에 대해서. 그리고 여자는 남자가 알지 못했던 이야기를 들려준다.<br>
        </p>
    </div>
    
    <div class="video">
        <h3>TEASER</h3>
        <iframe src="https://youtube.com/embed/ITH6ttdXBqk"></iframe>
        
        <h3>INTERVIEW</h3>
        <iframe src="https://youtube.com/embed/0fdaqM5ktYM"></iframe>
        <iframe src="https://youtube.com/embed/Rj20LRd00VY"></iframe>
        <iframe src="https://youtube.com/embed/myKubtAdEXs"></iframe>
        
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

