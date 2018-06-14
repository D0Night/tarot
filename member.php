<html>
	<head>
		<title>Tarot member</title>
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
				<li><a href="recommend.html">相關商品推薦</a></li>
			</ul>
		</nav>

		<section id="one" class="wrapper style2">
			<div class="inner">
				<div class="box">
					<div class="content">
						<header class="align-center">
                            <h2>會員專區</h2>
                            <p>歡迎<?php echo $_COOKIE["ID"]?>，我們又見面了</p>
						</header>
                        <hr>
			<p>			
				<font size="5" color="black">個人資料</font>
				<br/>
				<font size="4" color="black">
				<?php
				$userID=$_COOKIE["ID"];
				    
				$link=@mysqli_connect(
				    '140.127.218.154',
				    'root',
				    'tarot9605',
				    'tarot');
				mysqli_select_db($link,'tarot');

				$sql="SELECT * FROM member WHERE name='$userID'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);

				echo "帳號：".$row['name']."<br/>";
				echo "密碼：".$row['password']."<br/>";
				echo "性別：".$row['gender']."<br/>";
				echo "年齡：".$row['age']."<br/>";
				echo "<a href='update.php' class='button special scrolly'>編輯</a><br/>";
				mysqli_close($link);
				?>
                        </font>
                        </p>
                        <hr>
                        <h3>遊戲紀錄</h3>
                        <p>

                        </p>
						<br>

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
