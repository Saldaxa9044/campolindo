<?php
$server= "localhost";
$usuario= "root";
$contrasena= "3005";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$nombre= $_POST['nombre'];
$num= $_POST['num'];

$insertar= "INSERT into lotes(nombre,num_animal) values ('$nombre', '$num')";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listlotes.php');
?>