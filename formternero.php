<?php
$mysqli=new mysqli("localhost","root","123456789","vertientes");
$query="SELECT id_dosis,nombre FROM dosis";
$resultado=$mysqli->query($query);
?>

<?php
$mysqli2=new mysqli("localhost","root","123456789","vertientes");
$query2="SELECT id_raza,nom_r FROM raza";
$resultado2=$mysqli2->query($query2);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="semantic.css">
  <script src="semantic.js"></script>
  <script src="js/jquery-3.2.0.min.js"></script>
  <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
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
     <center><h2>Formulario Terneros</h2></center>
                <form class="ui form" action="inserttern.php" method="POST">

            <div class="field">
              <label>DIIO</label>
              <input type="text" name="arete" id="rut" required="" placeholder="Numero Arete">
              <div id="Info"></div>
            </div>
            

             <div class="field">
              <label>Fecha nacimiento</label>
              <input type="date" name="fecha" required="">
            </div>

            <div class="field">
              <label>Peso Inicial</label>
              <input type="number" name="peso" required="" placeholder="Peso ternero">
            </div>
                
              <div class="field">
              <label>Sexo:</label>
              <select id="sexo" name="sexo">
              <option value="0">-Seleccione-</option>
              <option value="macho">Macho</option>
              <option value="hembra">Hembra</option>
              </select>
            </div>
                

               <div class="field">
                 <label>Dosis</label>
                  <select required="" name="dosis" class="ui fluid dropdown">
                    <option value="">Seleccione proposito</option>
                    <?php while($row=$resultado->fetch_assoc()){?>
                    <option value="<?php echo $row['id_dosis']?>"><?php echo $row['nombre']?></option>
                    <?php }?>
                </select>
                
               </div>
               


                  <div class="field">
                 <label>Raza</label>
                  <select name="raza" required="" class="ui fluid dropdown">
                    <option value="">Seleccione proposito</option>
                    <?php while($row=$resultado2->fetch_assoc()){?>
                    <option value="<?php echo $row['id_raza']?>"><?php echo $row['nom_r']?></option>
                    <?php }?>
                </select>
               </div>

                  <div class="field">
                 <label>Estado</label>
                  <select name="estado" class="ui fluid dropdown">
                    <option value="engorda">Existente</option>

                </select>

               </div>

               <input type="hidden" name="fechac">





          

            <div><button class="ui button" type="submit">Guardar</button></div>
          </form>
          </div>
<script type="text/javascript">
  $(document).ready(function(){
    $("button").click(function(){
      alert("Datos guardados");
    });
    
  })

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#rut').blur(function(){

        $('#Info').html('<div>Cargando... </div').fadeOut(1000);

        var rut = $(this).val();        
        var dataString = 'rut='+rut;

        $.ajax({
            type: "POST",
            url: "check.php",
            data: dataString,
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
            }
        });
    });              
  })
</script>
</body>
</html>