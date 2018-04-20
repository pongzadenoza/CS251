<?php
session_start();
?>
<?php
	  class Loginmng{

		  
	  
	 function  __construct($id, $pass){
		 	
	 $servername ='13.231.233.64';
		$username = 'project';
		 $password = '123456';
		 $dbname = 'CS281';
	  }


   function __desruct(){

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
		  
		  
		  function getInfo(){
			  global $conn;
			  $id = $_REQUEST['cid'];
			  $pass = $_REQUEST['cpassword'];
			  
			  //echo "<br>$id<br>";

			 // echo "<br>$pass<br>";

			  $sql = "SELECT * FROM custom WHERE c_id = '".$id."' AND c_pwd = '".$pass."'";
			  
			  
			 
				  $object =  $conn->query($sql);
			  
			  
			  
			  $resultArray = $object->fetch_array();
			  
			  
			  if(!$resultArray){
				  echo "$resultArray<br>";
					echo 'ID OR PASSWORD Incorrect';
			  }else{
				  //	header('location:index.php');
					//$_SESSION['C_ID'] = $resultArray['C_ID'];
				  $_SESSION['C_ID'] = $id;
				  $_SESSION['C_TYPE'] = $resultArray[0][2];
				  
					//$_SESSION['C_TYPE'] = $resultArray['C_TYPE'];
				  
				  echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
					session_write_close();
				  header('location:index.php');
					
				}
			  mysqli_close();
			
		  }
		  
		  public static function logout(){
			  session_start();
			  session_destroy();
			  header('location:index.php');
			  
		  }
	  
	  
	  }
	  ?>
