<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login page Test</title>
</head>

	

<body>
	<?php include("login_ctl.php");
	
	$id = $_GET['cid'];
	$pass = $_GET['cpassword'];

	echo "$id.=$pass";

	
 $mng = new Loginmng($id , $pass);

if($mng->chkConnect()){
	
	//echo "This is login.php555";
	$mng->getInfo();
	
	
}


 ?>
	
	<a href=login.php>back</a>	
</body>
</html>
