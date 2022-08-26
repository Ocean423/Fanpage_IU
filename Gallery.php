<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
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
    .mySlides {display:none}
    .img-1{
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-image: url(tw1.jpg);
        min-height: 400px;
    }
</style>
<body>
<?php
    session_start();
    include_once('connect.php');
    ?>
<!-- 메뉴(Navbar) -->
<div class="w3-top">
    <div id="myNavbar" class="w3-text-white  w3-deep-purple w3-opacity-min">
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
    
    
<!--첫 번째 패럴랙스 배경 -->
<div class="img-1 w3-display-container " id="galleryMain">
    <div class="w3-display-left" style="white-space: nowrap">
        <span class="w3-padding-large w3-text-white w3-black w3-opacity-min w3-wide w3-xxlarge" >GALLERY</span>
    </div>
</div>
    
<!-- Container (Discography Section) -->
<div class="w3-center w3-light-gray w3-container w3-padding-64" style="padding: 8%">
    <!--    앨범한줄-->
<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="images/20%EA%B9%80%ED%8F%AC5.jpg" style="width:100%; cursor:pointer"  onclick="openModal();currentDiv(1)" class="w3-hover-shadow">
      <div class="w3-container">
        <h5>200314 김포공항 도착</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="images/20%EB%B3%BC%EB%A5%A82.jpg" style="width:100%; cursor:pointer" onclick="openModal();currentDiv(10)" class="w3-hover-shadow">
      <div class="w3-container">
        <h5>200109 강한나의 볼륨을 높여요</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B810.jpg" style="width:100%; cursor:pointer" onclick="openModal();currentDiv(16)" class="w3-hover-shadow">
      <div class="w3-container">
        <h5>191128 러브포엠 영등포 팬싸인회</h5>
      </div>
    </div>
  </div>
</div>
    <!--    앨범한줄-->
<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="images/19%EB%9F%BD%EC%BD%98%EC%84%9C%EC%9A%B88.jpg" style="width:100%; cursor:pointer" onclick="openModal();currentDiv(26)" class="w3-hover-shadow">
      <div class="w3-container">
        <h5>191123 러브포엠투어 서울</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="images/19%EB%9F%BD%EC%BD%98%EA%B4%91%EC%A3%BC1.jpg" style="width:100%; cursor:pointer" onclick="openModal();currentDiv(34)" class="w3-hover-shadow">
      <div class="w3-container">
        <h5>191102 러브포엠투어 광주 앵앵콜</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="images/19%EB%B0%B1%EC%83%817.jpg" style="width:100%; cursor:pointer" onclick="openModal();currentDiv(39)" class="w3-hover-shadow">
      <div class="w3-container">
        <h5>190501 백상예술대상 레드카펫</h5>
      </div>
    </div>
  </div>
</div>
    <!--    앨범한줄-->
<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="images/19%EC%84%9C%EB%93%A0%ED%8C%AC%EB%AF%B8%ED%8C%856.jpg" style="width:100%; cursor:pointer" onclick="openModal();currentDiv(46)" class="w3-hover-shadow">
      <div class="w3-container">
        <h5>190429 서든어택 팬미팅</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%981.jpg" style="width:100%; cursor:pointer" onclick="openModal();currentDiv(54)" class="w3-hover-shadow">
      <div class="w3-container">
        <h5>190105 10주년콘서트 제주</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C9.jpg" style="width:100%; cursor:pointer" onclick="openModal();currentDiv(72)" class="w3-hover-shadow">
      <div class="w3-container">
        <h5>190104 김포공항 제주출발</h5>
      </div>
    </div>
  </div>
</div>
    
    
</div> <!-- 섹션하나 끝 -->
    
<!-- 모달창 -->
<div id="myModal" class="w3-modal w3-black">
<!--    모달닫기-->
 <span class="w3-text-white w3-xxlarge w3-hover-text-grey w3-container w3-display-topright" onclick="closeModal()" style="cursor:pointer">×</span>
 
