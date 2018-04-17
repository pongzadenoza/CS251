
<?php
include("register_ctl.php");
session_start();

	$ti ;

print_r($_REQUEST);
 
$regis = new Register();



if($regis->chkConnect()){
	
	
	$regis->setRegisInfo($_REQUEST['cname'] ,$_REQUEST['cmail'] ,$_REQUEST['cphone'] ,$_REQUEST['cads'],$_REQUEST['cusr'],$_REQUEST['cpwd'], $_REQUEST['ctype']);
	
	$regis->regis();
}
 

?>