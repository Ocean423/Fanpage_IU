<!DOCTYPE html>
<html>
<head>
    <title>IU♥PAGE</title>
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
    
    .img-main {
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-image: url(images/%EC%8B%B1%EA%B0%80%ED%8F%B4%EA%B3%B5%EC%97%B01.jpg);
        min-height: 100%; /*img 화면전체 차지*/
    }
    .img-2 {
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-image: url(images/dna1.gif);
        min-height: 350px;
    }
    #about2{
        font-size: 40px;
    }
    #mainH{ /*메인 제목*/
        text-align: right;
        margin-right: 60px;
      
    }
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
    
    
</style>
    
<body>
    <?php
    session_start();
    include_once('connect.php');
    ?>
<!-- 메뉴(Navbar) -->
<div class="w3-top">
    <div id="myNavbar" class="w3-text-white w3-black w3-opacity">
        <a href="javascript:void(0)" onclick="scrolling(event,'#home')" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <a href="javascript:void(0)" onclick="scrolling(event,'#profile')" class="w3-bar-item w3-button w3-padding-large">PROFILE</a>
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

    
<!-- 첫번째 패럴랙스 배경 -->
<div class="img-main w3-display-container" id="home">
    <div class="w3-display-right" style="white-space: nowrap">
        <span id="mainH" class="w3-padding-large w3-text-white w3-wide w3-xlarge" >IU PAGE</span>
    </div>
</div>
    
<!-- Container (Profile Section) -->
<div class="w3-container w3-content w3-padding-64" id="profile">
    
    <div>
        <table style="padding: 40px; border: none">
        <tr>
            <th colspan="2" align="left" style="font-size: 50px;">아이유 IU</th>
        </tr>
        <tr>
            <td>본명</td>
            <td>이지은</td>
        </tr>    
        <tr>
            <td>출생</td>
            <td>1993년 5월 16일</td>
        </tr>
        <tr>
            <td>소속사</td>
            <td>EDAM엔터테인먼트</td>
        </tr>
        <tr>
            <td>데뷔</td>
            <td>2008년 미니 앨범 [Lost and Found]</td>
        </tr>   
        </table>
    </div>
    
    <div class="w3-cetner w3-padding-32">
        <p class="w3-center">IU</p>
        <p class="w3-center"><em>음악으로 너와 내가 하나가 된다</em></p>
        
    </div>
    
    
    <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button tablink w3-indigo" onclick="openCareer(event,'Album')">ALBUM</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCareer(event,'Drama')">DARAMA</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCareer(event,'Movie')">MOVIE</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCareer(event,'Award')">AWARD</button>
    </div>

