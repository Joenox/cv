<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="refresh" content="0; URL=cv.html; URL=cvfr.html">
</head>
<?php
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
$message = "$prenom $nom $subject $msg";

$to = 'giovannadelsaut@gmail.com';
$objet = "message depuis mon cv" //Met l'objet que tu veux

/* En-têtes de l'e-mail */
$headers = "From: $pseudo \r\n\r\n";

/* Envoi de l'e-mail */
mail($to, $objet, $message, $headers)

?>
