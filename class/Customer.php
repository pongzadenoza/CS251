<?php
error_reporting(E_ALL ^ E_NOTICE);


 class Customer{

	private $idn;
	private $userid ;
	private $password ;
	private $name ;
	 private $address;
	 private $email;
   	 private $type;
	 private $notiStatus;



public function __construct1($userid, $password, $name,$address,$email,$type){

   $this->userid = $userid;
   $this->password = $password;
   $this->name = $name;
   $this->address = $address;
   $this->email = $email;
$this->type = $type;
}
public function  __construct2(Customer $c){
$this->userid = $c->getUserid();
  $this->password = $c->getPassword();
  $this->name = $c->getName();
  $this->address = $c->getAddress();
  $this->email =$c->getEmail();
  $this->type =$c->getType();

function getUserid(){
		return  $userid;
	 }
function getPassword(){
		return  $password;
	 }
   function getName(){
   		return  $name;
   	 }
     function getAddress(){
     		return  $address ;
     	 }
       function getEmail(){
       		return  $email;
       	 }
         function getType(){
         		return  $type;
         	 }
         function setNotiStatus($ss){
         	$this->notiStatus= $ss;
         	 }
           function getNotiStatus(){
               return  $notiStatus;
              }







}

?>
