
<?php
error_reporting(E_ALL ^ E_NOTICE);


 class emailclass{

	private $servername ;
	private $username ;
	private $password ;
	private $dbname ;

	 private $name,$mail, $phone;

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


   function setRegisInfo($name ,$mail, $phone ){
		 $this->name =  $_POST['name'];
		 $this->mail = $_POST['email'];
		 $this->phone = $phone;


	 }
	 function regis(){
		 $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");

		 $sql2 = "INSERT INTO email(id,name,email) VALUES('".$this->phone."','".$this->name."','".$this->mail."');";

		 if(is_null($conn)){
			 echo'null';
		 }
		// $conn->query($sql);

     if($conn->query($sql2)===TRUE){
       echo "New Records sql Created Succressfully";
       $msg = "register successfully ".$this->usr." can now login.";
       echo "<script type=\"text/javascript\">alert('$msg') </script>";
       //header('location:login.php');
     }else{
       echo "Error".$sql. "<br>" .$conn->error;
     }
       echo "New Records sql Created Succressfully";


			$conn->close();





  }
}

?>
