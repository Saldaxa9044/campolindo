<?php
$server= "localhost";
$usuario= "root";
$contrasena= "123456789";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$id=$_POST['id'];
$nombre= $_POST['nombre'];
$ha= $_POST['ha'];
$rotacion= $_POST['rotacion'];
$estado= $_POST['estado'];

$insertar= "UPDATE potreros SET nombre_p='$nombre', ha='$ha', rotacion='$rotacion', estado='$estado' WHERE id_pot='$id'";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listpot.php');
?>