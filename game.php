<?php
session_start();
if(isset($_SESSION["login"])){
    
}else{
    header("Location:game.php");
}
?>

<html>	
	<head>
		<title>Tarot game start</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<header id="header">
			<div class="logo">
				<a href="index.php">Home</a>
			</div>
			<a href="logout.php">登出</a> /
			<a href="member.php">會員專區</a>
			<a href="#menu" class="toggle"><span>Menu</span></a>
		</header>

		<nav id="menu">
			<ul class="links">
				<li><a href="index.php">首頁</a></li>
				<li><a href="check.php">遊戲開始</a></li>
				<li><a href="recommend.php">相關商品推薦</a></li>
			</ul>
		</nav>

		<section id="one" class="wrapper style2">
			<div class="inner">
				<div class="box">
					<div class="image fit">
						<img src="images/gamebg.jpg" alt="" />
					</div>
					<div class="content">
						<header class="align-center">
							<h2>遊戲開始</h2>
						</header>
						<hr />
						<font color="black" size='4'>
						<form >
						請選擇諮詢類別：
							<input type="radio" name="category" value="love" id="love"><label for="love">愛情</label>
							<input type="radio" name="category" value="friend" id="friend"><label for="friend">人際</label>
							<input type="radio" name="category" value="school" id="school"><label for="school">課業</label>
							<input type="radio" name="category" value="business" id="business"><label for="business">事業</label>
							<input type="radio" name="category" value="health" id="health"><label for="health">健康</label>
							<br/>
						請於心中默想問題並從下面抽選最有感應的一張卡片<br/>
							<input type="radio" name="card" value="1" id="1"><label for="1"></label>
							<input type="radio" name="card" value="2" id="2"><label for="2"></label>
							<input type="radio" name="card" value="3" id="3"><label for="3"></label>
							<input type="radio" name="card" value="4" id="4"><label for="4"></label>
							<input type="radio" name="card" value="5" id="5"><label for="5"></label>
							<input type="radio" name="card" value="6" id="6"><label for="6"></label>
							<input type="radio" name="card" value="7" id="7"><label for="7"></label>
							<input type="radio" name="card" value="8" id="8"><label for="8"></label>
							<input type="radio" name="card" value="9" id="9"><label for="9"></label>
							<input type="radio" name="card" value="10" id="10"><label for="10"></label>
							<input type="radio" name="card" value="11" id="11"><label for="11"></label>
							<input type="radio" name="card" value="12" id="12"><label for="12"></label>
							<input type="radio" name="card" value="13" id="13"><label for="13"></label>
							<input type="radio" name="card" value="14" id="14"><label for="14"></label>
							<input type="radio" name="card" value="15" id="15"><label for="15"></label>
							<input type="radio" name="card" value="16" id="16"><label for="16"></label>
							<input type="radio" name="card" value="17" id="17"><label for="17"></label>
							<input type="radio" name="card" value="18" id="18"><label for="18"></label>
							<input type="radio" name="card" value="19" id="19"><label for="19"></label>
							<input type="radio" name="card" value="20" id="20"><label for="20"></label>
							<input type="radio" name="card" value="21" id="21"><label for="21"></label>
							<input type="radio" name="card" value="22" id="22"><label for="22"></label>
							<br/>
						您選擇的卡牌為：<br/>
						解析：<br/>
						</form>
						</font>
					</div>
				</div>
			</div>
		</section>
			
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
