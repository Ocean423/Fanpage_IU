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
        background-image: url(images/%EA%B7%B8%EB%9D%BC%EB%8D%B0%EC%9D%B4%EC%85%982.jpg);
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
        <a href="https://www.melon.com/album/detail.htm?albumId=2263452"><img src="images/%EC%95%A0%ED%83%80%EB%8A%94%20%EB%A7%88%EC%9D%8C%20%EC%BB%A4%EB%B2%84.jpg"></a>
    </div>
    <div class="content w3-center" style="width: 100%">
        <h1 class="albumTitle" style="font-family: Staatliches">애타는 마음</h1>
    </div>
    
    <div class="albumInfo">
        <h3>INFOMATION</h3>
        <p>울랄라세션X아이유  / ULALASESSION  X  IU [애타는 마음]<br><br>

            가수 거미, 휘성, 이지영 등 국내 최정상의 아티스트들과 함께 해 화제를 모으고 있는 최갑원 프로듀서 프로젝트 '더 리릭스(The Lyrics)'의 다섯번째 작품 "애타는 마음"이 울랄라세션, 아이유의 목소리로 발표되었다. "애타는 마음"은 좋은 가사로 좋은 음악을 전하겠다는 취지로 진행되고 있는 최갑원 프로듀서의  '더 리릭스' 다섯번째 프로젝트 곡으로 소유X정기고 "썸"을 만든 인기 작곡가 김도훈과 한국 작곡가 최초로 일본 오리콘 차트 1위곡을 만든 작곡가 PJ가 공동작곡했으며, 최갑원이 가사를 썼다. '더 리릭스' 프로젝트는 지난 2012년 휘성과 이승우(소울스타)가 함께한 프로젝트 1탄 "감기라도 걸릴까"를 시작으로, 영지와 이규훈(소울스타)이 함께한 2탄 "행복해라", 그룹 '빅마마' 출신 이지영과 힙합 그룹 '팬텀 (Phantom)'의 한해가 래퍼로 참여한 3탄 "불편한 진실", 거미가 부르고 이시영이 내레이션을 한 4번째 작품 "내 생각날 거야" 등을 공개해, 대중성과 음악성을 겸비했다는 평을 받은 바 있다.<br><br>

            최고의 퍼포먼스형 보컬 그룹으로 인기를 모으고 있는 울랄라세션과 탁월한 가창력을 자랑하는 아이유가 만나 어떤 결과물을 만들어 냈을지 벌써부터 시선이 집중되고 있다. 최갑원 프로듀서를 비롯해, 김도훈 작곡가, 울랄라세션, 아이유 모두 음원에서 강한 면을 보여왔다는 점 역시 곡에 대한 기대감을 상승시키고 있다. "애타는 마음"은 바닷가, 청량감, 풋풋함이란 단어가 가진 이미지를 토대로 80년대 해변에서 벌어지는 가요제에 출전한 그룹의 복고 사운드를 재연시키자라는 최갑원 프로듀서의 아이디어에서 만들어진 곡이며, 음악의 전반부의 테마로 나오는 신스는 복고적인 스타일을 보는 것이 아니라 듣게 해주며 80년대의 느낌을 나타내기 위해 구성한 악기편성이 돋보인다.<br><br>

            이 곡에 담겨 있는 2년 전 아이유의 목소리는 사랑스럽고 상큼, 톡톡 튀는 보컬로 곡의 분위기를 잘 표현해냈으며 울랄라세션의 보컬과 랩은 80년대 정서를 담고자 의도적으로 조금은 촌스럽고 유치하게 이야기를 풀어낸 가사가 가지고 있는 과장스러움과 재미를 잘 살려낸 곡이다. 이 곡은 지난 2012년 겨울 녹음을 마치고 이듬해 발표 예정이었으나, 당시 암 투병 중이던 울랄라세션의 멤버 고(故) 임윤택이 사망하면서 발표 시기가 잠정 연기됐다. 이후 더 리릭스 측은 고인이 마지막까지 보였던 음악에 대한 열정이 상업적인 이슈가 되지 않길 바라는 마음을 담아 올 여름 발표키로 확정했다. 따라서 이 노래는 고인의 마지막 음성이 담긴 음원으로, 고인을 그리워하는 팬들에게는 뜻 깊은 선물이 될 전망이다.</p>
    </div>
    
    <div class="video">
        <h3>VIDEO</h3>
        <iframe src="https://youtube.com/embed/fPbST5l6fh0"></iframe>
    </div>
    
    <div class="track">
        <h3>TARCK</h3>
        <table>
            <tr>
                <td>1</td>
                <th>애타는 마음&nbsp; &nbsp; &nbsp;<span class="tag w3-tag w3-round w3-black">title</span></th>
            </tr>
            <tr>
                <td></td>
                <td>Composed by 김도훈, PJ</td>
            </tr>
            <tr>
                <td></td>
                <td>Lyrics by 최갑원</td>
            </tr>
            <tr>
                <td></td>
                <td>Arranged by PJ</td>
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

