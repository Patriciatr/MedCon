<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Paciente</title>
  <link href="styles/estiloPacientes.css" rel="stylesheet">
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
  <style type="text/css">
  </style>
</head>

<body class="htmlNoPages">
<?php
    require("dbmedcon.php");
    $miPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pac = $miPDO->prepare("SELECT * FROM consultacovid WHERE consultacovid.ID = :ID");

?>
  <div class="gwd-div-lm07"></div>
  <img src="assets/logo.png" class="gwd-img-fa6j">
  <nav id="menu-superior">
    <ul>
      <li><a href="listaConsultasPaciente.php"><h3 class="gwd-p-gv4z" id="listConsultas">Consultas</h3></a></li>
      <li><a href="formularioAsignar.php"><h3 class="gwd-p-gv4z gwd-p-1qhn" id="haceronsultas">Hacer consulta</h3></a></li>
      <li><a href="perfilPaciente.php"><h3 class="gwd-p-gv4z gwd-p-5vs1" id="fichaPaciente">Datos Personales</h3></a></li>
      <li ><a href="desconectar.html"><h3 class="gwd-p-gv4z destacado" id="salir">Salir</h3></a></li>
    </ul>
  </nav>
  <div class="contenedor gwd-div-1rji">
    <h1>Consultas COVID</h1>
    <h2>Fecha:</h2>
    <?php
        $pac->execute(array('ID' => $_GET['ID']));
        $v = $pac->fetch();
        echo "<p>" . $v['fecha'] ."</p>";
    ?>
    <h2>Descripción:</h2>
    <?php
        echo "<p>" . $v['textoConsulta'] ."</p>";
    ?>
    <table border="1">
    <tbody>
        <?php
                echo "<tr><th>Malestar general</th><td>" . ($v['malestar_general'] ? 'Sí' : 'No').'</td></tr>';
                echo "<tr><th>Temperatura</th><td>" . $v['temperatura'] ."</td></tr>";
                echo "<tr><th>Mucosidad</th><td>" . ($v['mucosidad'] ? 'Sí' : 'No')."</td></tr>";
                echo "<tr><th>Dolor tragar</th><td>" . ($v['dolor_tragar']? 'Sí' : 'No') . "</td></tr>";
                echo "<tr><th>Cambio voz</th><td>" . ($v['cambio_voz'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Tos</th><td>" . ($v['tos'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Falta de aire</th><td>" .( $v['falta_aire'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Perdida olfato/gusto</th><td>" .( $v['perdida_olf_gust'] ? 'Sí' : 'No')."</td></tr>";
                echo "<tr><th>Dolor muscular</th><td>" . ($v['dolor_muscular']? 'Sí' : 'No') ."</td></tr>";
                echo "<tr><th>Cambio voz</th><td>" . ($v['cambio_voz'] ? 'Sí' : 'No')."</td></tr>";
                echo "<tr><th>Dolor tragar</th><td>" . ($v['dolor_tragar'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Diarrea</th><td>" . ($v['diarrea']? 'Sí' : 'No') . "</td></tr>";
                echo "<tr><th>Enfermedad Cronica</th><td>" . ($v['enfermedad_cron'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Contacto positivo</th><td>" . ($v['contacto_positivo'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Embarazo</th><td>" . ($v['embarazo'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Sanitario FFAA SSEE</th><td>" . ($v['sanitario_FFAA_SSEE'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Número de habitaciones que tiene la residencia</th><td>" . ($v['hab_residencia'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Fumador</th><td>" . ($v['fumador'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Ha viajado a un país o zona de riesgo</th><td>" . ($v['zona_riesgo'] ? 'Sí' : 'No'). "</td></tr>";
            ?>
        </body>
    </table>
    <form class="gwd-form-xbgc" method="POST">
      <?php
      if($v['consultaPadre']==NULL){
        echo "<td><a href ='consultaPacientCOVID.php?ID=". $v['ID'][0] ."".$v['consultaPadre']."'><input type=button value=Anterior></a></td>";
      }
      ?>
      <input type="button" id="Archivos" value="Archivos" onclick="location.href='index.php'">
      <input type="button" id="Siguiente" value="Siguiente" onclick="location.href='index.php'">
    </form>
  </div>
</body>

</html>