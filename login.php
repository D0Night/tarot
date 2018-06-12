<?php
session_start();
$userID=$_POST["userID"];
$userPASS=$_POST["userPASS"];
$link=@mysqli_connect(
            '140.127.218.154',
            'root',
            'tarot9605',
            'tarot');
mysqli_select_db($link,'member');

$sql="SELECT * FROM member";
$result=mysqli_query($link,$sql);

while($row=mysqli_fetch_assoc($result)){
    if($userID==$row['name'] && $userPASS==$row['password']){
        $_SESSION["login"]=true;
	}
}

if($_SESSION["login"]==true)
	header("Location:index.html");
else
	echo "帳號密碼錯誤，請重新輸入";

mysqli_close($link);
?>
