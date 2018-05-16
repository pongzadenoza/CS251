<?php
session_start();



 class address{

     public static function addAdress($usr,$text,$time){



		   $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
       $result =  mysqli_query($conn,"SELECT * FROM address");
       $in=1;




$i=1;
         $result = mysqli_query($conn,"SELECT * FROM address");
         while($row = mysqli_fetch_array($result)) {
           $i++;
         }
         $num=1000000000+$i;
           $chr='R#'.$num;

         $addsql= "INSERT INTO address(name,address,date_a,Receipt) VALUES('".$usr."','".$text."','".$time."','".$chr."');";
         if($conn->query($addsql)===TRUE){

        }
         else{

        }





   }



}

?>
