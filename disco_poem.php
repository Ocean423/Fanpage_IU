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
        border: 1px solid darkgray;
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
        <a href="https://www.melon.com/album/detail.htm?albumId=10346650"><img src="images/%EB%9F%AC%EB%B8%8C%ED%8F%AC%EC%97%A0%20%EA%B3%A0%ED%99%94%EC%A7%88.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">Love poem</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>‘아이유(IU)' 미니 5집 [Love poem]<br><br>
 
        모든 문학에는 정답이 없다지만 그중 해석의 제한에서 가장 자유로운 것은 시가 아닐까 한다.<br>
        작품자의 순정만 담겨 있다면, 어떤 형태든 그 안에선 모든 것이 시적 허용된다.<br>
        ‘시인’이라든가 ‘예술’이라든가 ‘영감’이라든가 ‘작품’과 같이 본인 입으로 얘기하기에는 왠지 좀 민망한 표현들에 대해 약간의 울렁증을 가지고 있는 내가, 앨범명을 뻔뻔하게 ‘사랑시’라고 지어 놓고도 하나도 부끄럽지 않은 이유는 여기 담은 것들이 전부 진심이기 때문이다.<br><br>

        ‘아이유(IU)'의 다섯 번째 미니앨범 [Love poem]이 공개됐다.<br>
        지난 11월 1일 동명의 선공개 곡 ‘Love poem’이 각종 음원차트 1위를 휩쓸며 본 앨범에 대한 기대치를 한껏 고조시켜왔다.<br>
        이번 미니앨범 [Love poem]은 총 6곡이 수록되었으며 전곡을 아이유가 작사하고 2곡에 작곡으로 참여하며 다시 한번 프로듀서로의 역량을 발휘했다<br>
        이민수, 이종훈, 이채규, 제휘, 김희원 등 그동안 아이유의 타이틀곡 및 주요곡을 함께하며 아이유 음악 인생에 가장 큰 영향을 끼침과 동시에 음악적 정체성에 기여한 파트너라 칭할 수 있는 작곡 진이 참여하여 Electro pop-rock, blues, Ethnic fantasy 등 유니크함과 서사적 감성을 오가는 장르들을 함께 완성했다. 더불어 홍소진, 적재 등 대한민국 최고의 뮤지션들이 편곡 및 연주에 참여하여 앨범의 완성도를 더욱 높였다.<br>
        또한 지난 선공개 곡 ‘Love poem’에서 화제가 되었던 곡 설명에 이어 이번 역시 전체 수록곡에 대한 아이유의 곡 해석 및 주석들이 음악을 듣는 이로 하여금 한층 더 몰입감과 감동을 선사할 예정이다. <br><br> 
        1. unlucky<br>
        며칠 내내 떠올리려 노력했던 아주 오래된 노래의 제목을, 우연히 튼 라디오 디제이가 알려줄 때.<br>
        가깝지도 각별하지도 않은 사람이 큰 의미 없이 툭 뱉은 말 한마디에서 내 오랜 고민의 정답을 발견할 때.<br>
        의심조차 하지 않았던 일이 날 배신할 때.<br>
        억지로 떠밀려 나간 약속 장소에서 앞으로 오래 보게 될 것 같은 사람을 만났을 때. 인생이 잘 짜여진 장난 같다는 생각을 한다.<br>
        그 정교함이, 세련된 농담처럼 날 웃게 할 때도 있고 약오르고 허탈한 마음에 일순간 서글퍼질 때도 있다.<br>
        바보같이 매번 휘둘려서 골난 내 기분을, 그러면서도 기대하고 또 기대고 싶어 하는 나의 이 싱숭생숭한 마음을 이런 경쾌한 음악에 담고 싶었다.<br><br>

        인터뷰에서도 몇 번 밝혔듯 나의 어릴 적 좌우명은 ‘나는 행운아다.’ 였다. 마냥 어리지 않은 지금은 행운을 별로 바라지 않는다. 또박또박 나름대로 잘 걷다가도 행운이 보이면 잡고 싶은 마음에 손을 뻗고 엇박을 타다가 중심을 잃어 휘청대는 내 모습이 언젠가부터 스스로 멋져 보이지 않았기 때문이다. 오히려 요즘엔, 어느 날 갑자기 나의 지난날을 돌아봤을 때. 내가 평생 동안 받았던 행운을 싹 다 골라내고도 다른 남는 게 꽤 많은 인생이었으면 좋겠다는 생각이다.<br><br>

        이 앨범의 마지막 트랙인 ‘Love poem’이<br>
        내가 사랑하는 나의 누군가에게 조심스레 건네는 응원이라면, 앨범의 첫 트랙인 ‘unlucky’는 내가 나 스스로에게 부르는 응원가다. <br><br>

        아이유와 이미 수차례 환상의 호흡을 보였던 ‘뮤지션들의 아이돌’ 김제휘 작곡가의 곡으로, 경쾌하고 세련된 얼터너티브 팝 장르의 음악이다. 본인을 ‘코러스 성애자’라고 지칭할 만큼 코러스 트랙을 좋아하는 아이유답게 위트 있고 독특한 화성의 코러스들이 귀를 즐겁게 한다.<br><br>


        2. 그 사람<br>

        갑자기 와 손님처럼 잠시 머물다 간 ‘그 사람’의 이야기.<br><br>

        아이유의 자작곡으로 그녀가 평소 시도해 보지 않았던 3박자의 모던한 블루스 음악이다.<br>
        또한 기교를 최소화한 깔끔한 창법을 선호했던 최근 발매 곡들과 달리 오랜만에 그루브감 있는 비브라토와 밴딩을 구사해 또 다른 창법으로 가창했다는 점이 새롭다.<br>
        뮤지션 적재의 위트 있는 편곡으로<br>
        자칫 대중에게 낯설 수 있는 블루스라는 장르를 보다 흥미롭게 풀어냈다.<br><br>


        3. Blueming<br><br>

        사랑을 주제로 한 가사 중 내가 가장 좋아하는 작품은 심수봉 선생님의 ‘백만 송이 장미’다.<br>
        미워하는 마음 없이 실천한 사랑의 결실을 한 송이 장미꽃으로 표현한 것이 나에게는 사랑에 대한 어떤 비유보다 시적이고 아름답게 느껴진다.<br><br>

        내가 단기간에 가장 많은 장미를 피워내는 시기는 사랑에 빠진 직후다.<br>
        마음을 고백하기 직전, 결정적인 딱 한 마디만을 제외한 세상의 모든 말을 사용해 상대에게 나의 감정을 가감 없이 표현하는 때. 휴대폰 진동 소리 한 번 한 번이 내 일상을 사정없이 흔드는 지진처럼 느껴지는 때. 필터링 없이 꺼낸 말 마디 마디가 사랑시가 되는 때. 이게 정말 내 머릿속에서 나온 게 맞나 싶은 낯선 결의 문장들이 쏟아져 나온다. 그 시기만큼은 백만 송이 장미를 거뜬히 피워낼 수 있을 것 같은 자신이 들 정도로 내 안에 사랑이 넘친다.<br>
        우리의 대화창 속 내 색깔처럼 새파아란 색의 장미를, 그 장미의 꽃말과 같은 ‘기적’을, 그 ‘불가능’에 가까운 결실을, 내가 이번에야말로 백만 송이 정도 피워낼 수 있을 것 같은 확신에 찬다.<br>
        아직 단 한 번도 성공해 본 적은 없지만.. <br><br>

        ‘스물셋’에서 재기 발랄한 사운드와 균형 있는 팀워크를 보여 준 이종훈, 이채규, 아이유 조합의 곡으로 Electro pop-rock이다. 개성 있는 신스 소스와 역동적인 밴드 사운드가 어우러져 유니크한 결과물을 만들어냈다. 뮤직비디오는 나이브 프로덕션이 트렌디한 연출로 프로젝트의 완성도를 높였다.<br><br>


        4. 시간의 바깥<br><br>

        8년 전, 미래에서 만나자는 아쉬운 약속을 남기고 헤어진 두 아이는 어떻게 됐을까?<br>
        그 드라마 속 주인공이었던 내가 이번엔 직접 작가가 되어 둘의 이야기를 완성 지어 주고 싶었다.<br>
        오랜 기다림 끝에 마침내 두 사람이 재회하게 되는 장소로 어디가 좋을까 한참 고민하다가, 시간이라는 제약 속에 너무 오랫동안 묶어 둔 게 미안해 아예 시계의 바깥으로 둘을 꺼내어 주면 어떨까 하는 생각이 들었다. 먼 길을 돌아 다시 만난 두 사람은 과거에 의존하지 않고 선 두 발로, 오직 지금의 순간만을 만끽하며, 서로를 바라보고 숨이 차도록 춤을 춘다.<br>
        이 음악이 끝나더라도 그들의 춤은 아마 계속 이어질 것이다.<br>
        단, 시간의 바깥에서. 우리가 더 이상은 알 수 없는<br>
        이 이야기의 바깥에서. <br><br>

        분홍신 이후 5년 만에 이민수 작곡가와 아이유가 다시 조우한 Ethnic fantasy 장르의 곡으로,<br>
        그때의 감성을 재연하기 위해 ‘너랑 나’ 뮤직비디오의 남자 주인공이었던 배우 이현우가 다시 한번 보다 성숙한 모습으로 열연, 아이유 fantasy 시리즈의 주역인 황수아 감독이 다시 뮤직비디오 연출을 맡는 등, 티져 공개 당시부터 8년 전 그들의 모습을 기억하는 팬들에게 감출 수 없는 큰 기대감을 안겼다.<br><br>


        5. 자장가<br><br>

        작년에 출연했던 김종관 감독님의 단편 영화 ‘밤을 걷다’에서 모티브를 얻어 작사한 곡이다. ‘깨고 나면 잊어버리게 될 꿈’이라는 소재가 신선하고 좋았다. 영화 속 지은을 연기하는 내내 ‘기억되지 않는 순간도 존재의 의미가 있을까’ 하는 고민을 하게 만든 작품이었다.<br>
        꿈을 꾸는 사람의 시점이 아닌 꿈속에 찾아온 사람의 시점에서 쓴 가사다. 깨고 나면 잊히게 될 꿈에 찾아와 마지막으로 사랑하는 이에게 자장가를 불러 잠을 재워 주고 떠나는 내용을 담았다. <br><br>

        밤편지의 작곡가, 신예 뮤지션 김희원의 R&amp;B 곡으로<br>
        피아노 선율과 아이유의 가창으로만 채워진 미니멀한 구성이지만 감정을 꾹꾹 담아낸 소리들이 쉴 틈 없는 몰입감을 선사한다<br><br>


        6. Love poem<br><br>

        “인간의 이타성이란 그것마저도 이기적인 토대 위에 있다. “<br>
         사랑하는 사람이 홀로 고립되어 가는 모습을 보는 것은 힘든 일이다.<br>
        아무것도 해 주지 못하고 지켜보기만 하는 것이 괴로워 재촉하듯 건넸던 응원과 위로의 말들을,<br>
        온전히 상대를 위해 한 일이라고 착각하곤 했다.<br>
        나는 여전히 누군가 내 사람이 힘들어하는 모습을 보면 참견을 잘 참지 못한다.<br>
        하지만 이제는 나의 그런 행동들이 온전히 상대만을 위한 배려나 위로가 아닌 그 사람의 평온한 일상을 보고 싶은 나의 간절한 부탁이라는 것을 안다.<br>
        염치 없이 부탁하는 입장이니 아주 최소한의 것들만 바라기로 한다.<br>
        이 시를 들어 달라는 것,<br>
        그리고 숨을 쉬어 달라는 것.<br><br>

        누군가의 인생을 평생 업고 갈 수 있는 타인은 없다. 하지만 방향이 맞으면 얼마든 함께 걸을 수는 있다. 또 배운 게 도둑질이라, 나는 나의 사랑하는 사람들에게 얼마든 노래를 불러 줄 수 있다.<br>
        내가 음악을 하면서 세상에게 받았던 많은 시들처럼 나도 진심 어린 시들을 부지런히 쓸 것이다.<br><br>

        그렇게 차례대로 서로의 시를 들어 주면서,<br>
        크고 작은 숨을 쉬면서, 살았으면 좋겠다. <br><br>

        아이유와는 뗄 수 없는 음악 파트너 이종훈 작곡가 특유의 팝스러운 멜로디와 생동감 있는 밴드 사운드가 어우러진 rock 음악이다.<br>
        편곡엔 홍소진, 적재 연주엔 아이유 밴드 (홍소진, 적재, 최인성, 김승호) 가 참여해 완성도를 높였다.<br>
        또한 아이유의 연습생 시절부터 각별한 동료애가 있는 것으로 알려진 실력파 선배 가수 하동균의 목소리가 메시지에 무게감을 더해준다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/D1PvIWdJ8xo"></iframe>
        <iframe src="https://youtube.com/embed/R3Fwdnij49o"></iframe>
        
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>unlucky</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 제휘</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 제휘</td>
            </tr>
            
            <tr>
                <td>2</td>
                <th>그 사람</th>
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
                <td>Arranged by 적재</td>
            </tr>
            <tr>
                <td>3</td>
                <th>Blueming &nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
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
                <th>시간의 바깥</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 이민수</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 이민수</td>
            </tr>
            
            <tr>
                <td>5</td>
                <th>자장가</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김희원</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by 홍소진</td>
            </tr>
            
            <tr>
                <td>6</td>
                <th>Love Poem &nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
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
                <td>Arranged by 홍소진, 적재</td>
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

