<?php
session_start();



 class address{

     public static function addAdress($usr,$text){



		   $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
       $result =  mysqli_query($conn,"SELECT * FROM address");
       $in=1;
       while($row = mysqli_fetch_array($result)){
         $compname2=$row['name'];
         if ($usr==$compname2) {
            $in=0;

         }

       }

       if ($in==1) {


         $addsql= "INSERT INTO address(name,address) VALUES('".$usr."','".$text."');";
         if($conn->query($addsql)===TRUE){

        }
         else{

        }
       }




   }



}

?>
