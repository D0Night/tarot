<?php
$newname=$_POST['name'];
$newpass=$_POST['password'];
$newgender=$_POST['gender'];
$newage=$_POST['age'];

$link=mysqli_connect(
	'localhost',
	'root',
	'',
	'user');
mysqli_select_db($link,'user');

$sql="SELECT * FROM user";
$result=mysqli_query($link,$sql);

$check=0;
if ($newname!=null && $newpass!=null && $newgender!=null && $newage!=null){
    while ($row=mysqli_fetch_assoc($result)){
        if ($newname == $row['name'])
            $check=1;
    }
}
else
    echo "欄位不可為空值，請重新輸入";

$sql2="INSERT INTO member(name,password,gender,age) VALUES('$newname','$newpass','$newgender','$newage')";
if($check==0)
    $insert=mysqli_query($link,$sql2);
else
    echo "此帳號已有人使用，請重新輸入";


?>