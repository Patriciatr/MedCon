<?php
// utiliza el mismo formulario pero añade un campo hidden para el id y los campos se completan con los datos leídos de la base de datos
require("dbmedcon.php");
$miPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$covid = $miPDO->prepare("SELECT * FROM paciente WHERE paciente.id = :id");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Medico</title>
  <link href="styles/estiloMedicos.css" rel="stylesheet">
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
  <style type="text/css"></style>
</head>

<body class="htmlNoPages">
  <div class="gwd-div-lm07"></div>
  <img src="assets/logo.png" class="gwd-img-fa6j">
  <nav id="menu-superior">
    <ul>
      <li><a href="listConsultas.html"><h3 class="gwd-p-gv4z" id="listConsultas">Consultas Activas</h3></a></li>
      <li class="gwd-li-yj6f"><a href="ListPacientes.html"><h3 class="gwd-p-gv4z gwd-p-1qhn" id="fichaPaciente">Pacientes</h3></a></li>
      <li><a href="desconectar.html"><h3 class="gwd-p-gv4z gwd-p-5vs1 " id="salir">Salir</h3></a></li>
    </ul>
  </nav>
  <div class="contenedor">
    <h1>Datos personales de los pacientes</h1>
    <form method="POST" action="formularioRespuesta.php">
    <?php
            $pacient = $miPDO->prepare("SELECT * FROM consultacovid, paciente WHERE paciente.dni = consultacovid.DNIpaciente");
            $pacient->execute(array('ID' => $_GET['ID']));
            $v = $pacient->fetch();
            echo "<tr><th>DNI</th><td>" . $v['DNI'] ."</td></tr>";
            echo "<tr><th>Nombre</th><td>" . $v['Nombre'] ."</td></tr>";
            echo "<tr><th>Apellidos</th><td>" . $v['Apellidos'] ."</td></tr>";
            echo "<tr><th>Numero de la seguridad social</th><td>" . $v['NumSS'] . "</td></tr>";
            echo "<tr><th>Sexo</th><td>" . $v['Sexo'] . "</td></tr>";
            ?>	
        </tbody>
      </table>
    <table border="1">
    <tbody>
        <?php

                $covid->execute(array('ID' => $_GET['ID']));
                $c = $covid->fetchAll();
                echo "<tr><th>Fecha</th><td>" . $c['fecha'] .'</td></tr>';
                echo "<tr><th>Malestar general</th><td>" . ($c['malestar_general'] ? 'Sí' : 'No').'</td></tr>';
                echo "<tr><th>Temperatura</th><td>" . $c['temperatura'] ."</td></tr>";
                echo "<tr><th>Mucosidad</th><td>" . ($c['mucosidad'] ? 'Sí' : 'No')."</td></tr>";
                echo "<tr><th>Dolor tragar</th><td>" . ($c['dolor_tragar']? 'Sí' : 'No') . "</td></tr>";
                echo "<tr><th>Cambio voz</th><td>" . ($c['cambio_voz'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Tos</th><td>" . ($c['tos'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Falta de aire</th><td>" .( $c['falta_aire'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Perdida olfato/gusto</th><td>" .( $c['perdida_olf_gust'] ? 'Sí' : 'No')."</td></tr>";
                echo "<tr><th>Dolor muscular</th><td>" . ($c['dolor_muscular']? 'Sí' : 'No') ."</td></tr>";
                echo "<tr><th>Cambio voz</th><td>" . ($c['cambio_voz'] ? 'Sí' : 'No')."</td></tr>";
                echo "<tr><th>Dolor tragar</th><td>" . ($c['dolor_tragar'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Diarrea</th><td>" . ($c['diarrea']? 'Sí' : 'No') . "</td></tr>";
                echo "<tr><th>Enfermedad Cronica</th><td>" . ($c['enfermedad_cron'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Contacto positivo</th><td>" . ($c['contacto_positivo'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Embarazo</th><td>" . ($c['embarazo'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Sanitario FFAA SSEE</th><td>" . ($c['sanitario_FFAA_SSEE'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Número de habitaciones que tiene la residencia</th><td>" . ($c['hab_residencia'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Fumador</th><td>" . ($c['fumador'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Ha viajado a un país o zona de riesgo</th><td>" . ($c['zona_riesgo'] ? 'Sí' : 'No'). "</td></tr>";
            ?>
        </body>
    </table>
      <br><br>
      <td><input type="submit" name="Responder"></td>
    </form>
  </div>
</body>

</html>