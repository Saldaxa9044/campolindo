<?php
$mysqli=new mysqli("localhost","root","3005","vertientes");
$query="SELECT id_select,nombre,hactarea,lote,fecha,periodo,num_cortes FROM pastoreo";
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
        <center><h2>Listado de Pastoreos</h2></center>
         <div >
  <input type="text" placeholder="Buscar ......">
</div>
      <table class="ui celled table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th >Hactareas</th>
    <th >Lotes</th>
    <th >Fecha</th>
    <th >Perido</th>
    <th >N° Cortes</th>
    <th>Acciones</th>
  </tr>
  </thead>
  <tbody>
  <?php while($row=$resultado->fetch_assoc()){?>

   <tr>
   <td><?php echo $row['id_select']?></td>
     <td><?php echo $row['nombre']?></td>
     <td><?php echo $row['hactarea']?></td>
     <td><?php echo $row['lote']?></td>
     <td><?php echo $row['fecha']?></td>
     <td><?php echo $row['periodo']?></td>
     <td><?php echo $row['num_cortes']?></td></td>
    <td><a class="boton" href="cambioter.php?id=<?php echo $row['id_pot']?>">Eliminar</a>
      </td>
       </tr>
   <?php }?>

  </tbody>
</table>
 </div>
</body>
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