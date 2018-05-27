<?php

	session_start();
	$userID=$_POST["userID"];
	$userPASS=$_POST["userPASS"];

	$link=@mysqli_connect(
				'localhost',
				'root',
				'sea1112223',
				'user');

	mysqli_select_db($link,'user');

	$sql="SELECT * FROM user";

	$result=mysqli_query($link,$sql);

	while($row=mysqli_fetch_assoc($result)){
		if($userID==$row['ID'] && $userPASS==$row['password']){
			$_SESSION["login"]=true;
		}else{
			$_SESSION["login"]=false;
		}
	}

	if($_SESSION["login"]==true){
		header("Location:home.html");
	}else{
		echo "登入失敗重返登入網頁！";
		header("Refresh:3; url='login.html'");
	}

	mysqli_close($link);
?>