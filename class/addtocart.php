<?php
	require("cartctrl.php");
	session_start();
	$usr = $_SESSION['C_ID'];

//print_r($_GET['select_p']);
	
	CartCtrl::addToCart($_GET['select_p'],$usr);

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