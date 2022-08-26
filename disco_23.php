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
        <a href="https://www.melon.com/album/detail.htm?albumId=2646282"><img src="images/%EC%8A%A4%EB%AC%BC%EC%85%8B%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">CHAT-SHIRE</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>한 떨기 스물셋 아이유의 사소한 현재. 그리고 당신의 지금. <br>
            아이유 네 번째 미니앨범 [CHAT-SHIRE] 발매!<br><br>

            모두가 기다려온 아이유의 네 번째 미니앨범 [CHAT-SHIRE]가 드디어 공개됐다.<br><br>

            지난 앨범들과 발표하는 자작곡들을 통해 섬세하면서 독특한 감성으로 수 많은 팬들의 공감대를 불러일으키며 뮤지션으로의 성장을 보여준 아이유는 이번 앨범을 통해 프로듀싱까지 참여 영역을 확대해 앨범 전반에 자신의 목소리를 빼곡하게 담아냈다.<br><br>

            이번 앨범 [CHAT-SHIRE]는 23살의 아이유에게 일어나고 보이는 일들과 사람들에게서 느낀 생각들을 소설 속 캐릭터에 대입해 표현한 총 7곡이 수록되어 있으며, 앨범명 [CHAT-SHIRE]는 각 곡의 캐릭터들이 살고 있는 주 (州), 스물 세 걸음이면 모두 돌아볼 수 있는 작은 사회를 의미한다.<br><br>

            아이유의 현재를 담은 [CHAT-SHIRE]를 통해 당신은 당신의 미래-현재-과거의 모습을 떠올리게 될 것이다. 아이유 자신의 경험과 생각들이 바탕이 된 이야기들이지만 우리 모두에게 일어날 수 있고 생각할 수 있는 일들. 그 모습을 [CHAT-SHIRE]안에서 함께 이야기하고 소통하길 원한다.  <br><br>

            - ALBUM REVIEW -<br><br>

            "새 신발" (Composed by 이종훈 / Lyrics by 아이유 / Arranged by 이종훈)<br><br>

            낡은 신발을 벗고 은 구두에 발을 집어 넣었습니다. 제 신발이기라도 한 듯 꼭 맞았습니다.<br><br>

            : CHAT-SHIRE 탐방을 재촉하는 길잡이 역할의 트랙. 오랜만의 앨범인 만큼 기다려준 팬들에게, 가장 아이유다운 익숙한 스트링과 목소리로 안부를 물음과 동시에 바쁘게 새로운 데이트가 시작된다. 70년대 ‘Motown'풍의 빈티지한 사운드의 미디엄 템포의 곡이다.<br><br>

            "Zezé" (Composed by 이종훈, 이채규 / Lyrics by 아이유 / Arranged by 이종훈, 이채규)<br><br>

            '나무는 몸 전체로 얘기해. 잎으로도 얘기하고, 가지와 뿌리로도 얘기한단다. 들어볼래? 그럼 네 귀를 내 몸에 대어 봐. 내 가슴이 뛰는 소릴 들을 수 있을 거야.'<br><br>

            : 매력적이지만 곤란하며, 막막하지만 사랑스러운 누군가를 기다리며 부르는 일종의 사랑노래. 기존 아이유 음악에서 시도하지 않았던 Lo-Fi한 비트의 힙합사운드가 도드라지는 곡이다.<br><br>

            "스물셋" (Composed by 이종훈, 이채규, 아이유 / Lyrics by 아이유 / Arranged by 이종훈, 이채규)<br><br>

            '여기서 어느 길로 가야 하는지 가르쳐 줄래?'<br>
            '그건 네가 어디로 가고 싶은가에 달렸지.' 고양이가 말했다.<br><br>

            : 이 곡은 이상한 나라의 앨리스의 체셔 고양이를 모티브로 하고 있다. 앨범명에서도 연상이 되는 '체셔'는 이번 앨범에서 가장 중요한 키워드를 담고 있다. 여러 개의 보기가 있고 그 중 오답은 없다. 무엇을 골라도 답이며 그저 당신이 뭘 믿고 싶은지에 달렸다. 펑키한 비트와 디스코적인 사운드가 가볍고 재미있으면서도 정신 없는 가사와 어우러져 어딘가 약 오르는 곡.<br><br>

            "푸르던" (Composed by 아이유 / Lyrics by 아이유 / Arranged by 김제휘)<br><br>

            '참 그날 재미있었다. .....근데 그날 어디서 이런 물이 들었는지 잘 지지 않는다.'<br><br>

            : 종잇결 같은 마음에 물기가 차고, 시야가 좁아지고, 좋아하지 않던 계절을 단숨에 사랑하게 만든 그 날. 아름다웠던 것을 추억하는 일은 그저 좋은가, 그저 슬픈가. 첫사랑의 추억으로 가득했던 그 어느 날의 여름 밤을 상상하게 만드는 어쿠스틱한 사운드의 곡.<br><br>

            "RED QUEEN (Feat. Zion.T)" (Composed by 이종훈, 이채규 / Lyrics by 아이유 / Arranged by 이종훈, 이채규)<br><br>

            '그 여자도 너처럼 꼴사납게 생기긴 했어. 너보다 더 빨갛고 꽃잎은 더 짧아'<br>
            장미가 말했다. '가시가 많은 종류야.'<br><br>

            : 모두에게 공격을 받는 사람이 지은 경계심 없는 미소에 묘한 기분이 들었던 적이 있지 않는가? 공격 받아 마땅할 악역에게서 선한 부분을 발견하는 것은 불편한 일이라고 생각하는 모두의 선입견에 질문을 던지는 곡. 곡의 주인공인 '그 여자'는 당신이 이 곡을 듣자마자 첫 번째로 떠올린 그 사람의 이야기이고, 또 당신의 이야기이기도 하다. 이야기에 등장하는 여자와 화자와 청자 세 사람 중 누가 가장 나쁠까? 60년대 버블검팝의 비트와 사운드, 곡 중간 보사노바의 코드진행 등 완전히 다른 두 장르가 혼합된 레트로풍의 업템포 트랙.<br><br>

            "무릎" (Composed by 아이유 / Lyrics by 아이유 / Arranged by 이종훈)<br><br>

            그녀가 공기처럼 가벼운 손길로 내 머리를 쓰다듬었다. <br>
            '태어나는 건 언제나 어려운 법이에요. 당신도 알고 있죠? 새가 알껍데기 속에서 밖으로 나오기 위해 애써야 한다는 걸요'<br><br>

            : 의심은 사람을 잠들지 못 하게 한다는 생각에서 시작된 곡. 의심이란 누군가 나에게 품는 의심일 수도 있고, 어쩌면 내가 나에게 품는 의심일 수도, 내가 세상에게, 혹은 찜찜하게 흘려버린 오늘 하루에게 갖는 의심일 수도 있다. 커다란 어른의 손에 어딘가로 옮겨지는 줄도 모르고 꿈도 없는 깊은 잠을 자던 어린 시절이 누구에게나 있을 것이다. 자라고 자랄수록 조그만 기척에도 잠을 설치고 점점 더 많은 것을 경계하게 되는 것이 문득 슬퍼지는 밤에 나지막이 부르는 피아노 선율의 곡이다.<br><br>

            "안경" (Composed by 아이유 / Lyrics by 아이유 / Arranged by 김제휘)<br><br>

            '모두 당신을 바보라고 합니다.'<br>
            '신경 쓰지 마시오. 걱정할 일이 아니니.'<br><br>

            : 이번 앨범은 물음표들로 이루어진 앨범이다. 아이유의 23살은 무엇 하나 확신하고 단정 지을 수 없이 사소하고 혼란스럽다. 그럼에도 불구하고 마침표는 필요하기에 이 곡을 마지막 트랙에 넣었다. 안경을 쓰지 않겠다는 다짐이 꼭 순수함을 뜻하는 것은 아니다. 노래를 흥얼거릴 수 있을 정도의 여유와 유머를 가지고, 적당히 밑지며 적당히 받아치며 하루하루 사는 것. 당장은 그것이 23살 아이유의 지금이 느끼는 가장 싫지 않은 어른의 모습이다. 무기력하게 들리는 기타 반주에 반도네온과 어쩌면 기괴스러운 코러스들이 재미있는 곡이다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/42Gtm4-Ax2U"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>새 신발</th>
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
                <td>2</td>
                <th>Zezé </th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이종훈, 이채규</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이종훈, 이채규</td>
            </tr>
            <tr>
                <td>3</td>
                <th>스물셋&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이종훈, 이채규, 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이종훈, 이채규</td>
            </tr>
            
            <tr>
                <td>4</td>
                <th>푸르던</th>
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
                <td>Arranged by 김제휘</td>
            </tr>
            
            <tr>
                <td>5</td>
                <th>RED QUEEN (Feat. Zion.T)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이종훈, 이채규</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이종훈, 이채규</td>
            </tr>
            
            <tr>
                <td>6</td>
                <th>무릎</th>
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
                <td>7</td>
                <th>안경</th>
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
                <td>Arranged by 김제휘</td>
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

