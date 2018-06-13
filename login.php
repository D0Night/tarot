<html>	
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<header id="header">
			<div class="logo">
					<a href="index.php">Home</a>
			</div>
			<a href="login.html">登入</a> /
			<a href="enroll.html">註冊</a>
			<a href="#menu" class="toggle"><span>Menu</span></a>
		</header>

		<nav id="menu">
			<ul class="links">
				<li><a href="index.php">首頁</a></li>
				<li><a href="check.php">遊戲開始</a></li>
				<li><a href="recommend.php">相關商品推薦</a></li>
			</ul>
		</nav>

		<section id="one" class="wrapper style4">
			<div class="content">
				<header class="align-center">
					<h2>
<?php
session_start();
$userID=$_POST["userID"];
$userPASS=$_POST["userPASS"];
$link=@mysqli_connect(
            '140.127.218.154',
            'root',
            'tarot9605',
            'tarot');
mysqli_select_db($link,'tarot');

$sql="SELECT * FROM member";
$result=mysqli_query($link,$sql);

while($row=mysqli_fetch_assoc($result)){
    if($userID==$row['name'] && $userPASS==$row['password']){
        $_SESSION["login"]=true;

        $date=strtotime("+3 days",time());
        setcookie("ID",$userID,$date);
        setcookie("PASS",$userPASS,$date);
	}
}

if($_SESSION["login"]==true)
	header("Location:index.php");
else
	echo "帳號或密碼輸入錯誤，請重新輸入";

mysqli_close($link);
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
