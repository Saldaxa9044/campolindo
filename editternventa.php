<?php
$id=$_GET['id'];
$mysqli=new mysqli("localhost","root","3005","vertientes");
$query="SELECT
terneros.arete,
terneros.fech_nac,
terneros.peso_ini,
terneros.peso_actu,
terneros.sexo,
terneros.estado,
dosis.nombre,
dosis.id_dosis,
raza.id_raza,
raza.nom_r,
terneros.fech_cambio
FROM
terneros
INNER JOIN dosis ON terneros.dosis_al = dosis.id_dosis
INNER JOIN raza ON terneros.raza = raza.id_raza  WHERE arete='$id'";
$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="semantic.css">
  <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
  <script src="semantic.js"></script>
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
     <center><h2>Formulario Terneros</h2></center>
                <form class="ui form" action="updateter.php" method="POST">
            <div class="field">
              <label>DIIO</label>
              <input type="text" name="arete"  readonly="readonly" value="<?php echo $row['arete'];?>" placeholder="Numero Arete">
            </div>

             <div class="field">
              <label>Fecha nacimiento</label>
              <input type="date" name="fecha" value="<?php echo $row['fech_nac'];?>">
            </div>

            <div class="field">
              <label>Fecha Venta</label>
              <input type="date" name="fechac" value="<?php echo $row['fech_cambio'];?>">
            </div>

            <div class="field">
              <label>Peso</label>
              <input type="number" name="peso" value="<?php echo $row['peso_actu'];?>" placeholder="Peso ternero">
            </div>
                
              <div class="field">
              <label>Sexo</label>
              <input name="sexo" value="<?php echo $row['sexo'];?>">
            </div>
                

               <div class="field">
                 <label>Dosis</label>
                  <select name="dosis" class="ui fluid dropdown">
                   <option value="<?php echo $row['id_dosis'];?>"><?php echo $row['nombre'];?></option>
                </select>
                
               </div>
               


                  <div class="field">
                 <label>Raza</label>
                  <select name="raza" class="ui fluid dropdown">
                     <option value="<?php echo $row['id_raza'];?>"><?php echo $row['nom_r'];?></option>
                    
                </select>
               </div>

                  <div class="field">
                 <label>Estado</label>
                  <select name="estado" class="ui fluid dropdown">
                  <option value="<?php echo $row['estado'];?>"><?php echo $row['estado'];?></option>
                  <option value="existente">Existente</option>
                  

                </select>
               </div>   

            <div><button class="ui button" type="submit">Guardar</button></div>
          </form>
          </div>

</body>
</html>