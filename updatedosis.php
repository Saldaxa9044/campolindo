<?php
$server= "localhost";
$usuario= "root";
$contrasena= "3005";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$id=$_POST['id'];
$nombre= $_POST['nombre'];
$kilos= $_POST['kilos'];
$descr= $_POST['descr'];

$insertar= "UPDATE dosis SET nombre='$nombre', kg_diario='$kilos', descr='$descr' WHERE id_dosis='$id'";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listdosis.php');
?>