<?php
function grazie() {
$to = $_POST['e_mail'];
$subject='Grazie per esserti iscritto';
$message="Ti scriviamo piu presto";
$headers= array('Content-Type: text/html; charset=UTF-8','From: amministratore <mail.travel.netsons.org>');
wp_mail($to, $subject, $message, $headers);
}
add_action('wp_loaded', 'grazie');
add_action('wp_mail_failed', 'fallita');

function fallita($error) {
$error->get_error_message()."\n";
}
?>
