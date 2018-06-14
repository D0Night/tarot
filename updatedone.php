<html>	
	<head>
		<title>Tarot updatedone</title>
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
							<p>個人資料修改結果</p>
						</header>
						<hr>
						<p>

						<?php

							$userID=$_COOKIE["ID"];
							$userPASS=$_POST["password"];
							$usergender=$_POST["gender"];
							$userage=$_POST["age"];

							$link=@mysqli_connect(
							   '140.127.218.154',
							    'root',
							    'tarot9605',
							    'tarot');
							mysqli_select_db($link,'tarot');

							$sql2="UPDATE member SET password='$userPASS', gender='$usergender', age='$userage' WHERE name='$userID'";
							$update=mysqli_query($link,$sql2);

							$sql="SELECT * FROM member WHERE name='$userID'";
							$result=mysqli_query($link,$sql);

							$row=mysqli_fetch_assoc($result)
							echo "帳號：".$row['name']."<br>";
							echo "密碼：".$row['password']."<br>";
							echo "性別：".$row['gender']."<br>";
							echo "年齡：".$row['age']."<br>";
							echo "a href='update.php'>再次編輯</a>"."<br>";	

							mysqli_close($link);
						?>
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
