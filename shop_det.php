<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
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
    .img-1{
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-image: url(images/tw2.jpg);
        min-height: 400px;
    }
    #goods{
        margin-bottom: 5%;
    }
    .sidebar{
        display: inline-block;
        position: sticky;
        margin-left: 0%;
        top: 30px;
        width: 80px;
        height: 80px;
    }
    .container{
        margin-left: 15%;
    }
    .imgSlide{
        padding: 5%;
        padding-bottom: 5%;
        padding-top: 5%;
    }
    .orderDet{
        border-collapse: collapse;
    }
    .orderDet td{
        border: 1px solid lightgray;
    }
    .orderTable{
        border: none;
    }
    
    td:nth-child(1) {width: 100px;}
    td:nth-child(2) {width: 500px;}
    
    td{
        text-align: left;
        padding-left: 5px;
    }
    th{
        font-size: 25px;
    }
    .goodsTitle p{
        margin: 5%;
        margin-bottom: 5%;
        margin-top: 5%;
        text-align: justify;
        font-size: 40px;
    }
    .detTail{
        margin: 10%;
    }
    .detTail table{
        margin-left: 25%;
        margin-right: 25%;
    }
    .orderTable{
        margin-top: 10%;
        padding: 5%;
    }
    hr{
        color: black;
    }
    .btn{
        margin: 5px;
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
    
    
<!--첫 번째 패럴랙스 배경 -->
<div class="img-1 w3-display-container " id="shopMain">
    <div class="w3-display-right" style="white-space: nowrap">
        <span class="w3-padding-large w3-text-white w3-black w3-opacity-min w3-wide w3-xxlarge" >GOODS SHOP</span>
    </div>
</div>

<!--first section -->
<div class="w3-center w3-container " id="goods">
    
<!-- Sidebar -->
<div class="sidebar w3-left w3-light-grey w3-bar-block" style="width:15%">
  <h3 class="w3-bar-item">PRODUCT</h3>
  <a href="javascript:void(0)" onclick="location.href='shop.html #album'" class="w3-bar-item w3-button">ALBUM</a>
  <a href="javascript:void(0)" onclick="location.href='shop.html #eight'" class="w3-bar-item w3-button">EIGHT</a>
  <a href="javascript:void(0)" onclick="location.href='shop.html #april'" class="w3-bar-item w3-button">APRIL, 2020</a>
  <a href="javascript:void(0)" onclick="location.href='shop.html #lovePoem'" class="w3-bar-item w3-button">LOVE POEM</a>
</div>
       
    
<div class="container">
    <?php
        $name = $_GET['name'];
        $theme = $_GET['theme']; 
        $tag = $_GET['tag'];
    
		$sql = "select * from products where name = '$name' and theme = '$theme'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
    ?>
    <div class="goodsTitle">
        <p><?=$row['theme']?> > <?=$row['name']?></p>
    </div> 
    
    <div class="detHead w3-container">
        <!--  슬라이드쇼-->
        <div class="imgSlide w3-content w3-half">
          <img class="mySlides" src="<?=$row['photo1']?>" style="width:100%">
          <img class="mySlides" src="<?=$row['photo2']?>" style="width:100%; display:none">
          <img class="mySlides" src="<?=$row['photo3']?>" style="width:100%; display:none">
          <img class="mySlides" src="<?=$row['photo4']?>" style="width:100%; display:none">
          <img class="mySlides" src="<?=$row['photo5']?>" style="width:100%; display:none">

          <div class="w3-row-padding w3-section">
            <div class="w3-col s6" style="width: 100px; height: 100px">
              <img class="demo w3-opacity w3-hover-opacity-off" src="<?=$row['photo1']?>" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
            </div>
            <div class="w3-col s6" style="width: 100px; height: 100px">
              <img class="demo w3-opacity w3-hover-opacity-off" src="<?=$row['photo2']?>" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
            </div>
            <div class="w3-col s6" style="width: 100px; height: 100px">
              <img class="demo w3-opacity w3-hover-opacity-off" src="<?=$row['photo3']?>" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
            </div>
            <div class="w3-col s6" style="width: 100px; height: 100px">
              <img class="demo w3-opacity w3-hover-opacity-off" src="<?=$row['photo4']?>" style="width:100%;cursor:pointer" onclick="currentDiv(4)">
            </div>
            <div class="w3-col s6" style="width: 100px; height: 100px">
              <img class="demo w3-opacity w3-hover-opacity-off" src="<?=$row['photo5']?>" style="width:100%;cursor:pointer" onclick="currentDiv(5)">
            </div>
          </div>
        </div> <!-- slide end -->

        <!--구매 table-->
        <form action="addcart.php" method="get">
        <div class=" w3-content w3-half">    
            <table class="orderTable" style="padding: 40px; background-color:lightgray">
                <tr>
                    <th colspan="2" align="left"><?=$row['name']?></th>
                    <input type="text" name="name" value="<?=$row['name']?>" readonly hidden>
                </tr>
                <tr>
                    <td class="">판매가</td>
                    <td><?=$row['price']?></td>
                    <input type="text" name="price" value="<?=$row['price']?>" readonly hidden>
                </tr>    
                <tr>
                    <td rowspan="2">배송비</td>
                    <td>2500원</td>
                </tr>
                <tr>
                    <td>택배(제주 및 도서산간지역은 추가배송비가 부과됩니다)</td>
                </tr>
                <tr>
                    <td>제조사</td>
                    <td>EDAM ent.</td>
                </tr>
                <tr>
                    <td>원산지</td>
                    <td>KOREA</td>
                </tr>
                <?php
                    if($row['option1'] != null){
                ?>
                <tr>
                    <td>옵션</td>
                    <td>
                        <form action="#" method="get">
                           <fieldset>
                               <input type="radio" name="option" checked value="<?=$row['option1']?>"><?=$row['option1']?><br>
                               <input type="radio" name="option" value="<?=$row['option2']?>"><?=$row['option2']?><br>
                               <?php 
                               if($row['option3'] != null){?>
                               <input type="radio" name="option" value="<?=$row['option3']?>"><?=$row['option3']?>
                               <?php }?>
                           </fieldset>
                        </form>
                    </td>
                </tr>
                <?php }
                    else{
                ?>
                    <input type="text" name="option" value=" " readonly hidden>
                <?php } ?>
                   
                <tr>
                    <td>수량</td>
                    <td>
                        <input class="w3-input w3-border" type="number" name="qty" value="1" style="width: 100px">
                        
                    </td>
                </tr> 
            </table>
            <hr>
            <?php 
                if($tag == 'Sold out'){
            ?>
                <div style="margin-right: 10%">
                    <button type="button" class="btn w3-button w3-red w3-hover-dark-grey w3-round-large w3-right">Sold Out</button>
                </div>
            <?php } 
                else { ?>
                <div style="margin-right: 10%">
                    <button type="submit" class="btn w3-button w3-black w3-hover-dark-grey w3-round-large w3-right">장바구니</button>
                    <button type="button" class="btn w3-button w3-black w3-hover-dark-grey w3-round-large w3-right" onclick="location.href='#'">구매</button>
            </div>
            <?php } ?>
                
            
        </div> <!-- table end -->
        </form>
    </div> <!--detHead end -->
    
        
    <div class="detBody w3-container">
        <h3 style="width: 100%">상품 상세정보</h3>
        <img src="<?=$row['det']?>" style="width: 70%">
        <img src="<?=$row['det2']?>" style="width: 70%">
    </div>
    <?php } ?>
        <?php } ?>
</div> <!-- container end -->
</div> <!-- all section box end -->
    
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="#shopMain" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>
    
<script>
    
//슬라이드
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
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
}
</script>

    
</body>
</html>
