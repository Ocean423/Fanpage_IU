<!DOCTYPE html>
<html>
<head>
    <title>Activity</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
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
    .img-1{
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-image: url(images/%EB%B8%94%EB%A3%A8%EB%B0%8Dw4.jpg);
        min-height: 400px;
    }
    .img-2{
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-image: url(images/%EB%8D%B8%EB%A3%A8%EB%82%98w1.jpg);
        min-height: 450px;
    }
/*    앨범 hover style*/
    .albumcover {
        display: block;
        width: 100%;
        height: auto;
    }
    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 10%;
        right: 0;
        height: 100%;
        width: 80%;
        opacity: 0;
        transition: .5s ease;
        background-color: white;
        cursor:pointer
    }
    .album {
        position: relative;
        width: 50%;
    }
    .album:hover .overlay {
        opacity: 0.7;
    }
    .albumText {
        color: black;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .albumFrame {
        margin-left: 40px;
        margin-right: 40px;
    }
    .albumFrame img {
        margin-bottom: 5px;
        margin-top: 5px;
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
                <a href="javascript:void(0)" onclick="scrolling(event,'#discography')" class="w3-bar-item w3-button">DISCOGRAPHY</a>
                <a href="javascript:void(0)" onclick="scrolling(event,'#filmography')" class="w3-bar-item w3-button">FILMOGRAPHY</a>
            </div>
        </div>
        <a href="Gallery.php" class="w3-bar-item w3-button w3-padding-large">GALLERY</a>
        <a href="community.php" class="w3-bar-item w3-button w3-padding-large">COUMMUNITY</a>
        <a href="Shop.php" class="w3-bar-item w3-button w3-padding-large">SHOP</a>
      
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
    
<!--첫 번째 패럴랙스 배경 -->
<div class="img-1 w3-display-container " id="discography">
    <div class="w3-display-left" style="white-space: nowrap">
        <span class="w3-padding-large w3-text-white w3-black w3-opacity w3-wide w3-xxlarge" >DISCOGRAPHY</span>
    </div>
</div>
    
<!-- Container (Discography Section) -->
<div class="w3-center w3-black w3-container w3-padding-64" id="discography">
    <h3 class="w3-wide w3-center">DISCOGRAPHY</h3>
    
    <div class="albumFrame w3-row-padding w3-center">
        <div class="album w3-col m3">
            <img src="images/%EC%97%90%EC%9E%87%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%;"  class="albumCover">
            <a href="disco_eight.php">
                <div class="overlay">
                    <div class="albumText" style="">에잇(Feat.SUGA)</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%A7%88%EC%9D%8C%EC%9D%84%EB%93%9C%EB%A0%A4%EC%9A%94%20%EC%BB%A4%EB%B2%84.png" style="width: 80%" class="albumCover">
            <a href="disco_ma.php">
                <div class="overlay">
                    <div class="albumText">마음을 드려요</div>
                </div>
            </a>
        </div>
        
        <div class="album w3-col m3">
            <img src="images/%EC%B2%AB%20%EA%B2%A8%EC%9A%B8%EC%9D%B4%EB%8B%88%EA%B9%8C%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_winter.php">
                <div class="overlay">
                    <div class="albumText">첫 겨울이니까(with.성시경)</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%9F%AC%EB%B8%8C%ED%8F%AC%EC%97%A0%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_poem.php">
                <div class="overlay">
                    <div class="albumText"><p>Blueming</p><p>Love Poem</p></div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EC%82%90%EC%82%90%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_bibi.php">
                <div class="overlay">
                    <div class="albumText">삐삐</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EA%BD%83%EA%B0%88%ED%94%BC%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_f2.php">
                <div class="overlay">
                    <div class="albumText"><p>가을 아침</p><p>잠 못드는 밤 비는 내리고</p></div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%ED%8C%94%EB%A0%88%ED%8A%B8%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_palette.php">
                <div class="overlay">
                    <div class="albumText">Palette(Feat.GD)</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EC%82%AC%EB%9E%91%EC%9D%B4%20%EC%9E%98%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_sa.php">
                <div class="overlay">
                    <div class="albumText">사랑이 잘(with.오혁)</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%B0%A4%ED%8E%B8%EC%A7%80%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_bam.php">
                <div class="overlay">
                    <div class="albumText">밤편지</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EC%8A%A4%EB%AC%BC%EC%85%8B%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_23.php">
                <div class="overlay">
                    <div class="albumText">스물 셋</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%A7%88%EC%9D%8C%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%"  class="albumCover">
            <a href="disco_maum.php">
                <div class="overlay">
                    <div class="albumText">마음</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EC%95%A0%ED%83%80%EB%8A%94%20%EB%A7%88%EC%9D%8C%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_et.php">
                <div class="overlay">
                    <div class="albumText">애타는 마음(with.울랄라 세션)</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EA%BD%83%EA%B0%88%ED%94%BC1%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_f1.php">
                <div class="overlay">
                    <div class="albumText">나의 옛날이야기</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%B4%84%EC%82%AC%EB%9E%91%EB%B2%9A%EA%BD%83%EB%A7%90%EA%B3%A0.jpg" style="width: 80%" class="albumCover">
            <a href="disco_bom.php">
                <div class="overlay">
                    <div class="albumText">봄 사랑 벚꽃 말고(with.하이포(HIGH4))</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EA%B8%88%EC%9A%94%EC%9D%BC%EC%97%90%EB%A7%8C%EB%82%98%EC%9A%94%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_fri.php">
                <div class="overlay">
                    <div class="albumText">금요일에 만나요</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%B6%84%ED%99%8D%EC%8B%A0%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_pink.php">
                <div class="overlay">
                    <div class="albumText">분홍신</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%ED%95%98%EB%A3%A8%EB%81%9D.jpg" style="width: 80%" class="albumCover">
            <a href="disco_haru.php">
                <div class="overlay">
                    <div class="albumText">하루끝</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%84%88%EB%9E%91%EB%82%98%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_you.php">
                <div class="overlay">
                    <div class="albumText">너랑 나</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EC%96%BC%EC%9D%8C%EA%BD%83%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_ice.php">
                <div class="overlay">
                    <div class="albumText">얼음꽃(with.김연아)</div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%82%B4%EC%86%90%EC%9D%84%EC%9E%A1%EC%95%84%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="disco_hand.php">
                <div class="overlay">
                    <div class="albumText">내 손을 잡아</div>
                </div>
            </a>
        </div>
        
    </div>
</div>

<!-- 두 번째 패럴랙스 배경 -->
<div class="img-2 w3-display-container" id="filmography">
    <div class="w3-display-right" style="white-space: nowrap">
        <span class="w3-padding-large w3-text-black w3-wide w3-xxlarge" >FILMOGRAPHY</span>
    </div>
</div>   

<!-- Container (Filmography Section) -->
<div class="w3-center w3-black w3-container w3-padding-64" id="discography">
    <h3 class="w3-wide w3-center">FILMOGRAPHY</h3>
    
    <div class="albumFrame w3-row-padding w3-center">
        
        <div class="album w3-col m3">
            <img src="images/%EB%8D%B8%EB%A3%A8%EB%82%98%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="filmo_del.php">
                <div class="overlay">
                    <div class="albumText"><p>호텔델루나</p><p>장만월</p></div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%82%98%EC%9D%98%EC%95%84%EC%A0%80%EC%94%A8%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="filmo_ah.php">
                <div class="overlay">
                    <div class="albumText"><p>나의아저씨</p><p>이지안</p></div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%ED%8E%98%EB%A5%B4%EC%86%8C%EB%82%98%20%EC%BB%A4%EB%B2%84.png" style="width: 80%" class="albumCover">
            <a href="filmo_persona.php">
                <div class="overlay">
                    <div class="albumText"><p>페르소나</p><p>IU/은/한나/지은</p></div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%8B%AC%EC%9D%98%EC%97%B0%EC%9D%B8%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="filmo_moon.php">
                <div class="overlay">
                    <div class="albumText"><p>달의연인-보보경심 려</p><p>해수</p></div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%ED%94%84%EB%A1%9C%EB%93%80%EC%82%AC%20%EC%BB%A4%EB%B2%841.jpg" style="width: 80%" class="albumCover">
            <a href="filmo_pd.php">
                <div class="overlay">
                    <div class="albumText"><p>프로듀사</p><p>신디</p></div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EC%98%88%EC%81%9C%EB%82%A8%EC%9E%90%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="filmo_beauty.php">
                <div class="overlay">
                    <div class="albumText"><p>예쁜남자</p><p>김보통</p></div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EC%B5%9C%EA%B3%A0%EB%8B%A4%EC%9D%B4%EC%88%9C%EC%8B%A0%20%EC%BB%A4%EB%B2%84.jpg" style="width: 80%" class="albumCover">
            <a href="filmo_sunsin.php">
                <div class="overlay">
                    <div class="albumText"><p>최고다 이순신</p><p>이순신</p></div>
                </div>
            </a>
        </div>
        <div class="album w3-col m3">
            <img src="images/%EB%93%9C%EB%A6%BC%ED%95%98%EC%9D%B4%20%EC%A0%95%EC%82%AC%EA%B0%81%ED%98%95.jpg" style="width: 80%" class="albumCover">
            <a href="filmo_dream.php">
                <div class="overlay">
                    <div class="albumText"><p>드림하이</p><p>김필숙</p></div>
                </div>
            </a>
        </div>
    
    </div>
</div>
    
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="#discography" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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





