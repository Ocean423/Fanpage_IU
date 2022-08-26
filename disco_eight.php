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
        background-image: url(images/%EA%B7%B8%EB%9D%BC%EB%8D%B0%EC%9D%B4%EC%85%981.jpg);
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
        <a href="https://www.melon.com/album/detail.htm?albumId=10426648"><img src="images/%EC%97%90%EC%9E%87%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">에잇</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>‘아이유(IU)’ 디지털 싱글 [에잇(Prod.&amp;Feat. SUGA of BTS)]<br>
            스물셋, 팔레트에 이은 나이 시리즈곡이다.<br><br>
            앞서 선보인 곡들이 내가 청자에게 직접적으로 말을 거는 수필 형식의 이야기였다면, ‘에잇’은 ‘너’ 라는 가상의 인물과 여러 비유를 사용해 나의 스물여덟을 고백한 짧은 소설과 같다.<br><br>
            나의 개인적인 정서로부터 오는 것인지 재해로 인해 함께 힘든 시기를 견디고 있는 사회 전반적인 분위기로부터 오는 것인지 혹은 둘 모두인지 확신할 수는 없지만, 나의 스물여덟은 반복되는 무력감과 무기력함, 그리고 ‘우리’가 슬프지 않았고 자유로울 수 있었던 ‘오렌지 섬’에 대한 그리움으로 기억될 것 같다.<br>
            --------------------------------------------------------------------------------------------------------------<br>
            ‘아이유(IU)’의 디지털 싱글 ‘에잇’이 공개됐다.<br>
            이번 디지털 싱글은 아날로그 감성과 트렌디한 사운드의 조화가 돋보이는 밴드 기반의 팝락으로,<br>
            스물여덟 동갑내기 뮤지션인 아이유와 방탄소년단 슈가의 독보적인 개성이 균형감 있게 어우러져 귀를 사로잡는다.<br><br>

            국내외 다양한 아티스트들과 협업을 통해 음악성을 인정받은 슈가가 공동 프로듀싱은 물론, 피처링을 맡아 곡의 완성도를 더욱 높였으며, 두 사람은 스물여덟 뮤지션으로서의 공감대를 토대로 특정 장르에 국한되지 않고 그들만의 시너지를 ‘에잇’에 녹여냈다.<br><br>

            기존의 섬세하고 감성적인 아이유 보컬과 달리, ‘에잇’은 보다 직설적인 창법과 중독성 있는 멜로디로 청량감을 더해 음악을 듣는 이로 하여금 곡 자체에 더욱 빠져들 수 있도록 한다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/TgOu00Mf3kI"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>에잇(Prod.&amp;Feat. SUGA of BTS)&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유, SUGA</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 아이유, SUGA, EL CAPITXN</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by SUGA, EL CAPITXN, 아이유</td>
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










