<html>
	<head>
		<title>Tarot</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	
	<body>
	
		<header id="header" class="alt">
			<div class="logo">
                <a href="index.php">Home</a>
            </div>
<?php
session_start();

if(isset($_SESSION["login"])){
    
}else{
    header("Location:index.php");
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
		
		<section id="banner" data-video="images/background">
			<div class="inner">
				<h1>塔羅牌占卜</h1>
				<p>簡短介紹</p>
				<a href="#one" class="button special scrolly">塔羅&塔牌介紹</a>
				<a href="#two" class="button special scrolly">遊戲說明</a>
				<a href="check.php" class="button special scrolly">遊戲開始</a>
				<a href="recommend.php" class="button special scrolly">相關商品推薦</a><br/>
				<br/>
				<br/><br/><br/><br/>
			</div>
		</section>

		<section id="one" class="wrapper style2">
-			<div class="inner">
-				<div class="grid-style">
-					<div>
-						<div class="box">
-							<div class="image fit">
-								<img src="images/tarot3.jpg" alt="" />
-							</div>
-							<div class="content">
-								<header class="align-center">
-									<h2>塔羅介紹</h2>
-								</header>
-								<hr/>
-								<p>
									<font size="4">
									塔羅牌在西方占卜系統中佔有一重要地位，其由來眾說紛紜，但最普遍的說法為源自十四世紀的義大利，至今已有七世紀的歷史，依然是許多人喜愛的占卜方式。<br>
-									<t>　　塔羅牌學理博大精深，與西方神祕學、神話故事密切相關，從創立之初即用以占卜，分析現今處境和預測未來，也有部分修行者藉塔羅牌解釋夢境與潛意識，分析自身身心靈狀況。</t>
									</font>
								</p>
-							</div>
-						</div>
-					</div>
-					<div>
-						<div class="box">
-							<div class="image fit">
-								<img src="images/tarotcard.jpg" alt="" />
-							</div>
-							<div class="content">
-								<header class="align-center">
-									<h2>塔牌介紹</h2>
-								</header>
-								<hr/>
-								<p>
									<font size="4">
									塔羅牌有固定的標準形式，共有78張，其中22張為主牌「大阿爾克納」，通稱「大牌」；剩餘的56張為「小阿爾克納」，通稱「小牌」。大牌代表較抽象、精神層面的原由，小牌則代表具體的事件，大小牌搭配占卜即能獲得最準確的結果。<br>
-									<t>　　小牌分為火、土、風、水四大元素，分別代表權杖、聖杯、寶劍與錢幣，這四樣要素能將世間萬物歸類其中，進而進行占卜。</t>
									</font>
								</p>
-							</div>
-						</div>
-					</div>
-				</div>
-			</div>
-		</section>
-		
-		
-		<section id="two" class="wrapper style2">
-			<div class="inner">
-				<div class="box">
-					<div class="image fit">
-						<img src="images/tarotgame.jpg" alt="" />
-					</div>
-					<div class="content">
-						<header class="align-center">
-							<h2>遊戲說明</h2>
-						</header>
-						<hr />					
-						<p align="center">
							<font size="4">
								Step1 - 選擇您想要諮詢的類別 →
-								Step2 - 在心中默想問題 →
-								Step3 - 抽選最有感應的一張牌 →
-								Step4 - 觀看解析
							</font>
						</p>
-					</div>
-				</div>
-			</div>
-		</section>

		<section class="wrapper style3">
			<div class="inner">
				<header class="align-center">
					<a href="#banner"  class="button special scrolly">Back To Top</a>	
				</header>
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
