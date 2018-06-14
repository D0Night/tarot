<html>	
	<head>
		<title>Tarot sign up</title>
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

				$newname=$_POST['name'];
				$newpass=$_POST['password'];
				$newgender=$_POST['gender'];
				$newage=$_POST['age'];

				$link=mysqli_connect(
				    '140.127.218.154',
				    'root',
				    'tarot9605',
				    'tarot');
				mysqli_select_db($link,'tarot');

				$sql="SELECT * FROM member";
				$result=mysqli_query($link,$sql);

				$check=0;
				if ($newname!=null && $newpass!=null && $newgender!=null && $newage!=null){
				    while ($row=mysqli_fetch_assoc($result)){
					if ($newname == $row['name']){
					    $check=1;
					    break;
					}
				    }
				}
				else {
				    $check=2;
				}

				if($check==0){
					$sql2="INSERT INTO member(name,password,gender,age) VALUES('$newname','$newpass','$newgender','$newage')";
					$insert=mysqli_query($link,$sql2);
					$_SESSION["login"]=true;
					
					$date=strtotime("+3 days",time());
					setcookie("ID",$newname,$date);
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

		<section id="one" class="wrapper style4">
			<div class="content">
				<header class="align-center">
					<h2>

						<?php

						if($check==0){
						    echo "恭喜您註冊成功～<br/>";
						    echo "<a href='index.php'>點此回首頁</a>";
						}    
						else if ($check==1) {
						    echo "此帳號已有人使用，請重新輸入";
						}
						else{
						    echo "欄位不可為空值，請重新輸入";
						}
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

