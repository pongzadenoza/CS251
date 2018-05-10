
<?php
include("emailclass.php");
session_start();
$usr = $_SESSION['C_ID'];
	$ti ;



$regis = new emailclass();



if($regis->chkConnect()){


	$regis->setRegisInfo($usr,$_REQUEST['email']  );

	$regis->regis();
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<meta http-equiv="refresh" content="0;url=../index.php">
</body>
</html>
