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
        <a href="https://www.melon.com/album/detail.htm?albumId=2222587"><img src="images/%EA%B8%88%EC%9A%94%EC%9D%BC%EC%97%90%EB%A7%8C%EB%82%98%EC%9A%94%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">Modern Times - Epilogue</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>아이유가 선물하는 설렘 가득한 심장 박동, 달콤한 신곡을 더해 돌아온 정규 3집 완전판 : [Modern Times - Epilogue]<br><br>

        1년 5개월 만에 다시 한 번 차트를 석권하며 '음원 최강자'임을 입증했던 아이유 정규 3집 [Modern Times]의 리패키지 앨범이 12월 20일 공개된다. [Modern Times - Epilogue]라는 타이틀에 걸맞게 지난 정규 3집 관련 컨텐츠를 총망라하는 모습으로 재탄생한 이번 리패키지 앨범엔, 기존 앨범에 들어 있던 13곡 이 외에도 아이유가 작사, 작곡에 직접 참여한 신곡 두 곡이 추가되어 기대감을 높이고 있다. 빈티지한 장르를 표방했던 기존 앨범의 수록곡들과 편곡상의 통일감은 유지하되, 겨울과 어울리는 달콤한 분위기를 듬뿍 더한 "금요일에 만나요"와 "크레파스"를 통해 한층 성장한 싱어송라이터 아이유의 역량을 재확인할 수 있을 것이다.<br><br>

        또한 정규 3집 컨텐츠의 비공개 컷, Epilogue 등을 담은 DVD-1와 서울/부산에서 열린 아이유의 두 번째 단독 콘서트 'Modern Times' 실황을 담은 DVD-2, 그리고 스페셜 북클릿까지 포함된 이번 리패키지 앨범은, '1만장 한정'으로 발매되며 팬들에게 더욱 특별한 연말 선물이 될 예정이다.<br><br>

        1. "금요일에 만나요 (Feat. 장이정 of HISTORY)" (작사, 작곡 : 아이유 / 편곡 : 이종민) - 아이유가 직접 작사, 작곡한 타이틀 곡 "금요일에 만나요"는 아티스트 본인의 전매 특허인 기타 연주에, 한 번 들으면 흥얼거리게 되는 쉬운 미디움 템포 멜로디를 붙인 어쿠스틱 팝 곡이다. 후반부엔 스윙 편곡과 달달한 스캣을 더해 기존 정규 3집 앨범 수록곡들과 자연스러운 통일감을 갖추도록 했으며, 소속사 후배인 HISTORY의 메인 보컬 장이정이 피처링으로 참여하여 연말 시즌에 어울리는 사랑스러운 러브송이 완성되었다.<br><br>

        '"금요일에 만나요"는 이제 막 서로에게 반한 남녀의 어쩔 줄 모르는 설렘을 노래한 곡이다. 짧아서 더 설레고 가장 두근거린다는 연애 바로 직전 단계. 특히 여기저기 온통 빨갛고 파랗고 반짝거리는 요즘 같은 겨울에 하는 첫 데이트가 이렇지 않을까. 시작엔 잔잔한 기타 반주를, 후반부엔 스윙 리듬을 가미해 그 설레는 시기의 심장 박동 같은 리듬을 표현하고 싶었다.' - 아이유.<br><br>

        2. "크레파스 (드라마 '예쁜 남자' 삽입곡)" (작사 : 아이유 / 작곡, 편곡 : KZ, 전자맨) - 아이유가 출연 중인 드라마 ‘예쁜 남자’에 삽입되어 화제가 됐던 곡. 작곡가 KZ와 전자맨의 합작품으로, 보사노바 리듬에 스윙 브라스와 일렉트릭 피아노, 드럼, 퍼커션 등의 빈티지한 사운드를 입힌 스타일리쉬한 라운지 곡이다.<br><br>

        '생각만 해도 핑 어지러울 만큼 상대에게 푹 빠져버린 여자의 사랑 노래. 밑져도 상관 없으니 그냥 매일매일 좋아한다고 고백하고 싶은 마음. 상대방을 더 많이 좋아한다는 것은 서글프기도 하지만 어찌 보면 너무나 행복한 감정이기도 한 것 같다. 누군가를 그 정도로 좋아하는 것도 마음대로 되는 게 아니니까. 나는 감정에 있어서 만큼은 밍숭맹숭한 것보단 슬픔이든 기쁨이든 사랑이든 후회든 최고치를 경험해 보는 게 좋다고 생각한다.' - 아이유.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/EiVmQZwJhsA"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>금요일에 만나요 (Feat. 장이정 of HISTORY)&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
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
                <td>Arranged by 이종민</td>
            </tr>
            
            <tr>
                <td>2</td>
                <th>크레파스</th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by KZ,전자맨</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 아이유</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by kZ,전자맨</td>
            </tr>
            <tr>
                <td>3</td>
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
                <td>4</td>
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
                <td>5</td>
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
                <td>6</td>
                <th>분홍신</th>
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
                <td>7</td>
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
                <td>8</td>
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
                <td>9</td>
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
                <td>10</td>
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
                <td>11</td>
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
                <td>12</td>
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
                <td>13</td>
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
                <td>14</td>
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
                <td>15</td>
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

