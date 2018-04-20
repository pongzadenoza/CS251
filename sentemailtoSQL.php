
<?php
include("emailclass.php");
session_start();

	$ti ;

print_r($_REQUEST);

$regis = new emailclass();



if($regis->chkConnect()){


	$regis->setRegisInfo($_REQUEST['id'],$_REQUEST['name'] ,$_REQUEST['email']  );

	$regis->regis();
}


?>
