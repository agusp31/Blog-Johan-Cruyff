<?php
require_once "conection.php";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

$obj = new connection();
$con = $obj->connect();
$instruccion_sql = "INSERT INTO contacto (nombre, apellido, tel, email, asunto, mensaje) 
values('($nombre)', '($apellido)', '($email)', '($tel)', '($asunto)', '($mensaje)')";
$result = $con-> prepare($instruccion_sql);
$result-> execute();

echo "Los datos del usuario ($nombre),($apellido) fueron procesados satisfactoriamente"



?>