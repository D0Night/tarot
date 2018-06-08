<?php
session_start();

if($_SESSION["login"]==true){
	header("Location:game.html");
}else{
	echo "請先登入，將於3秒後移至登入網頁";
	header("Refresh:3; url='login.html'");
}
	
?>
