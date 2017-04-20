<?php
$server= "localhost";
$usuario= "root";
$contrasena= "123456789";
$bd="vertientes";

$conexion= mysqli_connect($server,$usuario,$contrasena,$bd)
or die("ERROR EN LA BASE DE DATOS");

$nombre= $_POST['nombre_p'];
$ha= $_POST['ha'];
$lotes= $_POST['lotes'];
$fecha= $_POST['fecha'];
$periodo= $_POST['periodo'];
$cortes= $_POST['cortes'];

$insertar= "INSERT into pastoreo(nombre,hactarea,lote,fecha,periodo,num_cortes) values ('$nombre', '$ha', '$lotes', '$fecha', '$periodo', '$cortes')";

$resultado= mysqli_query($conexion, $insertar)
or die("ERROR REGISTROS");
mysqli_close($conexion);
header('Location: listpastoreo.php');
?>