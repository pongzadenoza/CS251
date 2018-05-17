<?php
//session_start();
require("class/cartctrl.php");
	require("Promotion.php");
 $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
$arrPro = CartCtrl::getCartProductfromUser($_SESSION['C_ID']);
//print_r($arrPro);
for($i=0 ;$i < count($arrPro) ; $i++){
$sql = "INSERT INTO history (p_date, p_time,p_name ,p_price,p_id,p_usr) values (CURRENT_DATE, CURRENT_TIME, '".$arrPro[$i][3]."','".$arrPro[$i][2]."','".$arrPro[$i][0]."','".$_SESSION['C_ID']."');";
$conn->query($sql);

}
?>
<script type='text/javascript'>

alert("ชำระเงินเรียบร้อย");
window.location = 'printBILL.php';


</script>