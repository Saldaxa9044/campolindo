<?php
$id=$_GET['id'];
$mysqli=new mysqli("localhost","root","123456789","vertientes");
$query="SELECT nom_r,proposito FROM raza WHERE id_raza='$id'";
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
            <span>Sistema de engorda rotacion y praderas</span>
        </header>
   <ul id="nav">
            <li><a href="Menu.html">Inicio</a>
            </li>
            <li><a href="#">Terneros</a>
                <ul>
                    <li><a href="formternero.php">Ingreso Terneros</a></li>
                    <li><a href="listtern.php">Existentes</a></li>
                    <li><a href="listternav.php">A venta</a></li>
                    <li><a href="listternven.php">Vendidos</a></li>
                    <li><a href="listternm.php">Muertos</a></li>
                </ul>
            </li>
            <li><a href="#">Dosis</a>
                <ul>
                    <li><a href="formdosis.php">Ingreso Dosis</a></li>
                    <li><a href="listdosis.php">Listado Dosis</a></li>
                    
                </ul>
            </li>
             <li><a href="#">Raza</a>
                <ul>
                    <li><a href="formraza.php">Ingreso Raza</a></li>
                    <li><a href="listraza.php">Listado Raza</a></li>
                    
                </ul>
            </li>
        </ul>

      			<div class="ui container">
              <center><h2>Formulario Razas</h2></center>
                <form class="ui form" action="updateraza.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id;?>" >
            <div class="field">
              <label>Nombre</label>
              <input type="text" name="nombre"  value="<?php echo $row['nom_r']; ?>" placeholder="Nombre Raza">
            </div>

               <div class="field">
                          <label>Proposito</label>
                  <select name="proposito" class="ui fluid dropdown">
                <option value="<?php echo $row['proposito'];?>"><?php echo $row['proposito'];?></option>
                <option value="leche">Leche</option>
                <option value="carne">Carne</option>
                <option value="doble">Doble Proposito</option>
                </select>
            </div>


            <div><button class="ui button" onclick="alerta('¡Datos actualizados!')" 
            type="submit" value="funcion">Actualizar</button></div>
          </form>
          </div>

</body>
</html>