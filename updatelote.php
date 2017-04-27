<?php
$server= "localhost";
$usuario= "root";
$contrasena= "3005";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$id=$_POST['id'];
$nombre= $_POST['nombre'];
$num= $_POST['num'];

$insertar= "UPDATE lotes SET nombre='$nombre', num_animal='$num' WHERE id_lote='$id'";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listlotes.php');
?>