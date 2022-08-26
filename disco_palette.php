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
        background-image: url(images/%EA%B7%B8%EB%9D%BC%EB%8D%B0%EC%9D%B4%EC%85%9810.jpg);
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
        <a href="https://www.melon.com/album/detail.htm?albumId=10056666"><img src="images/%ED%8C%94%EB%A0%88%ED%8A%B8%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">Palette</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>작은 순간순간을 예쁜 물감으로 만들어, '아이유'의 '이 지금'을 빼곡히 채워내다.<br>
        '아이유(IU)' 정규4집 [Palette] 전격 발매!<br><br>

        '아이유(IU)'의 네 번째 정규앨범 [Palette]가 드디어 공개됐다.<br><br>

        '아이유'는 지난달 24일 발표한 첫 선공개곡 "밤편지"를 시작으로 동갑내기 뮤지션 '오혁'과 함께 한 두 번째 선공개곡 "사랑이 잘"까지, 연달아 '퍼펙트 올킬' 기록을 세우며 그 이름값을 톡톡히 지켜 냈다.<br><br>

        '아이유'가 1년 반 만에 꺼내 놓은 신보이자 정규앨범으로는 3년 여만인 정규 4집 앨범 [Palette]는, 미리 발표된 두 선공개곡을 통해 짐작할 수 있듯이 특정 장르나 스타일에 제한하지 않고 다채로운 음악색과 이야기를 한데 담아낸, 앨범명 의미 그대로의 '팔레트'와 같은 앨범이다.<br><br>

        '아이유'의 정규4집 [Palette]는 '아이유' 본인이 직접 프로듀싱을 맡아 긴 호흡으로 공들여 작업한 만큼 가수 '아이유'의 또 다른 변신과 프로듀서 '아이유'의 음악적 성장을 새롭게 발견할 수 있게 한다. 또한, 그는 이번 앨범에서 '이병우', '손성제', 'G-DRAGON', '선우정아', '오혁', '샘 김' 등 세대와 장르를 아우르는 최고의 뮤지션들과 만나 음악적 스펙트럼을 넓히는 동시에, 특유의 섬세한 음색과 노랫말로 모든 넘버를 '아이유' 만의 감성으로 색칠하며, 도무지 그 음악적 한계와 컬러를 단정지을 수 없게 한다.<br><br>

        "내가 머릿속으로 그렸던 꿈이 현실이 되어 눈 앞에 펼쳐지는 순간<br>
        저의 팔레트는 또 한 칸 새로운 물감으로 채워집니다…<br>
        지금 이 순간도 언젠가 내가 정성스럽게 그렸었던 꿈이죠<br>
        오늘 이 순간을 예쁜 물감으로 만들어 나는 또 꿈을 그릴 겁니다"<br>
        - 2016 '아이유' 콘서트 '하나 둘 셋 넷'-<br><br>

        데뷔 10년차 아티스트 혹은 스물다섯 살 '이지은'의 작은 순간순간이 예쁜 물감이 되어 차곡히 채워진 '아이유'의 '이 지금', 새하얀 '팔레트'에 그녀가 새롭게 배합해 낸 이 음악, 이 물감으로 어떤 그림을 완성할지는 오랜 시간 그녀의 새 앨범을 기다려온 청중의 몫으로 남겨두고자 한다.<br><br>

        [TRACK REVIEW]<br><br>

        01. 이 지금<br>
        Composed by 김제휘 / Lyrics by 아이유 / Arranged by 김제휘<br>
        화려한 코드진행이 돋보이는 기분 좋은 팝재즈 트랙으로 "밤편지", "마음" 등 수 차례 '아이유'와 멋진 호흡을 보여준 '김제휘'가 작곡을, '아이유'가 작사를 맡았다. 깜짝 놀랄 만큼 빛이 나고 아름다운 건 다른 어느 것도 아닌 바로 지금, 여기, 우리라는 메시지가 사랑스럽게 다가오는 곡이다.<br><br>

        02. 팔레트 (Feat. G-DRAGON) *TITLE<br>
        Composed by 아이유 / Lyrics by 아이유 / Arranged by 이종훈 / Rap Making by G-DRAGON<br>
        '아이유'가 기존에 시도해보지 않은 장르의 감각적이면서도 포근한 신스팝 R&amp;B 트랙이다. 2년 전에 발매했던 "스물셋"과는 다른 듯, 또 이어지는 '아이유' 본인에 대한 이야기를 차분히 담아내고 있다. "스물셋"에서는 동시에 함께 존재하는 전혀 다른 이면과 그 혼란스러움을 솔직하고 대담하게 풀어놨다면 이번에는 헷갈리지 않고 본인이 좋아하는 것을 또박또박 짚어내며 "이제 날 조금 알 것 같다"고 이야기하는 '아이유'의 여유가 돋보인다. 더욱이 'G-DRAGON'의 피쳐링으로 이 이야기는 단순히 '아이유' 개인만의 것이 아닌 스물다섯이라는 나이, 또는 청춘이 가지는 그 아름다움과 찬란함으로 주제가 확장된다. 진솔하면서도 날이 서지 않은 다정한 메시지가 부드러운 신스소리와 어우러져 살랑거린다.<br><br>

        03. 이런 엔딩<br>
        Composed by 샘 김 / Lyrics by 아이유 / Arranged by 이종훈<br>
        빈티지한 피아노 소리와 서정적인 오케스트라 선율이 완벽한 하모니를 자랑하는 R&amp;B 발라드 트랙이다. 감성과 감각을 동시에 표현해내는 천재 아티스트 '샘 김'의 곡과 '아이유'의 가사와 보컬이 만나 전혀 새로운 색깔을 만들어낸다. 이별을 겪은 남녀라면 쉽게 공감할 만한, 사랑에 있어 가장 슬픈 이별의 순간을 둘이 만든 영화의 엔딩씬으로 빗대어 가사로 풀어낸 곡이다.<br><br>

        04. 사랑이 잘 (With 오혁)<br>
        Composed by 이종훈, 아이유, 오혁 / Lyrics by 아이유, 오혁 / Arranged by 이종훈<br>
        '아이유'와 '오혁'의 공식적인 첫 콜라보레이션으로 정규4집의 두 번째 선공개곡으로 낙점, 두 아티스트의 색다른 매력과 독특한 케미로 발매 전부터 대중의 큰 관심을 받았다. 미니멀한 악기 구성의 R&amp;B 넘버인 이 곡에서 '아이유'와 '오혁'은, 직접 작사, 작곡에 참여하였고, 현실적이면서도 감각적인 가사와 멜로디를 주고 받으며 권태기 남녀의 갈등을 긴장감 있게 표현해 냈으며, Track Producer로는 데뷔곡 "미아"부터 "봄, 사랑, 벚꽃 말고", "레옹", "스물셋" 등을 함께해온 작곡가 '이종훈'이 참여해 곡의 완성도를 더했다.<br><br>

        05. 잼잼<br>
        Composed by 선우정아 / Lyrics by 선우정아, 아이유 / Arranged by 선우정아, 윤석철<br>
        농담을 건네듯 재기 발랄한 사운드의 일렉트로닉 신스팝 트랙이다. "봄처녀", "순이", "비온다" 등 색깔이 뚜렷한 음악으로 모든 뮤지션들이 탐내는 매력적인 아티스트 '선우정아'가 작곡가로 나섰고 '아이유'와 '선우정아'가 함께 글을 작업했다. 사랑에 대한 냉소적이고도 사실은 애절한 고찰이 눈길을 끄는 곡이다.<br><br>

        06. Black Out<br>
        Composed by 이종훈 / Lyrics by 아이유 / Arranged by 이종훈<br>
        제목에서도 눈치 챌 수 있듯 술 냄새가 강하게 풍기는 인디팝 트랙이다. 장난스러운 베이스와 리듬과는 전혀 상반되는 진지한 기타 솔로가 아이러닉하면서도 매력적인 킬링 파트가 된다. 기본적으로는 헛소리인 듯하지만 모두들 각자 취했을 때를 생각해 보면.. '휴 더 하면 더 했지..'<br><br>

        07. 마침표<br>
        Composed by 손성제 / Lyrics by 아이유 / Arranged by 손성제<br>
        피아노, 스트링, 플룻, 클라리넷의 신선한 구성의 발라드 트랙이다. 처음부터 끝까지 정해진 BPM 없이 연주자와 보컬이 프리하게 곡을 끌고 나간다는 점 또한 눈에 띈다. 재즈신에서 이미 수준 높은 음악성으로 정평이 나 있는 섬세한 아티스트 '손성제'가 작곡가로 나섰다. 갑자기 뽑혀나간 사랑니 자리를 오래도록 앓듯, 아직 마음은 아프더라도 이제는 정말 마침표를 찍겠다는 다짐이, 그럼에도 누구 하나 울부짖지 않는 절제된 소리들이 더욱 서글프게 다가온다.<br><br>

        08. 밤편지<br>
        Composed by 김제휘, 김희원 / Lyrics by 아이유 / Arranged by 김제휘, 김희원<br>
        서정적인 기타 선율과 '아이유'의 목소리가 잘 어우러진 어쿠스틱 사운드의 포크 발라드로, 작곡에는 "마음"과 "나의 옛날 이야기" 등으로 이미 수 차례 '아이유'와 공동작업을 맡았던 작곡가 '김제휘'와 뉴페이스 '김희원'이, 작사에는 '아이유'가 직접 참여하여 또 한 번 멋진 호흡을 자랑했다. 지난달 정규앨범의 첫 번째 선공개곡으로 발표되어 '아이유 표 발라드' 특유의 섬세한 감성으로 오랜 시간 리스너들의 큰 사랑을 받아오고 있다.<br><br>

        09. 그렇게 사랑은<br>
        Composed by 이병우 / Lyrics by 이병우 / Arranged by 이병우<br>
        기타의 첫 3음만으로 아티스트 '이병우'의 내공을 들을 수 있는 클래식한 느낌의 발라드이다. 단지 기타 한 대와 목소리 하나로 5분 가까이 되는 러닝타임을 긴장감 있게 끌고 가는 두 아티스트의 대화가 근사하다. 실제 매번 원테이크로 서로 호흡하며 녹음한 노력이 그대로 전해진다. 이번 앨범에서는 유일하게 '아이유'가 작사에 참여하지 않은 곡으로 작곡, 작사, 연주에 모두 '이병우'가 나섰다.<br><br>

        10. 이름에게 *TITLE<br>
        Composed by 이종훈 / Lyrics by 아이유, 김이나 / Arranged by 이종훈, 홍소진 <br>
        길이와 구성 모두 이번 앨범에서 가장 큰 사이즈를 자랑하며 더블 타이틀곡으로 낙점이 된 이 곡은 흡사 '아이유'의 정규2집 1번 트랙 "비밀"이란 곡을 떠올리게 할 만큼 웅장한 사운드가 돋보이는 팝발라드 트랙이다. 우리나라 독보적인 스트링 편곡자 '박인영'의 지휘 아래 펼쳐지는 아름다운 스트링 선율과, '아이유'의 콘서트에서 늘 환상의 호흡을 보여주는, 이른바 '아이유밴드' 멤버들이 라이브로 공연하듯 합주하며 가감 없이 실력 발휘를 하였으며, 그 틈으로 단 하나의 코러스도 없이 그 거대한 사운드를 뚫고 나오는 '아이유'의 목소리까지. 그 한 줄기 목소리가 전하는 위로는 어디에라도 닿을 듯이 기세 있다. 작곡에는 '이종훈', 작사는 '아이유'와 '김이나'가 처음으로 공동 작업을 했다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/d9IxdwEFk1c"></iframe>
        <iframe src="https://youtube.com/embed/Rh5ok0ljrzA"></iframe>
        
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>이 지금</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김제휘</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 김제휘</td>
            </tr>
            
            <tr>
                <td>2</td>
                <th>팔레트 (Feat. G-DRAGON) &nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
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
                <td>Arranged by 이종훈</td>
            </tr>
            <tr>
                <td></td>
                <td>Rap Making by G-DRAGON</td>
            </tr>
            
            <tr>
                <td>3</td>
                <th>이런 엔딩</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 샘 김</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이종훈</td>
            </tr>
            
            <tr>
                <td>4</td>
                <th>사랑이 잘 (With 오혁)</th>
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
            
            <tr>
                <td>5</td>
                <th>잼잼</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 선우정아</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 선우정아, 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 선우정아, 윤석철</td>
            </tr>
            
            <tr>
                <td>6</td>
                <th>Black Out</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이종훈</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이종훈</td>
            </tr>
            
            <tr>
                <td>7</td>
                <th>마침표</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 손성제</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 손성제</td>
            </tr>
            
            <tr>
                <td>8</td>
                <th>밤편지</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김제휘, 김희원</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 김제휘, 김희원</td>
            </tr>
            
            <tr>
                <td>9</td>
                <th>그렇게 사랑은</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이병우</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 이병우</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이병우</td>
            </tr>
            
            <tr>
                <td>10</td>
                <th>이름에게 &nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이종훈</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유, 김이나</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이종훈, 홍소진</td>
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




