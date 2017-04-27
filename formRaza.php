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

            <li class="cerrar"><a href="#">Cerrar Sesión</a>
            </li>

        </ul>
        <p></p>
        <p></p>

 <div class="ui container">

              <center><h2>Formulario Razas</h2></center>
                <form class="ui form" action="insertraza.php" method="POST">
            <div class="field">
              <label>Nombre</label>
              <input required="" type="text" name="nombre" placeholder="Nombre Raza">
            </div>

               <div class="field">
                          <label>Proposito</label>
                  <select required="" name="proposito" class="ui fluid dropdown">
                    <option value="">Seleccione proposito</option>
                <option value="leche">Leche</option>
                <option value="carne">Carne</option>
                <option value="doble">Doble Proposito</option>
                </select>
            </div>


            <div><button class="ui button"  

            type="submit" value="funcion">Guardar</button></div>
          </form>
          </div>

</body>
</html>