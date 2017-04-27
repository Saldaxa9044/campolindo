<?php
$server= "localhost";
$usuario= "root";
$contrasena= "3005";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$id=$_POST['id'];
$nombre= $_POST['nombre'];
$proposito= $_POST['proposito'];

$insertar= "UPDATE raza SET nom_r='$nombre', proposito='$proposito' WHERE id_raza='$id'";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listraza.php');
?>