<div class="w3-modal-content">

  <div class="w3-content" style="max-width:1200px">
   <img class="mySlides" src="images/20%EA%B9%80%ED%8F%AC5.jpg" style="width:100%" >
   <img class="mySlides" src="images/20%EA%B9%80%ED%8F%AC1.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EA%B9%80%ED%8F%AC2.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EA%B9%80%ED%8F%AC3.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EA%B9%80%ED%8F%AC4.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EA%B9%80%ED%8F%AC5.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EA%B9%80%ED%8F%AC6.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EA%B9%80%ED%8F%AC7.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EA%B9%80%ED%8F%AC8.jpg" style="width:100%">
   
   <img class="mySlides" src="images/20%EB%B3%BC%EB%A5%A82.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EB%B3%BC%EB%A5%A81.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EB%B3%BC%EB%A5%A83.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EB%B3%BC%EB%A5%A84.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EB%B3%BC%EB%A5%A85.jpg" style="width:100%">
   <img class="mySlides" src="images/20%EB%B3%BC%EB%A5%A86.jpg" style="width:100%">
      
   <img class="mySlides" src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B810.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B81.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B82.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B83.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B84.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B85.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B86.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B87.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B88.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%ED%8C%AC%EC%8B%B89.jpg" style="width:100%">
      
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EC%84%9C%EC%9A%B88.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EC%84%9C%EC%9A%B81.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EC%84%9C%EC%9A%B82.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EC%84%9C%EC%9A%B83.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EC%84%9C%EC%9A%B84.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EC%84%9C%EC%9A%B85.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EC%84%9C%EC%9A%B86.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EC%84%9C%EC%9A%B87.jpg" style="width:100%">
      
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EA%B4%91%EC%A3%BC1.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EA%B4%91%EC%A3%BC2.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EA%B4%91%EC%A3%BC3.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EA%B4%91%EC%A3%BC4.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%9F%BD%EC%BD%98%EA%B4%91%EC%A3%BC5.jpg" style="width:100%">
      
   <img class="mySlides" src="images/19%EB%B0%B1%EC%83%817.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%B0%B1%EC%83%811.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%B0%B1%EC%83%812.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%B0%B1%EC%83%813.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%B0%B1%EC%83%814.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%B0%B1%EC%83%815.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EB%B0%B1%EC%83%816.jpg" style="width:100%">
      
   <img class="mySlides" src="images/19%EC%84%9C%EB%93%A0%ED%8C%AC%EB%AF%B8%ED%8C%856.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%84%9C%EB%93%A0%ED%8C%AC%EB%AF%B8%ED%8C%851.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%84%9C%EB%93%A0%ED%8C%AC%EB%AF%B8%ED%8C%852.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%84%9C%EB%93%A0%ED%8C%AC%EB%AF%B8%ED%8C%853.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%84%9C%EB%93%A0%ED%8C%AC%EB%AF%B8%ED%8C%854.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%84%9C%EB%93%A0%ED%8C%AC%EB%AF%B8%ED%8C%855.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%84%9C%EB%93%A0%ED%8C%AC%EB%AF%B8%ED%8C%857.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%84%9C%EB%93%A0%ED%8C%AC%EB%AF%B8%ED%8C%858.jpg" style="width:100%">
      
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%981.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%982.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%983.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%984.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%985.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%986.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%987.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%988.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%989.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%9810.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%9811.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%9812.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%9813.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%9814.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%9815.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%9816.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%9817.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EC%A0%9C%EC%A3%BC%EC%BD%9818.jpg" style="width:100%">
      
   <img class="mySlides" src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C9.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C1.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C2.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C3.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C4.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C5.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C6.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C7.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C8.jpg" style="width:100%">
   <img class="mySlides" src="images/19%EA%B9%80%ED%8F%AC%EC%A0%9C%EC%A3%BC%EC%B6%9C%EB%B0%9C10.jpg" style="width:100%">
      
      
   
<!--      < > 아이콘-->
   <div class="w3-row w3-black w3-padding-32 w3-center">
    <div class="w3-display-container">
     <p id="caption"></p>
     <span class="w3-display-left w3-btn w3-xxlarge" onclick="plusDivs(-1)">❮</span>
     <span class="w3-display-right w3-btn w3-xxlarge" onclick="plusDivs(1)">❯</span>
    </div>
       
   </div> <!-- End row -->
  </div> <!-- End w3-content -->
  
 </div> <!-- End modal content -->
</div> <!-- End modal -->



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="#galleryMain" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>

    
<script>
//모달창 스크립트
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
    
    
</script>
    
</body>
</html>
