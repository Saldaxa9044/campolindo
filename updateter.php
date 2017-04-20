<?php
$server= "localhost";
$usuario= "root";
$contrasena= "123456789";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$arete=$_POST['arete'];
$fecha= $_POST['fecha'];
$sexo= $_POST['sexo'];
$peso= $_POST['peso'];
$dosis= $_POST['dosis'];
$raza= $_POST['raza'];
$estado= $_POST['estado'];
$fech_cam=$_POST['fechac'];


$insertar= "UPDATE terneros SET arete='$arete', fech_nac='$fecha',  sexo='$sexo', peso_actu='$peso',  dosis_al='$dosis', raza='$raza', estado='$estado', fech_cambio='$fech_cam' WHERE arete='$arete'";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listtern.php');
?>