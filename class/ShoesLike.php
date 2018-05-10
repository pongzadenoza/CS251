<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);


 class ShoesLike{

     public static function addfavorite($price ,$name,$pid,$usr){

       if (mysqli_connect_errno()) {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }

		   $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
       $result =  mysqli_query($conn,"SELECT * FROM Shoes_like");

       while($row = mysqli_fetch_array($result)){
         $compname2=$row['name'];
         if ($name==$compname2) {
     	        $in=1;
         }
       }

       if($in!=1)
       {
       	 $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
         $addsql= "INSERT INTO Shoes_like(user,name,price,p_id) VALUES('".$usr."','".$name."','".$price."','".$pid."');";
         if($conn->query($addsql)===TRUE){
              echo "<script type='text/javascript'>alert('เพิ่มสินค้าไปยังสินค้าที่ชอบแล้ว')</script>";
		     }
         else{
			             echo "<script type='text/javascript'>alert('เพิ่มสินค้าล้มเหลว กรุณาเข้าสู่ระบบ')</script>";
		     }

      }
      else {
        echo "<script type='text/javascript'>alert('เพิ่มสินค้าไปยังสินค้าที่ชอบแล้ว')</script>";
      }
		 $conn->close();
   }


   public static function removeFromCart($pid ,$usr){

        $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
        $delsql = "DELETE FROM `Shoes_like` WHERE `p_id`='".$pid."' AND user= '".$usr."'" ;

        if($conn->query($delsql)===TRUE){

          echo "<script type='text/javascript'>alert('ลบสินค้าที่เลือกออกจากคะกร้าแล้ว')</script>";
        }
        $conn->close();
  }

}

?>
