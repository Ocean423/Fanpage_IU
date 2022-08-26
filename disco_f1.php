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
        <a href="https://www.melon.com/album/detail.htm?albumId=2256290"><img src="images/%EA%BD%83%EA%B0%88%ED%94%BC1%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">꽃갈피</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>시간이 흘러도 바래지 않는 추억의 흔적<br>
            IU Special Remake Album [꽃갈피]<br><br>

            시간이 흘러도 바래지 않는, 소박하고 아름다운 추억의 흔적<br>
            아이유(IU) 스페셜 리메이크 미니앨범 [꽃갈피]<br><br>

            오래된 서재에서 먼지를 털어내고 꺼내든 책 한 권. 한 장씩 책장을 넘기다 책갈피처럼 끼워진 빛 바랜 네 잎 클로버나 꽃잎들을 발견할 때가 있다. 오래 전 누군가가 마음을 담아 선물했을 소박하고 아름다운 흔적. 또 그 페이지마다 밑줄이 그어져있는 기억할 만한 글귀들. 이러한 '꽃갈피'는 요즘은 점점 잊혀져 가고 있는 예전 아날로그 세대의 감성과 낭만을 보여주는 청년 문화의 상징 중 하나일지도 모른다.<br><br>

            시간이 흘러도 바래지 않는, 한 번쯤 다시 꺼내어보고 싶은 세대를 관통하는 추억의 흔적. 아이유(IU)의 이번 스페셜 미니앨범은 이처럼 이전 세대의 음악 속에서 '꽃갈피'들을 발견해내고, 그것을 다시 자신만의 감성과 목소리로 되새겨 현 세대의 청자들에게 선물한다는 의미를 담고 있다. 7곡의 수록곡들은 평소 옛 노래들을 즐겨 듣는 아이유가 이 곡들을 처음 발견했을 때 생각지도 못했던 설레는 선물을 받았던 것 같은 느낌을 되새겨 직접 선곡하였고, 최대한 원곡의 감성을 살리면서도 본인만의 색깔을 절충하여 녹여내는 방향으로 리메이크 작업을 진행했다. [꽃갈피]는 그 동안 방송에서 선보인 통기타 커버 등을 통해 수 차례 화제가 됐던 아이유의 아날로그 감성을 좋아해온 많은 팬들에 대한 선물이자, 자극적인 음악들 가운데 오랜 시간을 두고 감상하며 명곡의 의미를 다시 한 번 되새겨볼 수 있는 기회를 제공하는 음반이 될 것이다.<br><br>

            1. 나의 옛날이야기<br>
            原曲 조덕배 / Composed by 조덕배 / Lyrics by 조덕배 / Arranged by 김제휘<br><br>

            창문너머로 골목길을 사이에 둔 건너편 집, 그 소녀를 짝사랑하던 소년의 마음<br><br>

            시대를 타지 않는 세련된 멜로디의 싱어송라이터, 유난히 귓가에 맴도는 그리운 목소리 '조덕배'. 노래하는 음유시인으로 알려진 싱어송라이터 조덕배의 "나의 옛날이야기"는 조덕배가 중학생 시절을 보내던 1973년, 대학노트에 빼곡하게 적어두었으나 결국엔 전하지 못한 연애편지에서 비롯되었다. 제목도 없이 오랜 시간을 간직해오던 이 노래는 결국 1985년 발매된 "나의 옛날이야기"가 되어 많은 사랑을 받게 된다.<br><br>

            아이유의 "나의 옛날이야기"는 음악적 형태와 현대적 기교로 재해석된 리메이크라기 보다는 애태우던 그 시절에 대한 원곡의 정서를 소녀의 시점으로 고스란히 그려낸 마치 짝사랑하던 대상의 화답에 가까운 감성적 측면의 리메이크 곡이다. 편곡자 싱어송라이터 김제휘가 연주한 기타와 피아노는 스트링 쿼르텟 및 아코디언 아티스트 진선의 연주와 어우러지며 아날로그 세대의 감성과 낭만의 문을 연다.<br><br>

            2. 꽃<br>
            原曲 김광석 / Composed by 문대현 / Lyrics by 문대현 / Arranged by G.고릴라<br><br>

            한국 모던 포크의 기둥과도 같았던 故김광석 1991년 발매된 그의 2집 2번 수록곡 "꽃"<br><br>

            아이유가 부른 "꽃"은 스스로 키워낸 그에 대한 동경에서 시작되었다. 그것은 리메이크가 원곡 고유의 가치에 편승하는 것을 부정할 수 없다는 시선과 상충하기에 이 선곡은 그 자체로 충분히 어려운 선택이었다. '시(詩)'에 가까운 노랫말, 그리고 그에 어울리도록 가지런히 정돈되어 있는 음들이지만 감정을 더하자면 매우 까다로운 곡이기에 특히, 아이유의 보컬과 황민웅의 클래식 기타, 쿼르텟은 서로의 경계를 넘나들며 긴장을 멈추지 않는다.<br>

            3. 삐에로는 우릴 보고 웃지<br><br>

            原曲 김완선 / Composed by 손무현 / Lyrics by 이승호 / Arranged by 이종훈<br><br>

            기존 가요계에서 볼 수 없었던 독특한 컨셉과 파격적인 퍼포먼스로 90년대 최고의 여성 솔로 가수로 자리잡은 김완선의 밀리언셀러 넘버<br><br>

            아이유의 "삐에로는 우릴 보고 웃지"는 원곡 컨셉의 연장선상에서 과감한 변화를 시도하는데, 기계적인 보컬 효과를 활용한 작곡가 이종훈의 화려한 편곡과 감정의 변화 없이 무덤덤하게 진행되는 곡의 정서적인 부분이 기존의 아이유 곡들과는 극명하게 대비되어 눈에 띈다. 재즈 드러머 이상민의 힘있는 그루브가 리드하는 탄탄한 리듬위로 홍준호의 기타, 최인성의 베이스, 홍소진의 키보드가 어우러져 모노톤의 아날로그 사운드로 완성되었다.<br><br>

            4. 사랑이 지나가면<br>
            原曲 이문세 / Composed by 이영훈 / Lyrics by 이영훈 / Arranged by G.고릴라<br><br>

            한국 음악사에 처음으로 200만장 이상으로 공식 집계된 1987년 최고의 히트작<br><br>

            "사랑이 지나가면"은 이문세와는 최고의 음악적 동반자였던 故이영훈 작곡가의 작품으로 대중성과 음악성의 완벽한 조화로움을 갖췄다는 찬사를 받았다. 두 아티스트의 합작에는 유난히도 추억을 상기시키는 감성이 가득한데, 아이유는 이처럼 이별의 기억을 자극하는 원곡 속 이문세의 애틋함과는 또 다른 매력을 선보인다. 새로운 "사랑이 지나가면" 역시 슬픈 이별을 이야기하지만, 아이유는 편곡자 G.고릴라가 담아낸 특유의 투명한 소리들 속에서 격한 슬픔에 치우치지 않는 절제된 가창을 유지하며 세대가 달라도 변함없는 추억의 흔적처럼 원곡의 감성을 충실히 잇고 있다.<br><br>

            5. 너의 의미 (Feat. 김창완)<br>
            原曲 산울림 / Composed by 김창완 / Lyrics by 김한영 / Arranged by 고태영<br><br>

            기발하고 천진난만하기까지 한 음악의 주제들과 더불어 가장 파격적이라는 평가를 받았던 한국 그룹사운드의 선구자이며 록음악이라는 틀 안에서 조차도 구체적 장르로 국한 할 수 없었던 밴드 '산울림'<br><br>

            아이유가 부른 산울림의 1984년 작품 "너의 의미"는 보컬의 감성을 디자인하는 작업에서부터 피처링까지 곡의 전반에 걸쳐 김창완의 손길이 묻어난다. 녹음을 진행할 때 같이 부스 안에서 자연스럽게 호흡하며 리드하는 독창적인 김창완 그 만의 방식은 산울림의 음악 그 자체와 매우 닮아있었으며 가공되지 않은 원곡의 감성을 세대를 넘어 연결하는 교감의 고리가 되어주었다. 기타리스트 고태영의 편곡은 고신재의 Bass와 정동윤의 Drum, 송성경의 Hammond Organ 을 조합한 따뜻한 사운드로 마무리 되었다.<br><br>

            6. 여름밤의 꿈<br>
            原曲 김현식 / Composed by 윤상 / Lyrics by 윤상<br><br>

            한국대중음악사에 빼놓을 수 없는 이름, '가객' 故김현식의 1988년 작품 "여름밤의 꿈"<br><br>

            "여름밤의 꿈"은 싱어송라이터 윤상의 작곡가 데뷔곡으로도 알려져 있다. 26년전, 어린 송라이터 윤상의 원형에 가까운 감성이 고스란히 담긴 데모테이프는 혼신에 가득 찬 거친 목소리로 노래하는 故김현식의 고독한 탁성과 맞닿아 깊은 어울림을 이루었으며 시대는 열광했다. 이미 "나만 몰랐던 이야기", "잠자는 숲 속의 왕자" 등을 통해 아이유를 잘 이해하고 있는 윤상은 직접 아래와 같은 소감을 남겼다.<br><br>

            "여름밤의 꿈"은 고등학교 시절 작곡을 시작하면서 처음 완성했던 곡입니다. 이 노래를 처음 불러주신 고마운 故김현식 선배님, 또 지금까지 저에게 수 많은 인연을 만들어준 곡이기도 하죠. 선곡해준 아이유에게 다시 한 번 고마운 마음입니다. 개인적으로는 이번에 피아노만으로 반주하길 참 잘했다는 생각입니다. 이유는 바로 아이유의 목소리를 고스란히 담을 수 있었기 때문이죠. 처음 이 곡이 발표되고 수 년이 더 지나서 태어난 아이유는 마치 오래 전부터 불러온 자기 노래처럼 편안하게, 딱 4번의 녹음으로 노래를 마무리 해주었습니다. 지금까지 적지 않은 곡을 아이유와 함께 녹음해왔지만 맘속으로 깜짝 놀랐던 순간이기도 합니다. 여러분에게도 제가 느낀 담백함이 여름밤의 반갑고 느릿한 바람처럼 느껴질 수 있길 기대합니다.(윤상의 인터뷰 中)<br><br>

            7. 꿍따리 샤바라 (Feat. 클론)<br>
            原曲 클론 / Composed by 김창환 / Lyrics by 김창환 / Arranged by 이종민<br><br>

            강렬한 정글사운드와 퍼포먼스를 앞세워 1996년 전국을 휩쓸었던 클론의 데뷔 타이틀 "꿍따리 샤바라"<br><br>

            여름철 휴가송이라 불릴 만큼 더위와 함께 매년 회자되는 이유는 바로 이 노래가 가진 특유의 시원함과 남녀노소 쉽게 공감하는 위안의 메시지이다. 이에 우쿨렐레를 치며 하와이안 훌라 리듬으로 차분하게 진행되는 아이유의 "꿍따리 샤바라"는 살랑 바람 부는 여느 밤바다의 파도소리처럼 답답하고 짜증나는 일상에 휴식 같은 편안함을 전해주며 클론이 직접 피처링에 참여한 랩 파트도 원곡의 강렬함과는 사뭇 다른 톤으로 듣는 재미를 더한다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/npttud7NkL0"></iframe>
        <iframe src="https://youtube.com/embed/4L-H_cXSNhQ"></iframe>
        
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>나의 옛날이야기&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 조덕배</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 조덕배</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 조덕배</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 김제휘</td>
            </tr>
            
            <tr>
                <td>2</td>
                <th>꽃</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 김광석</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 문대현</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 문대현</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by G.고릴라</td>
            </tr>
            <tr>
                <td>3</td>
                <th>삐에로는 우릴 보고 웃지</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 김완선 </td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 손무현</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 이승호</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이종훈</td>
            </tr>
            
            <tr>
                <td>4</td>
                <th>사랑이 지나가면</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 이문세</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이영훈</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 이영훈</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by G.고릴라</td>
            </tr>
            
            <tr>
                <td>5</td>
                <th>너의 의미 (Feat. 김창완)</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 산울림 </td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김창완 </td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김한영</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 고태영</td>
            </tr>
            
            <tr>
                <td>6</td>
                <th>여름밤의 꿈</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 김현식</td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 윤상 </td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 윤상</td>
            </tr>
            
            <tr>
                <td>7</td>
                <th>꿍따리 샤바라 (Feat. 클론)</th>
            </tr>
            <tr>
                <td></td>
                <td>원곡 클론 </td>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김창환</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 김창환</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이종민</td>
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




