<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);


 class Promotion{

     public static function chekPromotion($name){
      $time=date("d");


      if($time>=14&&$time<=30)
      {
        if($name=="เจอามือสองราคาดีี")
        {
          return 50;
        }
      }
      if($time>=14&&$time<=20)
      {
        if($name=="Black Candyสีดำ")
        {
          return 30;
        }
      }
      if($time==17)
      {
        if($name=="ช้างดาวยุค90")
        {
          return 50;
        }
      }
      if($time==18)
      {
        if($name=="ผ้าใบเน่าๆ")
        {
          return 60;
        }
      }
      if($time==15)
      {
        if($name=="Air Jordan สวยๆคุณภาพดี")
        {
          return 10;
        }
      }

        return 0;
      

  }

}

?>
