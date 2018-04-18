<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


$host = "localhost";  // ชื่อ host หรือ ip ที่ใช้
$userhost = "root"; // ชื่อ user ที่ใช้ในการล็อกอิน
$passhost = "123456"; // password ที่ใช้ในการล็อกอิน
$database = "test555"; // ชื่อ Database
$conn = mysql_connect($host,$userhost,$passhost);
if(!$conn){
echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
}
mysql_query("use $shopping cart"); // เลือกฐานข้อมูลที่ใช้
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

$query = "SELECT id FROM shopping cart = '".$id."' ";
$data = mysql_query($query); //query ข้อมูล
while($show = mysql_fetch_array($data)){
echo $show[0]." ".$show[1]." ".$show[2]." "; //โชว์ข้อมูล
}
echo gggg
?>
</body>
</html>