<?php
session_start();
$target_dir = "img/product/";
//print_r( $_REQUEST );
//print_r( $_FILES );
$target_file = $target_dir . basename( $_FILES[ "fileToUpload" ][ "name" ] );
$uploadOk = 1;
$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
// Check if image file is a actual image or fake image
if ( isset( $_POST[ "submit" ] ) ) {
	$check = getimagesize( $_FILES[ "fileToUpload" ][ "tmp_name" ] );
	if ( $check !== false ) {
		echo "File is an image - " . $check[ "mime" ] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}
// Check if file already exists
if ( file_exists( $target_file ) ) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
}
// Check file size
if ( $_FILES[ "fileToUpload" ][ "size" ] > 500000000 ) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}
// Allow certain file formats
if ( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" &&
	$imageFileType != "gif" ) {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ( $uploadOk == 0 ) {
	echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
} else {
	$cate = $_REQUEST[ 'p_cate' ];
	
	$conn = new mysqli( "13.231.233.64:3306", "project", "123456", "CS251" );
	$getsql = "SELECT p_ind FROM product";
	$res = $conn->query($getsql);
	$idArr = mysqli_fetch_all($res);
	//print_r($idArr);
	//echo count($idArr);
	$pString = (count($idArr)  === 0) ? "0" : $idArr[count($idArr) -1][0];
	$target_file = $target_dir . $cate . "_" . $pString.".jpg";
	
	//echo "<br>".$target_file;
	
	if ( move_uploaded_file( $_FILES[ "fileToUpload" ][ "tmp_name" ], $target_file ) ) {
		$name = $_REQUEST[ 'p_name' ];
		$price = $_REQUEST[ 'p_price' ];
		$cate = $_REQUEST[ 'p_cate' ];
		$detail = $_REQUEST[ 'p_dtl' ];
		$age = $_REQUEST[ 'p_age' ];
		//$fName = $_FILES[ 'fileToUpload' ][ 'name' ];

		
		
		
		
		$sql1 = "INSERT INTO product(p_id,p_name,p_price,p_age,ca_id,p_detail,p_usr) VALUES('" .$cate. "_". $pString . "','" . $name . "','" . $price . "','".$age."','" . $cate . "','" . $detail . "','".$_SESSION['C_ID']."');";
		
		
		if($conn->query( $sql1 )===TRUE){
			echo "add to DB sucess";
		}
		else{
			echo $conn -> error;
		}
		echo "The file " . basename( $_FILES[ "fileToUpload" ][ "name" ] ) . " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}
?>