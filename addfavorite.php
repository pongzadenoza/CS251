<?php
	require("ShoesLike.php");
	session_start();
	$usr = $_SESSION['C_ID'];
ShoesLike::addfavorite($_GET['select_f'],$_GET['select_f2'],$_GET['select_f3'],$usr);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<meta http-equiv="refresh" content="0;url=../category.php">
</body>
</html>
