<?php
$mysqli=new mysqli("localhost","root","123456789","vertientes");
$query="SELECT id_pot,nombre_p,ha,rotacion,estado FROM potreros";
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
        <center><h2>Listado de Potreros</h2></center>
         <div >
  <input type="text" placeholder="Buscar ......">
</div>
      <table class="ui celled table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th >Hactareas</th>
    <th >Rotacion</th>
    <th >Estado</th>
    <th>Acciones</th>
  </tr>
  </thead>
  <tbody>
  <?php while($row=$resultado->fetch_assoc()){?>

   <tr>
   <td><?php echo $row['id_pot']?></td>
     <td><?php echo $row['nombre_p']?></td>
     <td><?php echo $row['ha']?></td>
     <td><?php echo $row['rotacion']?></td>
     <td><?php echo $row['estado']?></td>
    <td width="25%"><a class="boton" href="editpot.php?id=<?php echo $row['id_pot']?>">Editar</a>
      <a class="boton" href="formpastoreo.php?id=<?php echo $row['id_pot']?>">Pastorear</a>
      <a class="boton" href="cambioter.php?id=<?php echo $row['id_pot']?>">Eliminar</a>
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
  

</style>
</style>