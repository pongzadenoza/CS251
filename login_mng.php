
<?php
	  class Loginmng{

	  

	 function  _construct(){
		 	session_start();
		  $servername ="13.231.233.64:3307";
		$username = "root";
		 $password = "123456";
		 $dbname = "CS281";
	  }


   function _desruct(){

	 }

	 function chkConnect(){
				$conn = new mysqli($servername,$username,$password,$dbname);

		 if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
			 return false;
		 }
		 
		 return true;
	 }
		  
		  
		  function getInfo(){
			  $id = $_REQUEST['cid'];
			  $pass = $_REQUEST['cpassword'];

			  $sql = "SELECT * FROM custom WHERE c_id = '".$id."' AND c_pwd = '".$pass."'";
		  }
	  }

	  ?>
