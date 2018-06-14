<?php
session_start();
session_destroy();

header("Location:index.php");
$date=strtotime("-3 days",time());
setcookie("ID",$userID,$date);

?>
