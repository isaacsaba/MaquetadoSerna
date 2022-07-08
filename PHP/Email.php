<?php


 include 'PHPMailer.php';
 include 'SMTP.php';
 include 'Exception.php';

 $nombre =  $_GET["nombre"];
 $telefono =  $_GET["telefono"];
 $email =  $_GET["email"];
 $mensaje =  $_GET["mensaje"];

 $mail = new PHPMailer();
 $mail->IsSMTP();
 $mail->Host = 'mail.sernaabogados.com.mx';   /*Servidor SMTP*/																		
 $mail->SMTPSecure = 'ssl';   /*Protocolo SSL o TLS*/
 $mail->Port = 465;   /*Puerto de conexión al servidor SMTP*/
 $mail->SMTPAuth = true;   /*Para habilitar o deshabilitar la autenticación*/
 $mail->Username = 'contactoweb@sernaabogados.com.mx';   /*Usuario*/
 $mail->Password = '2p$gw]]$-$#x';   /*contraseña*/
 $mail->setFrom('contactoweb@sernaabogados.com.mx',"Cliente");   /*Correo electrónico remitente */
 $mail->addAddress("contactoweb@sernaabogados.com.mx", "Destinatario"); /*Correo electrónico destinatario */
 $mail->Subject="Mensaje"; /*Asunto */
 $mail->msgHtml(nl2br('
 Nombre: '.$nombre.'
 Telefono: '.$telefono.'
 Correo: '.$email.'
 Mensaje: '.$mensaje.
 '')); /*Mensaje */
 $mail->CharSet = 'UTF-8';   /*Codificación del mensaje*/

 if(!$mail->send()){
   echo " error al enviar";
 }

?>