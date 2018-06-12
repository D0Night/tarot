<html>	
	<head>
		<title>Check</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<header id="header">
			<div class="logo">
				<a href="index.html">Tarot</a> / 
				<a href="login.html">Login</a> / 
	    			<a href="enroll.html">Sign up</a>
			</div>
			<a href="#menu" class="toggle"><span>Menu</span></a>
		</header>

		<nav id="menu">
			<ul class="links">
				<li><a href="index.html">首頁</a></li>
				<li><a href="login.html">登入</a></li>
				<li><a href="logout.php">登出</a></li>
				<li><a href="game.html">遊戲開始</a></li>
				<li><a href="recommend.html">相關商品推薦</a></li>
			</ul>
		</nav>

		<section id="one" class="wrapper style4">
			<div class="content">
				<header class="align-center">
					<h2>
<?php
session_start();

if($_SESSION["login"]==true){
	header("Location:game.html");
}else{
	echo("若要開始遊戲請先登入</br><a href='login.php'>請點此進入登入頁面</a>");
}	
?>
					</h2>
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
