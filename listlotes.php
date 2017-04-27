<?php
$mysqli=new mysqli("localhost","root","3005","vertientes");
$query="SELECT id_lote,nombre,num_animal FROM lotes";
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
            <span>Modulo Praderas</span>
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
        <center><h2>Listado de Lotes</h2></center>
         <div >
  <input type="text" placeholder="Buscar ......">
</div>
      <table class="ui celled table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th >Numero animales</th>
    <th width="15%">Acciones</th>
  </tr>
  </thead>
  <tbody>
  <?php while($row=$resultado->fetch_assoc()){?>

   <tr>
   <td><?php echo $row['id_lote']?></td>
   <td><?php echo $row['nombre']?></td>
     <td><?php echo $row['num_animal']?></td>
     <td><a href="editlote.php?id=<?php echo $row['id_lote']?>"><img src="img/mod.png"></a>
     <a href="deleteraza.php?id=<?php echo $row['id_raza']?>"><img src="img/eliminar.png"></a></td>
       </tr>
   <?php }?>

  </tbody>
</table>

</body>
</div>
</html>

<style type="text/css">
  
  input {
 
  left: 84%;
  position: relative;
  border-radius: 30px;
  
}
</style>