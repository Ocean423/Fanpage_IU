<!DOCTYPE html>
<html>
<head>
    <title>MyPage</title>
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
        background-image: url(w1.jpg);
        min-height: 400px;
    }
    
    #goods {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                margin-bottom: 5%;
                width: 100%;
            }
    #goods td, #goods th {
                border: 1px solid #ddd;
                padding: 8px;
            }
    #goods tr:nth-child(even){background-color: #f2f2f2;}
    #goods tr:hover {background-color: #ddd;}
    #goods th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #4CAF50;
        color: white;
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
        <a href="Shop.php" class="w3-bar-item w3-button w3-padding-large">SHOP</a>
      
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
<div class="img-1 w3-display-container " id="myPageMain">
    <div class="w3-display-right" style="white-space: nowrap">
        <span class="w3-padding-large w3-text-white w3-black w3-opacity-min w3-wide w3-xxlarge" >MyPage</span>
    </div>
</div>

<!--first section -->
<div class="w3-center w3-container " id="goods">
    
<!-- Sidebar -->
<div class="sidebar w3-left w3-light-grey w3-bar-block" style="width:15%">
  <h3 class="w3-bar-item">MENU</h3>
  <a href="javascript:void(0)" onclick="scrolling(event,'#cart')" class="w3-bar-item w3-button">장바구니</a>
  <a href="javascript:void(0)" onclick="location.href = 'mypage_mod.php'" class="w3-bar-item w3-button">정보수정</a>
  <a href="javascript:void(0)" onclick="location.href = 'mypage_order.php'" class="w3-bar-item w3-button">주문처리</a>
</div>
    
<div class="container">
    
    <h3 class="goodsTheme" style="padding-top: 5px" id="cart">장바구니</h3>
    <div class="albumFrame w3-row-padding w3-center">
    <?php
		$sql = "select * from cart where email = '$email'";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
    ?>
	<table id="goods">
		<tr>
			<th>NO</th><th>Goods</th><th>Option</th><th>Qty</th><th>Price</th>
		</tr>
		<?php
		while($row = $result->fetch_assoc()) {
		?>
		<tr>
            <td><?=$row['no']?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['option']?></td>
			<td><?=$row['qty']?></td>
            <td><?=$row['amount']?></td>
		</tr>
		<?php } ?>
	</table>
        
	
		<button type="submit" class="btn" onclick="location.href='order.php'">주문</button>
	
	<?php
		}
		else {
			echo "장바구니에 담긴 상품이 없어요!";
		}
		?>
        
    </div> <!-- one Theme end -->
    

</div> <!-- container end -->
</div> <!-- all section box end -->
    
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="#myPageMain" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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
