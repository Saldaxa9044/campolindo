<?php
$mysqli=new mysqli("localhost","root","123456789","vertientes");
$query="SELECT
terneros.arete,
terneros.fech_nac,
terneros.peso_ini,
terneros.peso_actu,
terneros.sexo,
terneros.estado,
dosis.nombre,
raza.nom_r,
terneros.fech_cambio
FROM
terneros
INNER JOIN dosis ON terneros.dosis_al = dosis.id_dosis
INNER JOIN raza ON terneros.raza = raza.id_raza WHERE estado='vendido'";
$resultado=$mysqli->query($query);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="semantic.css">
   <link href="css/menu.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="semantic.css">
  <link href="css/layout.css" rel="stylesheet" type="text/css" />
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
      <p></p>
 <div class="ui container">
        <center><h2>Listado de Terneros Vendidos</h2></center>
           <div >
  <input type="text" placeholder="Buscar ......">
</div>


      <table class="ui celled table">
  <thead>
    <tr>
    <th>Arete</th>
    <th>Fecha Nac</th>
    <th >Peso Inicial</th>
    <th >Peso Actual</th>
    <th >Sexo</th>
    <th >Estado</th>
    <th >Dosis</th>
    <th >Raza</th>
    <th>Fecha Venta</th>
    <th >Acciones</th>
  </tr>
  </thead>
  <tbody>
  <?php while($row=$resultado->fetch_assoc()){?>

   <tr>
   <td><?php echo $row['arete']?></td>
     <td><?php echo $row['fech_nac']?></td>
     <td><?php echo $row['peso_ini']?></td>
     <td><?php echo $row['peso_actu']?></td>
     <td><?php echo $row['sexo']?></td>
     <td><?php echo $row['estado']?></td>
     <td><?php echo $row['nombre']?></td>
     <td><?php echo $row['nom_r']?></td>
     <td><?php echo $row['fech_cambio']?></td>
     <td><a class="boton" href="editternventa.php?id=<?php echo $row['arete']?>">Editar</a>
      </td>

       </tr>
   <?php }?>

  </tbody>
</table>

</body>
</div>
</html>

<style type="text/css">
  .boton{
background-color: #444343;



-ms-border-radius:8px;
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
-webkit-box-shadow: 0 8px 0 #197b1d, 0 10px 20px rgba(0, 0, 0, .4);
-moz-box-shadow: 0 8px 0 #197b1d, 0 10px 20px rgba(0, 0, 0, .4);
box-shadow: 0 8px 0 #197b1d, 0 10px 20px rgba(0, 0, 0, .4);
color: #fff;
display: inline-block;
font-family: ‘Pacifico’, Arial, sans-serif;
font-size: 15px;

padding: 13px 10px;
text-decoration: none;
text-shadow: 0 -1px 1px rgba(25, 123, 29, .7);
}


  
  input {
 
  left: 84%;
  position: relative;
  border-radius: 30px;
  
}

</style>