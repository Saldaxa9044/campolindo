<?php
$server= "localhost";
$usuario= "root";
$contrasena= "3005";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$nombre= $_POST['nombre'];
$ha= $_POST['ha'];
$rotacion= $_POST['rotacion'];
$estado= $_POST['estado'];
$insertar= "INSERT into potreros(nombre,ha,rotacion,estado) values ('$nombre', '$ha', '$rotacion', '$estado')";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listpot.php');
?>