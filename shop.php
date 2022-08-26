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
    .goodsTheme{
        text-align: left;
        font-size: 40px;
        margin: 2%;
        margin-top: 5%;
        margin-bottom: 5%;
    }
    .albumCover{
        cursor:pointer;
    }
    .albumTitle{
        text-align: left;
        padding-left: 8%;
        color: dimgray;
    }
    .albumPrice{
        text-align: left;
        margin-left: 8%;
        color: black;
        font-weight: bold;
        
    }
    .tag{
        float: left;
        margin-left: 8%;
    }
    
/*  hover 줌 효과*/
    .album{
        position: relative;
        margin: auto;
        overflow: hidden;
    }
    .album img{
        max-width: 100%;
        transition: all 0.3s;
        display: block;
        width: 100%;
        height: auto;
        transform: scale(1);
    }
    .album:hover img{
        transform: scale(1.1);
    }
    
</style>
<body>
<?php
    session_start();
    include_once('connect.php');
    ?>
<!-- 메뉴(Navbar) -->
<div class="w3-top">
    <div id="myNavbar" class="w3-text-black w3-yellow w3-opacity-min">
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
  <a href="javascript:void(0)" onclick="scrolling(event,'#album')" class="w3-bar-item w3-button">ALBUM</a>
  <a href="javascript:void(0)" onclick="scrolling(event,'#eight')" class="w3-bar-item w3-button">EIGHT</a>
  <a href="javascript:void(0)" onclick="scrolling(event,'#april')" class="w3-bar-item w3-button">APRIL, 2020</a>
  <a href="javascript:void(0)" onclick="scrolling(event,'#lovePoem')" class="w3-bar-item w3-button">LOVE POEM</a>
</div>
    
<div class="container">
    
    <h3 class="goodsTheme" style="padding-top: 5px" id="album">ALBUM</h3>
    <div class="albumFrame w3-row-padding w3-center">
        <?php
		$sql = "select * from products where theme = 'ALBUM'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
		?>
        <div class="album w3-col m3">
            <img src="images/<?=$row['photo1']?>" style="width: 80%;" onclick = "location.href = 'shop_det.php?name=<?=$row['name']?>&theme=<?=$row['theme']?>&tag=<?=$row['tag']?>'" class="albumCover">
            
            <div class="info">
                <p class="albumTitle"><?=$row['name']?></p>
                <p class="albumPrice"><?=$row['price']?>원</p>
            <?php
                if($row['tag'] == 'New'){
             ?>
                <p><span class="tag w3-tag w3-round w3-blue">New!</span></p>
            <?php
                }
                else if($row['tag'] == 'Sold out'){
            ?>
                <p><span class="tag w3-tag w3-round w3-red">Sold Out</span></p>
            <?php
                }
                else if($row['tag'] == 'Hot'){
            ?>
                <p><span class="tag w3-tag w3-round w3-orange">Hot</span></p>
            <?php
                }
            ?>
            </div>
        </div>
            <?php } ?>
        <?php } ?>
    </div> <!-- one Theme end -->
    
    <hr>
    
    <h3 class="goodsTheme" style="padding-top: 5px" id="eight">EIGHT</h3>
    <div class="albumFrame w3-row-padding w3-center">
        <?php
		$sql = "select * from products where theme = 'EIGHT'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
		?>
        <div class="album w3-col m3">
            <img src="images/<?=$row['photo1']?>" style="width: 80%;" onclick = "location.href = 'shop_det.php?name=<?=$row['name']?>&theme=<?=$row['theme']?>&tag=<?=$row['tag']?>'" class="albumCover">
            
            <div class="info">
                <p class="albumTitle"><?=$row['name']?></p>
                <p class="albumPrice"><?=$row['price']?>원</p>
            <?php
                if($row['tag'] == 'New'){
             ?>
                <p><span class="tag w3-tag w3-round w3-blue">New!</span></p>
            <?php
                }
                else if($row['tag'] == 'Sold out'){
            ?>
                <p><span class="tag w3-tag w3-round w3-red">Sold Out</span></p>
            <?php
                }
                else if($row['tag'] == 'Hot'){
            ?>
                <p><span class="tag w3-tag w3-round w3-orange">Hot</span></p>
            <?php
                }
            ?>
            </div>
        </div>
            <?php } ?>
        <?php } ?>
    </div> <!-- one Theme end -->
    <hr>
    <h3 class="goodsTheme" style="padding-top: 5px" id="april">APRIL, 2020</h3>
    <div class="albumFrame w3-row-padding w3-center">
        <?php
		$sql = "select * from products where theme = 'APRIL, 2020'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
		?>
        <div class="album w3-col m3">
            <img src="images/<?=$row['photo1']?>" style="width: 80%;" onclick = "location.href = 'shop_det.php?name=<?=$row['name']?>&theme=<?=$row['theme']?>&tag=<?=$row['tag']?>'" class="albumCover">
            
            <div class="info">
                <p class="albumTitle"><?=$row['name']?></p>
                <p class="albumPrice"><?=$row['price']?>원</p>
            <?php
                if($row['tag'] == 'New'){
             ?>
                <p><span class="tag w3-tag w3-round w3-blue">New!</span></p>
            <?php
                }
                else if($row['tag'] == 'Sold out'){
            ?>
                <p><span class="tag w3-tag w3-round w3-red">Sold Out</span></p>
            <?php
                }
                else if($row['tag'] == 'Hot'){
            ?>
                <p><span class="tag w3-tag w3-round w3-orange">Hot</span></p>
            <?php
                }
            ?>
            </div>
        </div>
            <?php } ?>
        <?php } ?>
    </div> <!-- one Theme end -->
    <hr>
    
    <h3 class="goodsTheme" style="padding-top: 5px" id="lovePoem">Love Poem</h3>
    <div class="albumFrame w3-row-padding w3-center">
        <?php
		$sql = "select * from products where theme = 'Love Poem'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
		?>
        <div class="album w3-col m3">
            <img src="images/<?=$row['photo1']?>" style="width: 80%;" onclick = "location.href = 'shop_det.php?name=<?=$row['name']?>&theme=<?=$row['theme']?>&tag=<?=$row['tag']?>'" class="albumCover">
            
            <div class="info">
                <p class="albumTitle"><?=$row['name']?></p>
                <p class="albumPrice"><?=$row['price']?>원</p>
            <?php
                if($row['tag'] == 'New'){
             ?>
                <p><span class="tag w3-tag w3-round w3-blue">New!</span></p>
            <?php
                }
                else if($row['tag'] == 'Sold out'){
            ?>
                <p><span class="tag w3-tag w3-round w3-red">Sold Out</span></p>
            <?php
                }
                else if($row['tag'] == 'Hot'){
            ?>
                <p><span class="tag w3-tag w3-round w3-orange">Hot</span></p>
            <?php
                }
            ?>
            </div>
        </div>
            <?php } ?>
        <?php } ?>
    </div> <!-- one Theme end -->
    

</div> <!-- container end -->
</div> <!-- all section box end -->
    
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="#shopMain" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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