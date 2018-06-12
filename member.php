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
				<a href="index.html">Home</a> /
				<a href="enroll.html">Sign up</a> /
				<a href="login.html">Login</a> /
				<a href="logout.php">Logout</a>
			</div>
			<a href="#menu" class="toggle"><span>Menu</span></a>
		</header>
		
		<nav id="menu">
			<ul class="links">
				<li><a href="index.html">首頁</a></li>
				<li><a href="enroll.html">註冊</a></li>
				<li><a href="login.html">登入</a></li>
				<li><a href="logout.php">登出</a></li>
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
						<h3>個人資料</h3>
						<p>
<?php
session_start();
$userID=$_COOKIE["ID"];

$link=@mysqli_connect(
    '140.127.218.154',
    'root',
    'tarot9605',
    'tarot');
mysqli_select_db($link,'member');

$sql="SELECT * FROM member WHERE name='$userID'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);

echo "帳號：".$row['name']."<br/>";
echo "密碼：".$row['password']."<br/>";
echo "性別：".$row['gender']."<br/>";
echo "年齡：".$row['age']."<br/>";

?>
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
