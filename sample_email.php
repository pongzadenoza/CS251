<?php require($_SERVER['DOCUMENT_ROOT']."/lib/phpmailer/PHPMailerAutoload.php");?>
<?php
header('Content-Type: text/html; charset=utf-8');

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;


$gmail_username = "korpongparunyakul@gmail.com"; // gmail ที่ใช้ส่ง
$gmail_password = "korpong1234554321"; // รหัสผ่าน gmail


$sender = "IBS Support"; // ชื่อผู้ส่ง
$email_sender = "korpongparunyakul@gmail.com"; // เมล์ผู้ส่ง
$email_receiver = "pongzadenoza@gmail.com"; // เมล์ผู้รับ ***

$subject = "Love ann markkkk"; // หัวข้อเมล์


$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($email_sender, $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;

$email_content = "
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset=utf-8'/>
			<title>ทดสอบการส่ง Email</title>
		</head>
		<body>
			<h1 style='background: #3b434c;padding: 10px 0 20px 10px;margin-bottom:10px;font-size:30px;color:white;' >
				<img src='https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/25659848_1727807770602835_1513807412324210758_n.jpg?_nc_cat=0&_nc_eui2=v1%3AAeH5MIYuHTc5qwQ2eOIzxgd2RTTl-eFebcu6RffEpqsMkeDQIw7Uu5rLZD8QUuHTJFrE_RBR-ZmwbXkmyeFCZ66hEbbz-U89b29K2-vtkBmeig&oh=92c6146038683d29aecdfe57c4b5f2c4&oe=5B63105F' style='width: 80px;'>
				LoveAnnNA
			</h1>
			<div style='padding:20px;'>
				<div style='text-align:center;margin-bottom:50px;'>
					<img src='https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/25659848_1727807770602835_1513807412324210758_n.jpg?_nc_cat=0&_nc_eui2=v1%3AAeH5MIYuHTc5qwQ2eOIzxgd2RTTl-eFebcu6RffEpqsMkeDQIw7Uu5rLZD8QUuHTJFrE_RBR-ZmwbXkmyeFCZ66hEbbz-U89b29K2-vtkBmeig&oh=92c6146038683d29aecdfe57c4b5f2c4&oe=5B63105F' style='width:100%' />
				</div>
				<div>
					<h2>โปรโมชั่นรองเท้ามือสอง : <strong style='color:#0000ff;'></strong></h2>
					<a href='#' target='_blank'>
					<h1><strong style='color:#3c83f9;'> >> กรุณาคลิ๊กที่นี่ ถ้ำสนใจ<< </strong> </h1>
					</a>
				</div>
				<div style='margin-top:30px;'>
					<hr>
					<address>
						<h4>ติดต่อสอบถาม</h4>
						<p>aom ผู้รักพี่แอนเสมอ</p>
						<p>www.facebook.com/Aommmmm</p>
					</address>
				</div>
			</div>
			<div style='background: #3b434c;color: #a2abb7;padding:30px;'>
				<div style='text-align:center'>
					Love annnnnnn
				</div>
			</div>
		</body>
	</html>
";


if($email_receiver){
	$mail->msgHTML($email_content);


	if (!$mail->send()) {

		echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
		echo $mail->ErrorInfo;
	}else{
		echo "ระบบได้ส่งข้อความไปเรียบร้อย";
	}
}



?>