<div id="Album" class="w3-container w3-border career">
    <table style="padding: 10px;">
        <tr style="text-align: center">
            <th>Title</th>
            <th>앨범명</th>
            <th>발매일</th>
        </tr>
        <tr>
            <td>에잇(Prod.&amp;Feat.SUGA of BTS)</td>
            <td>에잇</td>
            <td>2020.05.06</td>
        </tr>
        <tr>
            <td>마음을 드려요</td>
            <td>사랑의 불시착 OST</td>
            <td>2020.02.15</td>
        </tr>
        <tr>
            <td>첫 겨울이니까(with.성시경)</td>
            <td>첫 겨울이니까</td>
            <td>2019.12.09</td>
        </tr>
        <tr>
            <td>Blueming</td>
            <td rowspan="2">Love Poem</td>
            <td rowspan="2">2019.11.18</td>
        </tr>
        <tr>
            <td>Love poem</td>
        </tr>
        <tr>
            <td>삐삐</td>
            <td>삐삐</td>
            <td>2018.10.10</td>
        </tr>
        <tr>
            <td>가을 아침</td>
            <td  rowspan="2">꽃갈피 둘</td>
            <td  rowspan="2">2017.09.22</td>
        </tr>
        <tr>
            <td>잠 못드는 밤 비는 내리고</td>
        </tr>
        <tr>
            <td>팔레트(Feat. G-DRAGON)</td>
            <td rowspan="2">Palette</td>
            <td rowspan="2">2017.04.21</td>
        </tr>
        <tr>
            <td>이름에게</td>
        </tr>
        <tr>
            <td>사랑이 잘(With 오혁)</td>
            <td>사랑이 잘</td>
            <td>2017.04.07</td>
        </tr>
        <tr>
            <td>밤편지</td>
            <td>밤편지</td>
            <td>2017.03.24</td>
        </tr>
        <tr>
            <td>스물셋</td>
            <td>CHAT-SHIRE</td>
            <td>2015.10.23</td>
        </tr>
        <tr>
            <td>마음</td>
            <td>마음</td>
            <td>2015.05.18</td>
        </tr>
        <tr>
            <td>소격동</td>
            <td>소격동</td>
            <td>2014.10.22</td>
        </tr>
        <tr>
            <td>애타는 마음(with.울랄라세션)</td>
            <td>애타는 마음</td>
            <td>2014.06.30</td>
        </tr>
        <tr>
            <td>나의 옛날이야기</td>
            <td>꽃갈피</td>
            <td>2014.05.16</td>
        </tr>
        <tr>
            <td>봄 사랑 벚꽃 말고(with.하이포(HIGH4))</td>
            <td>봄 사랑 벚꽃 말고</td>
            <td>2014.04.08</td>
        </tr>
        <tr>
            <td>금요일에 만나요(Feat.장이정 of HISTORY)</td>
            <td>3집 Modern Times – Epilogue</td>
            <td>2013.12.20</td>
        </tr>
        <tr>
            <td>분홍신</td>
            <td>Mordern Times</td>
            <td>2013.10.08</td>
        </tr>
        <tr>
            <td>하루 끝</td>
            <td>스무 살의 봄</td>
            <td>2012.05.11</td>
        </tr>
        <tr>
            <td>너랑 나</td>
            <td>Last Fantasy</td>
            <td>2011.11.29</td>
        </tr>
        <tr>
            <td>얼음꽃(Feat.김세황)</td>
            <td>얼음꽃</td>
            <td>2011.06.21</td>
        </tr>
        <tr>
            <td>내 손을 잡아</td>
            <td>최고의 사랑 OST</td>
            <td>2011.05.25</td>
        </tr>
        <tr>
            <td>나만 몰랐던 이야기</td>
            <td>Real+</td>
            <td>2011.02.17</td>
        </tr>
        <tr>
            <td>좋은 날</td>
            <td>Real</td>
            <td>2010.12.09</td>
        </tr>
        <tr>
            <td>그대네요(with.성시경)</td>
            <td>그대네요</td>
            <td>2010.09.28</td>
        </tr>
        <tr>
            <td>사랑을 믿어요(with.유승호)</td>
            <td>사랑의 리퀘스트</td>
            <td>2010.08.02</td>
        </tr>
        <tr>
            <td>여자라서</td>
            <td>로드넘버원 OST</td>
            <td>2010.07.14</td>
        </tr>
        <tr>
            <td>잔소리(with.임슬옹)</td>
            <td>잔소리</td>
            <td>2010.06.03</td>
        </tr>
        <tr>
            <td>다섯째 손가락</td>
            <td> 텔레시네마 프로젝트 Vol.6 - 다섯째 손가락</td>
            <td>2010.02.24</td>
        </tr>
        <tr>
            <td>BOO</td>
            <td>Growing Up</td>
            <td>2009.04.23</td>
        </tr>
        <tr>
            <td>첫사랑이죠(with.나윤권)</td>
            <td>첫사랑이죠</td>
            <td>2010.01.12</td>
        </tr>
        <tr>
            <td>IU...IM</td>
            <td>2009.11.12</td>
        </tr> 
        <tr>
            <td>마시멜로우</td>
            <td>Growing Up</td>
            <td>2009.04.23</td>
        </tr>
        <tr>
            <td>미아</td>
            <td>Lost And Found</td>
            <td>2008.09.23</td>
        </tr>
    </table>
    
</div>

<div id="Drama" class="w3-container w3-border career" style="display:none">
    <table style="padding: 10px;">
        <tr style="text-align: center">
            <th>Title</th>
            <th>배역명</th>
            <th>방영년도</th>
        </tr>
        <tr>
            <td>호텔 델루나</td>
            <td>장만월(주연)</td>
            <td>2019</td>
        </tr>
        <tr>
            <td>나의 아저씨</td>
            <td>이지안(주연)</td>
            <td>2018</td>
        </tr>
        <tr>
            <td>달의 연인-보보경심 려</td>
            <td>해수(주연)</td>
            <td>2016</td>
        </tr>
        <tr>
            <td>프로듀사</td>
            <td>신디</td>
            <td>2015</td>
        </tr>
        <tr>
            <td>예쁜 남자</td>
            <td>김보통(주연)</td>
            <td>2013~2014</td>
        </tr>
        <tr>
            <td>최고다 이순신</td>
            <td>이순신(주연)</td>
            <td>2013</td>
        </tr>
        <tr>
            <td>드림하이</td>
            <td>김필숙(주연)</td>
            <td>2011</td>
        </tr>
    </table>
   
</div>

<div id="Movie" class="w3-container w3-border career" style="display:none">
    <table style="padding: 10px;">
        <tr style="text-align: center">
            <th>Title</th>
            <th>배역명</th>
            <th>개봉년도</th>
        </tr>
        <tr>
            <td>드림</td>
            <td>이소민(주연)</td>
            <td>2020</td>
        </tr>
        <tr>
            <td>아무도 없는 곳</td>
            <td>미영(주연)</td>
            <td>2019</td>
        </tr>
        <tr>
            <td>페르소나</td>
            <td>IU / 은 / 한나 / 지은(주연)</td>
            <td>2018</td>
        </tr>
        <tr>
            <td>리얼</td>
            <td>시상식 도우미(우정출연)</td>
            <td>2017</td>
        </tr>
        <tr>
            <td>새미의 어드벤쳐</td>
            <td>엘라(성우)</td>
            <td>2012</td>
        </tr>
        <tr>
            <td>초대받지 못한 손님</td>
            <td>아이유(주연)</td>
            <td>2011</td>
        </tr>
    </table>
