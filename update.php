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
					男<input type='radio' name='$usergender'><br>
  					女<input type='radio' name='$usergender'><br>"
	echo "請重新選擇年齡：<br>
					12歲以下<input type='radio' name='age' value='$userage'><br>
					12歲～20歲<input type='radio' name='age' value='$userage'><br>
					21歲～30歲<input type='radio' name='age' value='$userage'><br>
					31歲～40歲<input type='radio' name='age' value='$userage'><br>
					41歲～50歲<input type='radio' name='age' value='$userage'><br>
					51歲～60歲<input type='radio' name='age' value='$userage'><br>
					60歲以上<input type='radio' name='age' value='$userage'><br>"
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