<?php
$server= "localhost";
$usuario= "root";
$contrasena= "123456789";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$id=$_GET['id'];


$insertar= "DELETE FROM raza WHERE id_raza='$id'";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listraza.php');
?>