</div>

<div id="Award" class="w3-container w3-border career" style="display:none">
    <table style="padding: 10px;">
         <tr>
            <td>지상파 3사 가요프로그램 1위 총 46회(~2018.11.09) 수상</td>
         </tr>
         <tr>
            <td>문화체육관광부 선정 - 11월의 우수 신인음반 EP 'Lost and Found'</td>
         </tr>
         <tr>
            <td>제25회 &lt;골든디스크&gt; - 디지털 음원 본상 '잔소리'</td>
         </tr>
         <tr>
            <td>제2회 &lt;멜론 뮤직 어워드&gt; - TOP 10</td>
         </tr>
         <tr>
            <td>제3회 &lt;멜론 뮤직 어워드&gt; - TOP 10, 베스트송상 '좋은 날'</td>
         </tr>
         <tr>
             <td>제13회 - 베스트 보컬 퍼포먼스 솔로</td>
         </tr>
         <tr>
            <td>&lt;제21회 하이원 서울가요대상&gt; - 본상, 최고 앨범상</td>
         </tr>
         <tr>
            <td>제14회 - 여자 가수상</td>
         </tr>
         <tr>
            <td>제4회 &lt;멜론 뮤직 어워드&gt; - TOP 10</td>
         </tr>
         <tr>
            <td>제5회 &lt;멜론 뮤직 어워드&gt; - TOP 10</td>
         </tr>    
         <tr>
            <td>2013 - 신인상, 베스트 커플상 '최고다 이순신'</td>
         </tr>
         <tr>
            <td>제6회 &lt;멜론 뮤직 어워드&gt; - TOP 10, 아티스트상</td>
         </tr>
         <tr>
            <td>2014 MAMA in HONGKONG - 여자가수상, 공로상</td>
         </tr>
         <tr>
            <td>2016 SBS SAF 연기대상 - 베스트 커플상 '달의 연인 - 보보경심 려'</td>
         </tr>
         <tr>
            <td>2017 MAMA in HONGKONG - 여자가수상</td>
         </tr>
         <tr>
            <td>제9회 &lt;멜론뮤직어워드&gt; - TOP 10, Song Writer상, 올해의 앨범상 'Palette'</td>
         </tr>
         <tr>
             <td>제32회 &lt;골든디스크&gt; - 디지털음원 본상, 디지털음원 대상 '밤편지'</td>
         </tr>
         <tr>
            <td>제27회 &lt;하이원 서울가요대상&gt; - 최고 앨범상</td>
         </tr>
         <tr>
            <td>제7회 &lt;가온차트 K-POP 어워드&gt; - 올해의 가수상 음원부문 3월, 4월, 올해의 롱런 음원상 '밤편지', 올해의 작사가상, 올해의 음반제작상 'Palette' (페이브엔터테인먼트)</td>
         </tr>
         <tr>
            <td>제15회 &lt;한국대중음악상&gt; - 최우수 팝 음반상 'Palette'</td>
         </tr>
         <tr>
            <td>제 6회 2018 아시아태평양 스타 어워즈 - 종편드라마 여자 최우수 연기상 '나의 아저씨'</td>
         </tr>
         <tr>
            <td>제8회 &lt;가온차트 K-POP 어워드&gt; - 올해의 가수상 음원부문 10월 '삐삐'</td>
         </tr>
         <tr>
            <td>제9회 &lt;가온차트 K-POP 어워드&gt; - 올해의 가수상 음원부문 11월 'Love poem'</td>
         </tr>
     </table>
</div>
    </div>

    
<!-- 두번째 패럴랙스 배경 -->
<div class="img-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle" style="white-space: nowrap">
        <span class="w3-wide w3-xxlarge w3-text-black" style="font-family: 'Staatliches'">OFFICIAL SNS</span>
        <div class="w3-center w3-black w3-xxlarge w3-section">
            <a href="https://www.facebook.com/iu.loen"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
            <a href="https://www.instagram.com/dlwlrma/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="https://twitter.com/_IUofficial"><i class="fa fa-twitter w3-hover-opacity"></i></a>
            <a href="https://www.youtube.com/dlwlrma"><i class="fa fa-youtube w3-hover-opacity"></i></a>
            <a href="https://channels.vlive.tv/FA895/home"><i class="fa fa-hand-peace-o w3-hover-opacity"></i></a>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>

    
<script>
    
//TAB
function openCareer(evt, careerName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("career");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-indigo", "");
  }
  document.getElementById(careerName).style.display = "block";
  evt.currentTarget.className += " w3-indigo";
}    
    

    
    
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
    
// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
    

    
// 화면을 부드럽게 스크롤링하기
function scrolling(evt, loc) {
    var menus, i;
    menus = document.getElementsByClassName("menu");
    for(i=0; i<menus.length; i++) {
        menus[i].className = menus[i].className.replace(" w3-red", "");
    }
    evt.currentTarget.className += " ";
    var offset = $(loc).offset();
    $('html, body').animate({scrollTop: offset.top}, 800);
}
</script>
</body>
</html>

