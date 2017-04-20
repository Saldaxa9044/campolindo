<?php
$mysqli=new mysqli("localhost","root","123456789","vertientes");
$query="SELECT id_raza,nom_r,proposito FROM raza";
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
        <center><h2>Listado de Razas</h2></center>
         <div >
  <input type="text" placeholder="Buscar ......">
</div>
      <table class="ui celled table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th >Proposito</th>
    <th width="15%">Acciones</th>
  </tr>
  </thead>
  <tbody>
  <?php while($row=$resultado->fetch_assoc()){?>

   <tr>
   <td><?php echo $row['id_raza']?></td>
     <td><?php echo $row['nom_r']?></td>
     <td><?php echo $row['proposito']?></td>
     <td><a href="editraza.php?id=<?php echo $row['id_raza']?>"><img src="img/mod.png"></a>
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