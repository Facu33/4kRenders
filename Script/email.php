<?php

$to = "facundoconil33@gmail.com";
$subject = $_POST['email'];
$nombre = $_POST['nombre'];
$message =$_POST['mensaje'];
$headers = "From: ".$nombre."\n";
mail($to, $subject, $message,$headers)
?>