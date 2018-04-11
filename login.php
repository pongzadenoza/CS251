<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login page Test</title>
</head>

	

<body>
	<?php include("login_mng.php");

echo "This is login.php";
	

	
 $mng = new Loginmng();

if($mng->chkConnect()){
	
	
	
	
	
}


 ?>
	
	<a href=login.html>back</a>	
</body>
</html>
