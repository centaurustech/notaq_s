<?php

require("class.phpmailer.php");
require("class.smtp.php");
/*
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "jmarincastro34@gmail.com";
$mail->Password = "kebbduzer";

$mail->From = "jmarincastro34@gmail.com";
	$mail->FromName = "Juan Marin";
	$mail->Subject = "Enviando Mail con PHPMailer";
	$mail->AltBody = "";
	$mail->MsgHTML("<h1>Test mail message!</h1>");
$mail->AddAttachment("adjunto.txt");

$mail->AddAddress("jmarincastro@hotmail.com", "Nombre Destinatario");
$mail->IsHTML(true);
$mail->Send();
////////////////////////////////////////////////////

/
/Obteniendo los datos del cobrador
/Para incluirlo en el envio de correos
/
*/
/*
	$sql = "SELECT nombre, email FROM mymvcdb_users WHERE username = '".$cobrador."'";
	$res = mysql_query($sql);
	$rec = mysql_fetch_array($res);
	$cob_mail = $rec['1'];
	$cob_name = $rec['0'];
*/
///// SIN GMAIL.COM ////
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Host = "sub5.mail.dreamhost.com";
$mail->Port = 587;
$mail->Username = "reportes@confianzp.com";
$mail->Password = "V1ct0r1a";
$mail->SMTPDebug = 1;

$mail->From = "reportes@confianzp.com";
	$mail->FromName = "Corte de Caja";
	$mail->Subject = "Reporte de cobros realizados al dia";
	$mail->AltBody = "";
	$mail->MsgHTML("<h1>Reporte de cobros realizados por cobrador: $cobrador !</h1>");
$mail->AddAttachment("$titulo");
$mail->AddAddress("<jmarincastro34@gmail.com>", "Juan Marin");
//$mail->AddAddress("pacozozaya@gmail.com ", "Francisco Zozaya");
//$mail->AddAddress("manuels.dominguez@gmail.com ", "Manuel dominguez");
$mail->AddAddress("$cob_mail", "$cob_name");
$mail->IsHTML(true);
if (!$mail->Send()) {
	echo "Error: No se pudo enviar el correo.
	Favor de intenar mas tarde";
}else{
	echo "Correo enviado satisfactoriamente";
}
?>
