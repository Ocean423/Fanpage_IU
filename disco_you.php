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
        <a href="https://www.melon.com/album/detail.htm?albumId=2040666"><img src="images/%EB%84%88%EB%9E%91%EB%82%98%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">Last Fantasy</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p> [Last Fantasy]<br><br>

        지난 해, 온 세상을 "좋은 날"로 물들였던 아이유가 드디어 새 앨범을 들고 팬들 곁으로 돌아온다. 아이유의 새 앨범 [Last Fantasy]는 1집 [Growing up] 이후 2년만에 선보이는 정규앨범으로, 이번 앨범은 지난 해 '아이유 신드롬'을 탄생시켰던 조영철 프로듀서가 총괄 프로듀싱을 맡았다. 조영철 프로듀서는 이번 앨범을 통해 아이유가 가지고 있는 음악성을 좀 더 다양한 측면으로 접근하여 표현해내는 것에 중점을 두었다. <br><br>

        새 앨범 [Last Fantasy]의 앨범 타이틀 뜻은 10대의 마지막 순간에서 20대의 시작을 바라보고 있는 아이유가 마음속에 품고 있는 생각, 상상, 환상 등을 앨범 속에 그려냈다는 의미를 가지고 있으며, 음악팬들이 아이유에게 바라는 다양한 모습들을 노래를 통해 다채롭게 담았다는 의미를 담고 있다. 총13곡이 수록되어 있는 이번 정규 2집은 국내 최고의 뮤지션들과 작곡가들이 참여해 이목을 집중시킨다. 김광진, 윤상, 정재형, 이적, 김형석, 정석원, 김현철, 윤종신, 이민수, 코린 베일리 래, G.고릴라, Ra.D 등 더 이상 설명이 필요 없는 음악인들이 모두 이번 아이유의 정규 앨범에 선뜻 참여했다.<br><br>

        아이유는 오랜만의 정규 앨범인만큼 이번 앨범의 완성도를 위해 다각도의 노력과 정성을 아끼지 않았다. 아이유는 본인의 자작곡 이외에도 다수의 곡에 작사로 참여하며 한층 성장한 음악적 감성을 보여주었으며, 곡마다 그에 맞는 음색을 찾기 위한 세심한 고민을 계속 하며 앨범의 완성도를 높이기 위해 최선의 노력을 다했다.<br><br>

        먼저 첫 번째 트랙인 "비밀"은015B 정석원 작곡가의 작품으로, 정규 2집의 포문을 여는 곡답게 강렬한 매력을 보여준다. 뚜렷한 기승전결이 있는 스토리 전개와 대비를 강조한 편곡이 특징인 이 곡은 아이유의 맑은 음색과 함께 시작되는 서정적인 멜로디에서 점차 파워풀해지는 보컬과 락오페라의 웅장한 사운드로 완성된다. 아이유는 곡의 중심에 서서 이 모든 음악을 이끌어나가는 힘 있는 보컬을 보여주었다. 두 번째 트랙인 "잠자는 숲 속의 왕자"는 "나만 몰랐던 이야기"로 아이유의 깊은 감성을 이끌어냈던 작곡가 윤상의 작품이다. 아이유만이 보여줄 수 있는 순수한 매력으로 다시 태어난 이 곡은 한 편의 동화를 보는 듯한 맑고 밝은 감성을 느낄 수 있다. 아이유가 10대일 때 이 곡을 불러주어서 다행이라는 윤상 작곡가의 느낌처럼 아이유의 귀여운 보컬과 따뜻한 편곡이 만나 완성도 높은 곡으로 탄생되었다.<br><br>

        세 번째 트랙 "별을 찾는 아이"는 김광진 작곡가의 곡으로 말로 표현할 수 없는 깊은 울림을 전해주는 곡이다. 아이유의 담담하게 읊조리는 보컬과 느리게 천천히 흐르는 멜로디는 마음을 어루만져주는 듯한 느낌을 주며, 곡의 말미에 터져 나오는 김광진의 목소리는 마음을 움직이는 감동을 안겨준다. 이 곡은 김광진 작곡가 특유의 감성이 깊게 베어있는 이 곡은 세대를 관통하는 매력을 담고 있는 곡이다. 정규2집의 타이틀곡인 네 번째 트랙 "너랑 나"는 "좋은 날"을 탄생시켰던 이민수 작곡가-김이나 작사가의 합작품으로, 아이유의 다채로운 감성과 업그레이드된 음악성을 전한다. “너랑 나”는 아이유의 보컬이 가지고 있는 매력을 다시 한번 선보이는 곡으로, 10대 소녀가 시간 여행을 떠나 먼 미래를 만나고 온다는 신비롭고 기묘한 컨셉을 가지고 있다. 마이너와 메이저 코드를 넘나드는 구성으로 하프, 호른 등 가요에서 거의 찾아보기 힘든 악기를 사용한 리얼 사운드의 버라이어티하고 판타지스러운 느낌을 전하는 편곡이 돋보이며, 아이유의 다양해진 보컬 표현력을 만나볼 수 있다.<br><br>

        이어지는 다섯 번째 트랙 "벽지무늬"는 윤종신 작곡가의 작품으로 아이유의 섬세한 감수성을 만나볼 수 있는 곡이다. 서정적인 멜로디와 아이유의 따뜻한 음색이 어우러진 곡으로, 일상에서 느낄 수 있는 보통의 감정을 표현한 시적인 가사를 완벽하게 소화한 아이유의 곡 해석력이 돋보인다. 이 곡은 특히 정석원 작곡가가 편곡에 참여해 디테일한 사운드를 자랑한다. 이 세상 모든 삼촌들에게 보내는 아이유의 응원송! 여섯 번째 트랙은 작곡가 이적과 함께한 "삼촌"이라는 곡이다. 이 곡은 아이유가 이적과 함께 이야기를 나누며 완성한 곡으로 통통튀는 멜로디와 함께 아이유의 애교어린 음색이 삼촌들의 마음을 사로잡는다. 아이유의 강요섞인(?) 부탁으로 이루어진 이적의 랩과 삼촌들을 향한 아이유의 외침이 주목해야 할 포인트이다.<br><br>

        "사랑니"는 그 만의 독특한 감성으로 팬들의 많은 사랑을 받고 있는G고릴라 작곡가의 작품으로, 첫사랑의 아픔을 겪은 소녀의 마음을 그린 곡이다. 첫사랑이기 때문에 더욱 크게 다가오는 아픔을10대의 시선에서 순수하고 재미있게 표현한 가사는 아이유가 공동작사로 참여했으며, 아이유는 실제로 이 곡의 가사를 어머니와 함께 이야기를 하며 써 내려가며 솔직한 느낌을 담아냈다. 빠른 템포의 신나는 느낌의 여덟 번째 트랙인 "Everything’s Alright"은 김현철 작곡가의 작품이다. 싸운 연인의 냉랭한 분위기를 그린 이 곡은 실제 연주로 이루어진 따뜻한 사운드가 어우러지며 곡의 분위기를 한껏 살리고 있으며, 피쳐링으로 참여한 김현철 작곡가와 아이유의 하모니가 귓가에 맴도는 매력을 가지고 있다.<br><br>

        아홉 번째 트랙인 "Last Fantasy"는 김형석 작곡가의 작품으로 한 편의 영화음악을 듣는 듯한 상상 이상의 스케일을 보여준다. 50인조 오케스트라의 웅장함을 그대로 담은 이 곡은6분이 넘는 대곡으로 듣는 이를 압도한다. 현실의 문을 열었을 때 꿈이 넘어지지 않게 손을 잡아달라는 내용의 가사로10대의 마지막에 서 있는 아이유의 현재를 표현한 가사가 인상적인 곡이다. 열 번째 트랙인 "Teacher"는 작곡가 Ra.D의 곡으로, 이 곡 역시 아이유가 공동 작사로 참여했다. 작업 초기부터 아이유 맞춤형으로 작업된 곡으로, 19세 아이유의 여러 가지 생각들과 고민들을 담기 위해 가사 작업에 많은 시간이 투자되었다. 잔잔한 어쿠스틱 사운드와 아이유, Ra.D의 감성보컬이 어우러지며 매력적인 곡으로 완성되었다.<br><br>

        이어지는 열 한번 째 트랙 "길 잃은 강아지"는 아이유의 자작곡이다. 짙은 어둠이 느껴지는 "길 잃은 강아지"는 아이유가 오랜 시간 공을 들인 곡으로, 그 동안 선보였던 밝은 모습과는 상반된 감성이 느껴진다. 전혀 상상하지 못했던 깊은 내면의 감성을 이끌어낸 아이유의 자작곡은 팬들에게 그녀의 가능성에 대한 또 다른 기대를 심어줄 것으로 본다. 열두 번째 트랙 "4AM"은 영국의 싱어송라이터 ‘코린 베일리 래’의 곡으로, 아이유가 직접 가사를 써 합작품으로 완성이 되었다. 새벽4시의 불안전한 감성을 그린 가사가 눈길을 끌며, 이전에 만나볼 수 없었던 아이유의 진한 보컬이 인상적인 곡이다. 데뷔 후부터 지금까지 아이유가 가장 사랑한다고 밝혀온 뮤지션인 ‘코린 베일리 래’의 곡을 불렀다는 것만으로도 아이유에게는 큰 의미로 다가오는 곡이다.<br><br>

        정규 앨범의 대미를 장식하는 마지막 곡 "라망(L’amant)"은 작곡가 정재형의 작품으로 그가 가지고 있는 음악적 감성을 그대로 느낄 수 있는 곡이다. 처연한 재즈선율 속에 흐르는 아이유의 애절하고 짙은 보컬은 곡에 세련미를 더한다. 온전히 아이유의 곡 해석력으로 완성된 이 곡은 다양한 장르를 소화해내는 아이유의 미래를 가늠케 할 수 있는 곡이다. 아이유의 정규 2집은 참여 작가진과 곡의 완성도만으로도 디지털 음원 세대에게 '음반의 가치'를 다시 한번 생각하게 할 음반이라고 할 수 있다. 음악성과 대중성을 겸비한 음악적 실력으로 팬들의 많은 기대를 한 몸에 받고 있는 아이유가 이번 앨범을 통해 선보일 '음악의 매력'에 우리 모두 귀 기울여 보자.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/NJR8Inf77Ac"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>비밀</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 정석원</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김이나</td>
            </tr>
            
            <tr>
                <td>2</td>
                <th>잠자는 숲 속의 왕자 (Feat. 윤상)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 윤상</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 박창학</td>
            </tr>
            
            <tr>
                <td>3</td>
                <th>별을 찾는 아이 (Feat. 김광진)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김광진</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 허승경</td>
            </tr>
            
            <tr>
                <td>4</td>
                <th>너랑 나&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이민수</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김이나</td>
            </tr>
            
            <tr>
                <td>5</td>
                <th>벽지무늬</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 윤종신, 이근호</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 윤종신</td>
            </tr>
            <tr>
                <td>6</td>
                <th>삼촌 (Feat. 이적)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이적</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 이적,아이유</td>
            </tr>
            <tr>
                <td>7</td>
                <th>사랑니</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by G. 고릴라,아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by G. 고릴라</td>
            </tr>
            <tr>
                <td>8</td>
                <th>Everything`s Alright (Feat. 김현철)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김현철</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김현철, 아이유</td>
            </tr>
            <tr>
                <td>9</td>
                <th>Last Fantasy</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김형석</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김이나</td>
            </tr>
            <tr>
                <td>10</td>
                <th>Teacher (Feat. Ra.D)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 라디 (Ra. D)</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 라디 (Ra. D),아이유</td>
            </tr>
            <tr>
                <td>11</td>
                <th>길 잃은 강아지</th>
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
                <td>12</td>
                <th>4AM</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by Corinne Bailey Rae, ROD BOWKETT</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by Corinne Bailey Rae, ROD BOWKETT</td>
            </tr>
            <tr>
                <td>13</td>
                <th>라망 (L`amant)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 정재형</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 정재형</td>
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

