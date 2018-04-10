
<?php
	  class Loginmng{

	  

	 function  _construct(){

		  $servername ='13.231.233.64';
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

		 }
	 }
	  }

	  ?>
