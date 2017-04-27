<?php
$server= "localhost";
$usuario= "root";
$contrasena= "3005";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$nombre= $_POST['nombre'];
$proposito= $_POST['proposito'];

$insertar= "INSERT into raza(nom_r,proposito) values ('$nombre', '$proposito')";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listraza.php');



?>