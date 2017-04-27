<?php
$server= "localhost";
$usuario= "root";
$contrasena= "3005";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$nombre= $_POST['nombre'];
$kilos= $_POST['kilos'];
$descr= $_POST['descr'];

$insertar= "INSERT into dosis(nombre,kg_diario,descr) values ('$nombre', '$kilos', '$descr')";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listdosis.php');
?>