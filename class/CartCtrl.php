<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);


 class CartCtrl{


   function newCart(){

     }
	 
	 
     public static function addToCart($pid ,$usr){

		 $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
		 $addsql = "INSERT INTO cart(p_id , car_usr) VALUES('".$pid."','".$usr."');";
		 if($conn->query($addsql)===TRUE){
			 
			 echo "<script type='text/javascript'>alert('เพิ่มสินค้าไปยังตะกร้าแล้ว')</script>";
		 }else{
			 if(!isset($_SESSION['C_ID'])){
			 echo "<script type='text/javascript'>alert('เพิ่มสินค้าล้มเหลว กรุณาเข้าสู่ระบบ')</script>";
			 }else{
				echo "<script type='text/javascript'>alert('เพิ่มสินค้าล้มเหลว สินค้ามีอยู่ในตะกร้าแล้ว')</script>"; 
			 }
		 }
		 
		 $conn->close();
        }
	 
	 public static function getCartProductfromUser($usr){
		 
		 $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
		 $getsql = "SELECT cart.p_id, cart.car_usr, product.p_price , product.p_name FROM cart LEFT JOIN product ON cart.p_id = product.p_id WHERE cart.car_usr IN( SELECT car_usr FROM cart WHERE cart.car_usr = '".$usr."' )" ;
		 
		 $res =  $conn->query($getsql) ;
		 //var_dump($usr);
		 //print_r($res);
		 
		$conn->close();	 
			 return mysqli_fetch_all($res);
		 
		 
	 }
	 
        public static function removeFromCart($pid ,$usr){
				$conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
				$delsql = "DELETE FROM `cart` WHERE `p_id`='".$pid."' AND car_usr= '".$usr."'" ;
				
			if($conn->query($delsql)===TRUE){
			 
					echo "<script type='text/javascript'>alert('ลบสินค้าที่เลือกออกจากคะกร้าแล้ว')</script>";
				}
		 
				$conn->close();
			
          }
	 
          function getCart(){
			  
            }


}

?>
