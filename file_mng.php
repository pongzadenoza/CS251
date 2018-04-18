<?php

class Filemng{
	
	function __construct(){
		
		
		
		
		
	}
	
	
	public function moveFile($path){
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		
		
	}
	
	
	
}

?>