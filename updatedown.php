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

	$sql2="UPDATE member SET name='$userID', password='$userPASS', gender='$usergender', age='$userage' WHERE name='$userID'";
	$update=mysqli_query($link,$sql2);

	while($row=mysqli_fetch_assoc($result)){
		echo "帳號：".$row['name']."<br>";
		echo "密碼：".$row['password']."<br>";
		echo "性別：".$row['gender']."<br>";
		echo "年齡：".$row['age']."<br>";
		echo "a href='update.php'>再次編輯</a>"."<br>";	
	}

	mysqli_close($link);
?>