<?php
$server= "localhost";
$usuario= "root";
$contrasena= "123456789";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$arete= $_POST['arete'];
$fecha= $_POST['fecha'];
$peso= $_POST['peso'];
$sexo= $_POST['sexo'];
$dosis= $_POST['dosis'];
$raza= $_POST['raza'];
$estado= $_POST['estado'];


$insertar= "INSERT into terneros(arete,fech_nac,peso_ini,peso_actu,sexo,dosis_al,raza,estado) values ('$arete', '$fecha', '$peso', '$peso', '$sexo', '$dosis', '$raza', '$estado')";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listtern.php');
?>