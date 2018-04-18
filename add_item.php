<?php
session_start();
print_r($_REQUEST);
$pic = $_REQUEST['p_pic'];
echo $pic;
print_r($_FILES[$pic]['type']);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	

<body>

</body>
</html>