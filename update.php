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
<?php

	session_start();
	$userID=$_COOKIE["ID"];
	$userID=$_POST["name"];
	$userPASS=$_POST["password"];
	$usergender=$_POST['gender'];
	$userage=$_POST['age'];

	$link=@mysqli_connect(
		'140.127.218.154',
	    'root',
	    'tarot9605',
	    'tarot');
	
	mysqli_select_db($link,'tarot');

	$sql="SELECT * FROM member WHERE name='$userID'";
	$result=mysqli_query($link,$sql);

	while($row=mysqli_fetch_assoc($result)){
		$userID=$row["name"];
		$userPASS=$row["password"];
		$usergender=$row["gender"];
		$userage=$row['age'];
	}

	echo "<form action='member.php' method='post'>";
	echo "請輸入新的密碼：<input type='password' name='password' value='$userPASS'><br>";
	echo "請重新選擇性別；<br>
		<input type='radio' name='$usergender' id="male"><label for="male">男性</label><br>
  		<input type='radio' name='$usergender' id="female"><label for="female">女性</label><br>"
	echo "請重新選擇年齡：<br>
		<input type='radio' name='age' value='$userage' id="below12"><label for="below12">12歲以下</label><br>
		12歲～20歲<input type='radio' name='age' value='$userage' id="1220"><label for="1220">12歲～20歲</label><br>
		21歲～30歲<input type='radio' name='age' value='$userage' id="2130"><label for="2130">21歲～30歲</label><br>
		31歲～40歲<input type='radio' name='age' value='$userage' id="3140"><label for="3140">31歲～40歲</label><br>
		41歲～50歲<input type='radio' name='age' value='$userage' id="4150"><label for="4150">41歲～50歲</label><br>
		51歲～60歲<input type='radio' name='age' value='$userage' id="5160"><label for="5160">51歲～60歲</label><br>
		60歲以上<input type='radio' name='age' value='$userage' id="above60"><label for="above60">60歲以上</label><br>"
	echo "<input type='submit' value='修改資料'><br>";
	echo "</form>";

?>
						</p>

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
