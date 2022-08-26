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
        <a href="https://www.melon.com/album/detail.htm?albumId=10096855"><img src="images/%EA%BD%83%EA%B0%88%ED%94%BC%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">꽃갈피 둘</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>시간이 흘러도 바래지 않는, 소박하고 아름다운 추억의 흔적<br>
            '아이유' 두 번째 리메이크 앨범 [꽃갈피 둘]<br><br>

            오래된 서재에서 먼지를 털어내고 꺼내든 책 한 권. 한 장씩 책장을 넘기다 책갈피처럼 끼워진 빛바랜 네 잎 클로버나 꽃잎들을 발견할 때가 있다. 오래전 누군가가 마음을 담아 선물했을 소박하고 아름다운 흔적. 또 그 페이지마다 밑줄이 그어져있는 기억할 만한 글귀들. 이러한 '꽃갈피'는 요즘은 점점 잊혀 가고 있는 예전 아날로그 세대의 감성과 낭만을 보여주는 청년 문화의 상징 중 하나일지도 모른다.<br><br>

            '아이유'의 두 번째 리메이크 앨범인 [꽃갈피 둘]은 지난 2014년 첫 선을 보여 대중과 평단의 뜨거운 호평을 이끌어낸 리메이크 음반 [꽃갈피]의 연장선에 놓인 작품으로, 원곡에 담긴 아날로그 감성과 '아이유' 특유의 서정성이 마주한 스페셜 미니음반이다. 지난 [꽃갈피] 앨범과 마찬가지로 아이유 본인이 평소 아껴왔던 '꽃갈피' 같은 이전 세대의 음악들을 직접 선곡하였으며, 정재일, 고태영, 홍소진, 강이채, 적재, 임현제(혁오), 김성모, 정성하 등 폭넓은 세대와 장르의 뮤지션들과 협업하여, 원곡 고유의 정서 위에 아이유의 색채를 덧입히는 작업에 어느 때보다 섬세한 노력을 기울였다.<br><br>

            세대를 관통하는 추억의 노래들을 아이유의 순수한 음색으로 재해석해낸 [꽃갈피 둘]은, 시간이 흘러도 바래지 않는, 소박하고 아름다운 순간들을 되살려, 다시금 세대와 세대를 잇고 그 속에 진한 공감과 울림을 선사하며, '꽃갈피'로써 추억의 선물, 그 자체가 되길 소망한다.<br><br>

            1. 가을 아침<br>
            原曲: 양희은 / 작사, 작곡: 이병우 / 편곡: 정성하<br><br>

            " 이 곡은 아침이슬 20주년 기념 음반인 [양희은 1991]에 수록된 곡입니다. 당시 비엔나에서 유학 중이시던 이병우 감독님과 뉴욕에 계시던 양희은 선배님께서 동시 녹음으로 하루 만에 9곡 녹음을 끝낸 음반이라고 선배님께 전해 들었습니다.<br>
            제가 음악적으로 존경하는 두 분의 어린 시절 풋풋함과 청량함을 느낄 수 있어 정말 많이 들었던 앨범인데 그중에서도 제가 가장 좋아하는 곡입니다. 구성이 간단한 곡인데도 기타 연주와 목소리, 노랫말이 빈틈 없이 완벽하게 어우러져 제목 그대로 가을 아침처럼 아름답습니다. "<br><br>

            2. 비밀의 화원<br>
            原曲: 이상은 / 작사, 작곡: 이상은 / 편곡: 강이채<br><br>

            " [꽃갈피 둘]에서 제가 가장 좋아하는 가사입니다. 이상은 선배님의 간결하고도 따뜻한 문장들을 좋아합니다. 특히 이 곡은 '그냥 나'로서, 그러다가 '어른'으로서, 또 '사랑에 빠진 사람'으로서, 자유롭게 오가며 이야기하는 가사가 정말 매력적이라고 생각합니다.<br>
            '어제의 일들은 잊어, 누구나 조금씩은 틀려'라는 가사에 많이 공감하고 위로받았습니다. "<br><br>

            3. 잠 못 드는 밤 비는 내리고<br>
            原曲: 김건모 / 작사, 작곡: 김창환, 박광현 / 편곡: 홍소진, 적재<br><br>

            " 언젠가 꼭 한 번 리메이크해 보고 싶었던 곡입니다. 누가 먼저 할까 봐 마음이 급해서, 지난봄에 발매된 제 정규 4집 [Palette]에 이 곡 한 곡만 리메이크 곡으로 넣을까 고민했을 정도로 욕심나는 곡이었습니다.
            김건모 선배님의 음역대에 대해서는 익히 들어 어느 정도 각오를 하고 있었지만, 녹음하는 내내 '어라 이럴 리가 없는데' 하며 몇 번이나 놀랐습니다. 아마 [꽃갈피 둘]에서 마니아 팬을 제일 많이 보유한 곡이 되지 않을까 조심스럽게 예상해 봅니다☆ "<br><br>

            4. 어젯밤 이야기<br>
            原曲: 소방차 / 작사: 박건호 / 작곡: 이호준 / 편곡: 임현제, 김성모<br><br>

            " 너무나 유명하고 큰 사랑을 받았던 곡이라 리메이크하기에 부담이 있었지만, 또 그만큼 너무나 매력적인 곡이라 용기 내어 싣게 되었습니다.<br>
            코드 진행부터 가사의 스토리, 메인 리프까지. 어디 하나 치우치지 않고 정말 균형 있고 탄탄해서 들을 때마다 감탄하는 곡이고, 이번 앨범 중 가장 즐겁게 작업한 곡이기도 합니다. "<br><br>

            5. 개여울<br>
            原曲: 김정희, 정미조 / 작사: 김소월 / 작곡: 이희목 / 편곡: 정재일<br><br>

            " 정말 많은 선배님들의 목소리로 리메이크 된 곡입니다. 여러 버전의 "개여울" 중 2016년 발매된 정미조 선생님의 앨범 [37년]에 수록된 "개여울"을 가장 많이 참고했습니다. 제가 아는 어떤 노래에도 이 곡 가사에 등장하는 '떠난 이'만큼 밉고 무책임한 사람은 없습니다. 그런 사람을 그리워하는 곡이기에, '한'과 '처절한 원망'이 아무런 방어도 포장도 없이 그대로 와 마음에 꽂히는 곡입니다.
            선생님께서 처음으로 부르셨던 그 예전의 "개여울"과 몇 십 년 후 다시 부르신 최근의 "개여울"은, 그 음성에 담긴 감정부터 이야기까지 확연히 다르게 다가옵니다. 기회가 된다면 저도 오랜 시간 후에 이 곡을 꼭 다시 불러보고 싶습니다. "<br><br>

            6. 매일 그대와<br>
            原曲: 들국화 / 작사, 작곡: 최성원 / 편곡: 고태영<br><br>

            " 긴 설명이 필요 없다고 생각합니다. 매일 그대와 최고! "</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/cxcxskPKtiI"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>가을 아침</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 양희은</td>
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
                <td>Arranged by 정성하</td>
            </tr>
            
            <tr>
                <td>2</td>
                <th>비밀의 화원</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 이상은</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이상은</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 이상은</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 강이채</td>
            </tr>
            <tr>
                <td>3</td>
                <th>잠 못 드는 밤 비는 내리고&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 김건모</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김창환, 박광현</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김창환, 박광현</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 홍소진, 적재</td>
            </tr>
            
            <tr>
                <td>4</td>
                <th>어젯밤 이야기</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 소방차</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이호준</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 박건호</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 임현제, 김성모</td>
            </tr>
            
            <tr>
                <td>5</td>
                <th>개여울</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 김정희, 정미조</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이희목 </td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김소월</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 정재일</td>
            </tr>
            
            <tr>
                <td>6</td>
                <th>매일 그대와</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 들국화</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 최성원  </td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 최성원 </td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 고태영</td>
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







