<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'info@sdcomunicaciones.com';
$subject = 'Mensaje de formulario '.$field_name;

$body_message = 'Desde: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Mensaje: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('MENSAJE ENVIADO!! En breve nos pondremos en contacto....');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Error al enviar. Por Favor, envie un email a info@sdcomunicaciones.com');
		window.location = 'index.html';
	</script>
<?php
}
?>
