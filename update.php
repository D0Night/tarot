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
					<div class="content">
						<header class="align-center">
							<h2>會員專區</h2>
							<p>修改您的個人資料</p>
						</header>
						<hr>
						<p>
							<font color="black" size="4">
							<form action="updatedone.php" method="post">
							帳號：<?php echo $_COOKIE["ID"] ?><br/>
							請輸入新的密碼：<input type="password" name="password"><br/>
							請重新選擇性別：<br/>
							<input type="radio" name="gender" value="male" id="male"><label for="male">男性</label>
							<input type="radio" name="gender" value="female" id="female"><label for="female">女性</label><br/>
							請重新輸入年齡：<input type="text" name="age"><br/>
							<input type="submit" value="確定" class="button">
							</form>
							</font>
						</p>

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
