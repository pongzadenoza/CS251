
<?php
error_reporting(E_ALL ^ E_NOTICE);


 class emailclass{

	private $servername ;
	private $username ;
	private $password ;
	private $dbname ;

	 private $usr,$name,$mail, $phone;

 function __construct(){
	 session_start();
	 $servername = "13.231.233.64";
	$username = "project";
	$password = "123456";
	$dbname = "CS281";


}

function chkConnect(){
		 global $conn;


			$conn = new mysqli("13.231.233.64:3306","project","123456","CS281");


		 if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
			 return false;
		 }

		 return true;
	 }


   function setRegisInfo($usr, $mail ){
		 $this->usr=  $usr;
		 $this->mail = $mail;
	 }

	 function regis(){
		 $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");

		 $sql2 = "INSERT INTO email(name,email) VALUES('".$this->usr."','". $this->mail."');";

		 if(is_null($conn)){
			 echo'null';
		 }
		// $conn->query($sql);

    if($conn->query($sql2)===TRUE){

      echo "<script type='text/javascript'>alert('เพิ่มอีเมลล์ที่จะติดตามแล้ว')</script>";
    }else{
      echo "<script type='text/javascript'>alert('เพิ่มอีเมลลล้มเหลว กรุณาเข้าสู่ระบบ')</script>";
    }



			$conn->close();





  }
}

?>
