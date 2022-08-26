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
        <a href="https://www.melon.com/album/detail.htm?albumId=2208448"><img src="images/%EB%B6%84%ED%99%8D%EC%8B%A0%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">Modern Times</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>음악적 성장과 함께 돌아온 아이유 정규 3집 [Modern Times]<br><br>

        정규 2집 [Last Fantasy]와 미니앨범 [스무 살의 봄] 이후 1년 5개월 만에 발표되는 아이유의 새 앨범은 '음악적 성장을 통한 성숙'이라는 테마로 기획과 제작이 진행되었다. 조영철 프로듀서를 필두로 아이유 본인의 적극 참여와 함께 로엔엔터테인먼트A&amp;R팀은 모던함과 빈티지한 감성을 함께 아우를 수 있는 음악들을 목표로 앨범 컨셉트를 구체화시켜 나갔다.<br><br>

        2013년 1월 첫 녹음을 시작으로 지난 9월 마지막 녹음까지, 총 9개월의 제작기간 동안 신-구의 구분 없이 색깔 있는 뮤지션들이 대거 참여하였고, 그 결과 스윙, 재즈, 보사노바, 라틴팝, 포크 등의 다양하고 완성도 있는 음악들로 채워진 정규 3집 앨범 [Modern Times]가 빛을 보게 되었다. 아이유는 이번 앨범에서 2곡의 작곡과 4곡의 작사 참여를 통해 싱어송라이터로서의 욕심를 표현하고 있으며, 외형적으로도 '프렌치 블랙(French Black)'을 컨셉트로 한 낯설지만 과감한 변화에 도전했다.<br><br>

        [Modern Times] 앨범에 채워진 변화된 음악과 외모는 [Last Fantasy]와 [스무 살의 봄]의 '소녀 아이유'를 기억하는 대중들에게 다소 생소하게 느껴질 수도 있겠지만, 에스닉하면서 동시에 대중적인 감각까지 함께 담아낸 음악들로 채워진 탄탄한 앨범 구성은 외형뿐 아니라 모든 면에서 성장하고 있는 ‘현재 아이유’의 모습을 확인시켜주는 데 부족함이 없다. [Modern Times]는 아이유가 국민 여동생을 넘어 뮤지션으로 나아감에 있어서 첫 걸음 같은 앨범이 될 것이다.<br><br>

        세대화합의 아이콘, 아이유의 세 번째 도전<br>
        "아이유는 다른 음악을 다르게 한다. 그는 현재 우리의 주류인 아이돌 댄스를 비롯한 젊은 음악을 하지 않고 윗세대들이 들었던 스윙 재즈, 보사노바, 라틴과 어쿠스틱 음악을 파고든다. 막연히 복고 붐에 편승해 어른 세대의 음악만 끌어들이는 수준을 넘어 양희은, 최백호 등 대선배 뮤지션들, 정석원 같은 선배 작곡가와 실제로 교류하면서 그의 지향인 ‘세대의 융’을 확실히 실천한다. 그럼에도 샤이니의 종현과 호흡을 맞추는 것이 증명하듯 싱싱한 스물 한 살이기에 아이유의 음악은 또한 너무도 젊다. 목소리는 "좋은 날"과 "너랑 나" 때보다 한발 더 성장했고 더 간결해졌다. 음악적 일대 진전! 소비를 자극하는 상업적 아이돌 댄스가 아닌 저장을 바라는 예술적이고 진지한 음악을 한다는 점만으로도 아이유는 우리 시대의 각별한 음악선물이다." - 임진모(음악평론가)<br><br>

        [Track list 및 곡 소개]<br><br>

        1. 을의 연애 (With 박주원) - 작사: 아이유 / 작곡: 박주원<br>
        벨기에 출신 재즈 기타리스트 '장고 라인하르트'가 창안한 집시 재즈 스타일의 곡 ‘을의 연애’는 경쾌한 리듬과 낭만적인 집시 기타 멜로디 위에, 즉흥성이 가미된 아이유의 자유로운 보컬이 인상적인 곡이다. 국내 최정상 집시 기타리스트 박주원의 화려한 연주와 밀고 당기는 연인들의 긴장감을 표현한 아이유가 직접 쓴 가사가 듣는 재미를 더한다.<br><br>

        2. 누구나 비밀은 있다 (Feat. 가인 of Brown Eyed Girls) - 작사: 김이나 / 작곡: 윤상&amp;east4A<br>
        "누구나 비밀은 있다"는 신∙구 전자음악계를 대표하는 뮤지션인 윤상과 east4A의 합작으로 아이유와 가인의 만남이라는 색다른 조합이 이목을 집중시킨다. 라틴 재즈 풍의 스윙 템포가 가미된 일렉트로니카 넘버로, ‘비밀’이라는 소재를 의미심장하게 풀어낸 김이나 작사가의 가사를 아이유와 가인이 강렬한 긴장감을 유지한 체 각자의 느낌으로 소화해 낸 매력적인 곡이다.<br><br>


        3. 입술 사이(50cm) – 작사/작곡: G.고릴라 <br>
        눈을 감고 듣고 있으면 아이유의 입술 모양이 보이는 듯한 착각을 불러일으킬 만큼 세련된 발음이 돋보이는 곡으로, 슬로우 템포의 마이너 선율에 이제 막 사랑에 눈을 뜬 여성의 마음을 담아내었다. 수줍음과 야릇함을 동시에 머금은 아이유의 보컬이 더해져 "입술 사이(50cm)"는 앨범 내에서 가장 농염한 분위기의 곡으로 완성되었다.<br><br>

        4. 분홍신 - 작사: 김이나 / 작곡: 이민수<br>
        타이틀곡 "분홍신"은 이민수-김이나 콤비의 새로운 작품으로, 빨간구두를 신으면 자신의 의지와 상관없이 계속해서 춤을 추게 된다는 내용의 안데르센 동화 '빨간구두(The Red Shoes)'에서 영감을 받아 완성된 곡이다. 1930년대 빅밴드 스윙 사운드를 기반으로 클래시컬하고 빈티지한 요소를 한 데 녹여 기대를 더한다. 세션 작업 역시 1930년대 고전 스윙의 느낌을 최대한 살리기 위해 드라마∙애니메이션∙뮤지컬 음악계의 거장 Toyama Kazuhiko의 지휘 아래 일본 현지에서 최고의 빅밴드 멤버들과 함께 즉흥 연주(Improvisation) 기법으로 녹음이 진행되었으며, 여기에 이민수 작곡가 특유의 드라마틱한 전개와 정교한 코러스가 더해져 스케일 감 있는 곡으로 마무리되었다.<br><br>

        '분홍신'에 빗대어 표현한 '잃어버린 인연과의 찬란했던 여름 날 같은 시간을 운명에 기대어 찾아가는 여정'이 후반부에 이르렀을 때 밴드 사운드도 함께 절정을 향해 내달리는 구성이 압권이다. 원작 동화에서처럼 폭주하는 빨간구두를 의미하는 듯한 급격한 템포의 변화도 곡의 재미와 긴장감을 더한다. 고전적인 미학과 현대적인 감각을 두루 갖춘 전개를 쫓아가다 보면 곡이 끝날 무렵 듣는 이들도 짜릿한 쾌감을 느낄 수 있을 것이다.<br><br>

        5. Modern Times - 작사: 김이나 / 작곡: 정석원<br>
        찰리 채플린 주연의 동명 영화에서 영감을 받은 "Modern Times"는 행진곡 풍의 리듬에 즉흥적으로 연주를 더하는 19세기 말~20세기 초의 딕시랜드(Dixieland) 재즈 스타일을 차용한 곡이다. 지난 정규 2집 "비밀"이라는 곡에서 웅장한 사운드를 선보였던 정석원 작곡가가 이번에는 우크렐레, 튜바, 피아노, 어쿠스틱 베이스 등을 다채롭게 조합하여 경쾌하고 빈티지한 질감의 사운드를 구현해냈다. 여기에 김이나 작사가의 가사가 더해져 아이유와 채플린이 대화를 나누는 듯한 재미있는 구성의 곡이 완성되었다.<br><br>

        6. 싫은 날 - 작사/작곡: 아이유<br>
        작년 가을 전국 투어 콘서트의 앵콜 공연에서 깜짝 공개되었던 아이유의 자작곡. 당시 어쿠스틱 기타 반주의 미니멀한 구성으로 선보였던 곡이 건반과 스트링 중심의 서정적인 스타일로 재탄생 되었다. "누군가의 친절함이나 따뜻함이 오히려 날 더 비참하고 춥게 만들 때가 있는데 그때 정말 스스로가 못나게 느껴지잖아요. 삐뚤어진 내가 너무 한심하고 못나 보일 때, 집에 가기 싫은 날, 혼자 있기 싫은 날, 스스로가 싫은 날에 관한 곡이에요. 연습생 시절의 일기가 이 곡 가사를 쓸 때 많은 도움이 됐어요" 라는 아이유의 설명처럼 힘들고 지친 이들에게 잔잔한 위로가 될 수 있는 곡이다. 본인의 곡 "좋은 날"을 스스로 뒤집어 제목을 정한 아이유의 재치도 엿볼 수 있다.<br><br>

        7. Obliviate - 작사: 김이나, G.고릴라 / 작곡: G.고릴라<br>
        '좋은 기억만 남겨두고 나쁜 기억은 지우는 주문’을 의미하는 단어 '오블리비아테(Obliviate)'에서 영감을 받은 곡으로, 속도감 넘치는 보사노바 리듬을 바탕으로 한 드라마틱한 전개가 돋보인다. 이 곡에서 아이유는 작곡가 G.고릴라가 의도한 '아픈 기억을 지우고픈 집시 여인'을 마음을 강렬하고 다이나믹한 보컬로 정확하게 표현해냈다.<br><br>

        8. 아이야 나랑 걷자 (Feat. 최백호) - 작사: 김이나 / 작곡: 박주원<br>
        아버지의 애창곡이 ‘낭만에 대하여’인 덕분에 어려서부터 자연스럽게 좋아하게 된 대선배 최백호가 흔쾌히 피쳐링으로 참여한 보사노바 풍의 곡이다. 평소 아이유는 "낭만에 대하여"를 콘서트에서 여러 차례 부른 바 있으며, 함께 화보를 촬영하고, 최백호 콘서트에 게스트로 서는 등 두 사람만의 세대를 초월한 인연을 이어가고 있다. 긴장감 넘치는 화성 진행과 유려한 현악기 선율 위에, 인생을 관조하는 듯한 최백호의 보컬과 소녀의 속삭임 같은 아이유의 보컬이 만나 멋진 하모니를 만들어 낸 아이야 함께 걷자’는 기타리스트 박주원의 아이유를 위한 또 다른 선물이다.<br><br>

        9. Havana - 작사: 김이나 / 작곡: 전정훈<br>
        쿠바의 수도 'Havana'에서 보내는 연인과의 달콤한 한 때를 상상하는 내용의 곡으로, 라틴 재즈와 삼바 리듬이 주조해내는 상큼하고 경쾌한 분위기가 담백하고 성숙한 아이유의 보컬을 만나 묘한 매력을 선사한다. '2NE1' "아파" 등의 작곡가로 유명한 보컬리스트 선우정아가 포르투갈어 코러스에 참여하여 이국적인 느낌을 배가시켜 주었다.<br><br>

        10. 우울시계 (Feat. 종현 of SHINee) - 작사 / 작곡: 김종현<br>
        '즐겁고 듣기 편한 음악'을 목표로 아이유와 종현이 많은 대화를 나누며 작업한 "우울시계"는 '이유 없는 우울함'에 관한 이야기를 표현한 어쿠스틱 팝 곡으로, 누구나 느껴봤을 법한 하루를 마치고 난 후의 지친 일상에 대한 우울한 감정들, 그리고 내일은 더 좋을 거라는 희망이 함께 담겨져 있는 가사가 인상적이다.<br><br>

        어쿠스틱하면서도 미니멀한 악기 구성이 여백의 미를 만들어 독특한 매력을 표현한다. 여기에 누구나 한번쯤 연주해봤을 악기들인 기타, 캐스터네츠, 실로폰과 시계 소리나 하품 소리, 휘파람 소리 등의 일상적인 소리들을 더해 색다르고 재미있는 구성의 곡이 만들어졌다.<br><br>

        11. 한낮의 꿈 (Feat. 양희은) - 작사: 최갑원, PJ / 작곡: PJ, 최갑원<br>
        청아하면서도 힘있는 목소리로 한국 포크 음악을 대표하는 가수 양희은이 처음으로 후배 가수와 입을 맞춘 '한낮의 꿈'은 감성 작곡가 PJ와 최갑원 프로듀서가 함께 작업한 곡으로, 나일론 기타와 현악 4중주의 따뜻하고 심플한 사운드가 인상적인 포크 넘버다. 양희은과 아이유라는, 세대를 뛰어넘는 두 보컬의 만남만으로도 대중음악 팬들의 기대감을 자극하기에 충분한 곡.<br><br>

        12. 기다려 – 작사: 아이유 / 작곡: TEXU<br>
        앨범의 outro에 해당하는 ‘기다려’는 화려한 드럼 비트가 바탕이 된 일렉트로니카 라운지 넘버이다. '잔혹동화'를 통해 이미 아이유와 호흡을 맞춘 적이 있는 TEXU 작곡가가 최초에는 보컬이 없는 연주곡으로 만든 곡이었으나, 아이유 본인이 데모를 듣고 난 후 '자신 안의 또 다른 모습을 꺼내어보는' 설정을 제시하여 엔딩 파트에 짧은 가사가 들어가게 되었다.<br><br>

        13. (Bonus Track) Voice Mail (Korean Ver.) - 작사/작곡: 아이유<br>
        올해 초 발매된 일본 미니앨범 [Can U Hear Me?]에 먼저 수록되어 사랑을 받았던 아이유의 자작곡으로, 한국어 버전으로 새롭게 편곡하고 녹음해 보너스 트랙으로 수록하게 된 선물 같은 곡. 노래 첫 소절부터 마지막까지 실제 음성 메시지가 녹음되는 듯한 독특한 설정으로, 전화로 횡설수설하는 듯한 한심한 고백을 덜 다듬어진 느낌으로 표현하고 싶었다는 아이유의 바람처럼 소박하고 따뜻한 느낌으로 완성된 팝 발라드 곡이다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/Q0xvVgKJxfs"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>을의 연애 (With 박주원)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 박주원</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            
            <tr>
                <td>2</td>
                <th>누구나 비밀은 있다 (Feat. 가인 of Brown Eyed Girls)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 윤상&amp;east4A</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김이나</td>
            </tr>
            
            <tr>
                <td>3</td>
                <th>입술 사이(50cm) </th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by G.고릴라 </td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by G.고릴라 </td>
            </tr>
            
            <tr>
                <td>4</td>
                <th>분홍신&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
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
                <th>Modern Times</th>
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
                <td>6</td>
                <th>싫은 날</th>
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
                <td>7</td>
                <th>Obliviate </th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by G.고릴라</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김이나, G.고릴라</td>
            </tr>
            <tr>
                <td>8</td>
                <th>아이야 나랑 걷자 (Feat. 최백호) </th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 박주원</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김이나</td>
            </tr>
            <tr>
                <td>9</td>
                <th>Havana</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 전정훈</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김이나</td>
            </tr>
            <tr>
                <td>10</td>
                <th>우울시계 (Feat. 종현 of SHINee)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김종현</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김종현</td>
            </tr>
            <tr>
                <td>11</td>
                <th>한낮의 꿈 (Feat. 양희은)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 최갑원, PJ </td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 최갑원, PJ </td>
            </tr>
            <tr>
                <td>12</td>
                <th>기다려</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by TEXU</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td>13</td>
                <th>(Bonus Track) Voice Mail (Korean Ver.)</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
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

