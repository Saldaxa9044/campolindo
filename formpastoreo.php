<?php
$id=$_GET['id'];
$mysqli=new mysqli("localhost","root","123456789","vertientes");
$query="SELECT nombre_p,ha FROM potreros WHERE id_pot='$id'";
$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();
?>
<?php
$mysqli=new mysqli("localhost","root","3005","vertientes");
$query="SELECT id_lote,nombre FROM lotes";
$resultado=$mysqli->query($query);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="semantic.css">
  <script src="semantic.js"></script>
  <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
	<title></title>
</head>
<body>
     <header>
            <h1>Sistema SERYPRA</h1>
            <span>Modulo de Praderas</span>
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
     <center><h2>Formulario de pastoreo</h2></center>
                <form class="ui form" action="insertpast.php" method="POST">
            <div class="field">
              <label>Potrero</label>
              <input type="text" name="nombre_p" readonly value="<?php echo $row['nombre_p']; ?>">
            </div>

             <div class="field">
              <label>Hactareas</label>
              <input type="number" name="ha" readonly value="<?php echo $row['ha']; ?>">
            </div>

              <div class="field">
                 <label>Lotes</label>
                  <select required="" name="lotes" class="ui fluid dropdown">
                    <option value="">Seleccione lote</option>
                    <?php while($row=$resultado->fetch_assoc()){?>
                    <option value="<?php echo $row['id_lote']?>"><?php echo $row['nombre']?></option>
                    <?php }?>
                </select>
                
               </div>

                 <div class="field">
              <label>Fecha Pastoreo</label>
              <input type="date" name="fecha" required="">
            </div>

            <div class="field">
              <label>Periodo</label>
              <input type="radio" name="periodo"  value="dia">Dia<br>
              <input type="radio" name="periodo" value="noche">Noche<br>
            </div>

              <div class="field">
              <label>N°cortes</label>
              <input type="number" name="cortes">
            </div>


            <div><button class="ui button" type="submit">Guardar</button></div>
          </form>
          </div>

</body>
</html>