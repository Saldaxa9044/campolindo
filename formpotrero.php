
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
     <center><h2>Formulario de Potrero</h2></center>
                <form class="ui form" action="insertpot.php" method="POST">
            <div class="field">
              <label>Potrero</label>
              <input type="text" name="nombre" required="">
            </div>

             <div class="field">
              <label>Hactareas</label>
              <input type="number" name="ha" required="">
            </div>

                 <div class="field">
              <label>Rotacion</label>
              <input type="number" name="rotacion" required="">
            </div>

              <div class="field">
              <label>Estado</label>
              <select name="estado" required="" >
                <option>Seleccione estado</option>
                <option value="rotacion">Rotacion</option>
                <option value="receso">Receso</option>
              </select>
            </div>


            <div><button class="ui button" type="submit">Guardar</button></div>
          </form>
          </div>

</body>
</html>