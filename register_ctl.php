
<?php
error_reporting(E_ALL ^ E_NOTICE);


 class Register{

	private $servername ;
	private $username ;
	private $password ;
	private $dbname ;

	 private $name,$mail, $phone, $ads ,$usr, $pwd ,$type;

 function _construct(){
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
		 $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
		 
		 $sql = "INSERT INTO custom(c_id,c_pwd,c_type) VALUES('".$this->usr."','".$this->pwd."','".$this->type."');";
		  echo $this->usr;
		
		 $sql2 = "INSERT INTO custominfo(c_id,c_name,c_ads,c_mail,c_phone) VALUES('".$this->usr."','".$this->name."','".$this->ads."','".$this->mail."','".$this->phone."');";
		 
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

}

?>