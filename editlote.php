<?php
$id=$_GET['id'];
$mysqli=new mysqli("localhost","root","123456789","vertientes");
$query="SELECT nombre,num_animal FROM lotes WHERE id_lote='$id'";
$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="semantic.css">
  <script src="semantic.js"></script>
  <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
    function alerta (txt){
      alert(txt)
    }

  </script>
	<title></title>
</head>
<body>
<header>
            <h1>Sistema SERYPRA</h1>
            <span>Modulo de praderas</span>
        </header>
     <ul id="nav">
            <li><a href="Menu.html">Inicio</a>
            </li>
            <li><a href="#">Potreros</a>
                <ul>
                <li><a href="formpotrero.php">Ingreso Potrero</a></li>
                    <li><a href="listpot.php">Rotacion</a></li>
                    <li><a href="listpot.php">Pastoreo</a></li>
                     <li><a href="listpot.php">Receso</a></li>
                </ul>
            </li>
            <li><a href="#">Pastoreos</a>
                <ul>
                    <li><a href="listpastoreo.php">Lista de Pastoreos</a></li>
                    
                </ul>
            </li>
             <li><a href="#">Lotes</a>
                <ul>
                    <li><a href="listlotes.php">Listado Lotes</a></li>
                    <li><a href="formlote.php">Ingreso Lote</a></li>
                    
                </ul>
            </li>
        </ul>
        <p></p>
        <p></p>
      			<div class="ui container">
              <center><h2>Formulario Lote</h2></center>
                <form class="ui form" action="updatelote.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id;?>" >
            <div class="field">
              <label>Nombre</label>
              <input type="text" name="nombre"  value="<?php echo $row['nombre']; ?>" placeholder="Nombre Raza">
            </div>
 
          <div class="field">
              <label>Numero de Animales</label>
              <input type="text" name="num"  value="<?php echo $row['num_animal']; ?>" placeholder="Numero de Animales">
            </div>
             


            <div><button class="ui button" onclick="alerta('¡Datos actualizados!')" 
            type="submit" value="funcion">Actualizar</button></div>
          </form>
          </div>

</body>
</html>