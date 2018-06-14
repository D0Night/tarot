<html>
	<head>
		<title>Tarot recommend</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<header id="header">
			<div class="logo">
                <a href="index.php">Home</a>
            </div>
<?php
session_start();

if(isset($_SESSION["login"])){
    
}else{
    header("Location:recommend.php");
}
			
if(isset($_SESSION["login"])){
    echo "<a href='logout.php'>登出</a>/";
    echo "<a href='member.php'>會員專區</a>";
}else{
    echo "<a href='login.html'>登入</a>/";
    echo "<a href='enroll.html'>註冊</a>";
}

?>
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
					<img src="images/rebg.jpg" alt="" />
				</div>
				<div class="content">
					<header class="align-center">
						<h2>相關商品推薦</h2>
					</header>
					<hr>
					<p><span class="image left"><img src="images/re01.jpg" alt="" /></span>
					<h3><b><dt>塔羅葵花寶典12周年紀念版：從牌義、牌陣到解牌入門</dt></b></h3>
					<p><b>作者：向日葵　出版社：尖端<br>
							暢銷塔羅牌入門書，初學者的最佳選擇！</b></p>
						<dd>
							此書從正位的解釋出發，轉換角度看看逆位，即使是初學者也能快速掌握塔羅牌義，解牌更輕鬆精準。<br>
							<br>
							<ul class="actions">
								<li><a href="https://goo.gl/wGVVJH" class="button alt "><font color="gray">前往購買</font></a></li>
							</ul>
						</dd>
					</p>
					<br>
					<br>
					<hr>
					<p><span class="image left"><img src="images/re04.jpg" alt="" /></span>
					<h3><b><dt>塔羅入門經典牌陣</dt></b></h3>
					<p><b>作者：丹尼爾　出版社：尖端<br>
							初學者入門必學牌陣，簡易教學一學就通！</b></p>
						<dd>
							從普遍用途牌陣學起，針對想詢問的問題對症下藥。<br>
							裡面有各種豐富的牌陣類型，更有各牌陣可能詢問的類似問題舉例，讓您更能明白何種問題可使用什麼樣的牌陣。 <br>
							
							<ul class="actions">
								<li><a href="https://goo.gl/2wjsLT" class="button alt "><font color="gray">前往購買</font></a></li>
							</ul>
						</dd>
					</p>
					<br>
					<br>
					<hr>
					<p><span class="image left"><img src="images/re02.jpg" alt="" /></span>
					<h3><b><dt>古埃及神圖塔羅牌：進入智慧殿堂的解密之徑</dt></b></h3>
					<p><b>作者：白中道、許秋惠　出版社：新星球<br>
							深度剖析每張牌的意義，探究古埃及神圖與神祕學體系的關聯。</b></p>
						<dd>
							追溯塔羅牌傳承和起源，並進入埃及古文明，深入每張牌中的神話背景、象徵原型及核心意義。<br>
							<br>
							<ul class="actions">
								<li><a href="https://goo.gl/vPfJkn" class="button alt "><font color="gray">前往購買</font></a></li>
							</ul>
						</dd>
					</p>
					<br>
					<br>
					<hr>
					<p><span class="image left"><img src="images/re03.jpg" alt="" /></span>
					<h3><b><dt>天使塔羅牌</dt></b></h3>
					<p><b>作者：朵琳．芙秋、雷德里．瓦倫坦　譯者：王培欣　出版社：生命潛能<br>
							以大天使、精靈、獨角獸、人魚和龍重新詮釋塔羅奧義。</b></p>
						<dd>
							過濾傳統塔羅中較為負面不安的圖像僅保留其牌義，增添美麗的象徵與精準正面的關鍵字，能夠用來解讀生活中所有面向的問題。<br>
							<br>
							<ul class="actions">
								<li><a href="https://goo.gl/Ye8k1e" class="button alt "><font color="gray">前往購買</font></a></li>
							</ul>
						</dd>
					</p>

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
