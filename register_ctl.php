
<?php
error_reporting(E_ALL ^ E_NOTICE);


 class Register{

	private $servername ;
	private $username ;
	private $password ;
	private $dbname ;

	 private $name,$mail, $phone, $ads ,$usr, $pwd ,$type;

 function __construct(){
	 session_start();
	
	
	
}

function chkConnect(){
		 global $conn;
		 
		 
			$conn = new mysqli("server.mydpk.net:3307","lonely","lonely","lonely");

		 
		 if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
			 return false;
		 }
		 
		 return true;
	 }
	 
	 
	 function setRegisInfo($name ,$mail, $phone, $ads ,$usr, $pwd ,$type ){
		 $this->name = $name;
		 $this->mail = $mail;
		 $this->phone = $phone;
		 $this->ads = $ads;
		 $this->usr = $usr;
		 $this->pwd = $pwd;
		 $this->type = $type;
		
		 
	 }
	 function regis(){
		 $conn = new mysqli("server.mydpk.net:3307","lonely","lonely","lonely");
		 
		 $sql = "INSERT INTO OnlineMember(om_id,om_pwd,om_type) VALUES('".$this->usr."','".$this->pwd."','".$this->type."');";
		  echo $this->usr;
		
		 $sql2 = "INSERT INTO OnlineMemberInfo(om_id,om_name,om_ads,om_mail,om_phone) VALUES('".$this->usr."','".$this->name."','".$this->ads."','".$this->mail."','".$this->phone."');";
		 
		 if(is_null($conn)){
			 echo'null';
		 }
		// $conn->query($sql);
		 
		 if($conn->query($sql)===TRUE){
			if($conn->query($sql2)===TRUE){
				echo "New Records sql Created Succressfully";
				$msg = "register successfully ".$this->usr." can now login.";
				echo "<script type=\"text/javascript\">alert('$msg') </script>";
				//header('location:login.php');
			}else{
				echo "Error".$sql. "<br>" .$conn->error;
			}
				echo "New Records sql Created Succressfully";
			}else{
				echo "Error".$sql. "<br>" .$conn->error;
			}
			$conn->close();
	 }

	 public static function getmail(){
		 $sql = "SELECT c_mail FROM custominfo";
		   $conn = new mysqli("server.mydpk.net:3307","lonely","lonely","lonely");
		$temp= $conn->query($sql);
		 $temp = mysqli_fetch_array($temp);
		 
		 print_r($temp);
		 return $temp;
		 
	 }
}

?>