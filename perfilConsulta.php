<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Perfil de la consulta</title>
  <link rel="icon" href="assets/logo.ico" type="image/ico">
  <link href="styles/estiloMedicos.css" rel="stylesheet">
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
  <style type="text/css"></style>
</head>

<body class="htmlNoPages">
  <?php
  require("dbmedcon.php");
  $miPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(isset($_GET)){

    $str = $_GET['ID'];


    if($str[0]=="c"){
        $covid = $miPDO->prepare("SELECT * FROM consultacovid WHERE consultacovid.ID = :ID");
        $covid->execute(array('ID' => $_GET['ID']));
        $v = $covid->fetch();

    }
	
    else if($str[0]=="p"){
        $periodico = $miPDO->prepare("SELECT * FROM consultaperiodica WHERE consultaperiodica.ID = :ID");
        $periodico->execute(array('ID' => $_GET['ID']));
        $v = $periodico->fetch();

      }
    else if($str[0]=="o"){
        $otra = $miPDO->prepare("SELECT * FROM consultaotra WHERE consultaotra.ID = :ID");
        $otra->execute(array('ID' => $_GET['ID']));
        $v = $otra->fetch();

      }
    

}
  ?>
  <div class="gwd-div-lm07"></div>
  <img src="assets/logo.png" class="gwd-img-fa6j">
  <nav id="menu-superior">
    <ul>
    <li><a href="listaConsultasMedico.php"><h3 class="gwd-p-gv4z" id="listConsultas">Consultas Activas</h3></a></li>
      <li ><a href="listaPacientesMedico.php"><h3 class="gwd-p-gv4z gwd-p-1qhn" id="fichaPaciente">Pacientes</h3></a></li>
      <li><a href="desconectar.html"><h3 class="gwd-p-gv4z gwd-p-5vs1 " id="salir">Salir</h3></a></li>
    </ul>
  </nav>
  <div class="contenedor">
    <h1>Datos de consulta</h1> 

<!-- ***************************************  COVID ********************************************************************-->

    <table class="perfil">
      <tbody>
      <?php
          print_r($str);

          if($str[0]=="c"){
          $pacient = $miPDO->prepare("SELECT * FROM consultacovid, paciente WHERE paciente.id = consultacovid.IDpaciente AND consultacovid.ID = :ID");
          $pacient->execute(array('ID' => $_GET['ID']));
          $p = $pacient->fetch();
            echo "<tr><th>DNI</th><td>" . $p['DNI'] ."</td></tr>";
            echo "<tr><th>Nombre</th><td>" . $p['Nombre'] ."</td></tr>";
            echo "<tr><th>Apellidos</th><td>" . $p['Apellidos'] ."</td></tr>";
            echo "<tr><th>Numero de la seguridad social</th><td>" . $p['NumSS'] . "</td></tr>";
            echo "<tr><th>Sexo</th><td>" . $p['Sexo'] . "</td></tr>";
            echo "<tr><th>Fecha</th><td>" .$v['fecha'] . "</td></tr>";
            echo "<tr><th>Descripción</th><td>" . $v['textoConsulta'] . "</td></tr>";
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
            echo "<td><a href ='formularioRespuesta.php?ID=". $v['ID'] ."&Medico=". $p['Medico'] ."'><input type=button value=Responder></a></td>";
          }

          
          ?>
        </tbody>
      </table>
      
<!-- ***************************************  PERIODICA ********************************************************************-->
      
      <table class="perfil">
      <tbody>
      <?php   
          if($str[0]=="p"){      
            $pacient = $miPDO->prepare("SELECT * FROM consultaperiodica, paciente WHERE paciente.id = consultaperiodica.IDpaciente AND consultaperiodica.ID = :ID");
            $pacient->execute(array('ID' => $_GET['ID']));
            $p = $pacient->fetch();    
            echo "<tr><th>DNI</th><td>" . $p['DNI'] ."</td></tr>";
            echo "<tr><th>Nombre</th><td>" . $p['Nombre'] ."</td></tr>";
            echo "<tr><th>Apellidos</th><td>" . $p['Apellidos'] ."</td></tr>";
            echo "<tr><th>Numero de la seguridad social</th><td>" . $p['NumSS'] . "</td></tr>";
            echo "<tr><th>Sexo</th><td>" . $p['Sexo'] . "</td></tr>";
            echo "<tr><th>Fecha</th><td>" .$v['fecha'] . "</td></tr>";
            echo "<tr><th>Tema</th><td>" . $v['tema'] .'</td></tr>';
            echo "<tr><th>Asunto Consulta</th><td>" . $v['asuntoConsulta'] ."</td></tr>";
            echo "<tr><th>Descripción Consulta</th><td>" . $v['textoConsulta']."</td></tr>";
            echo "<td><a href ='formularioRespuesta.php?ID=". $v['ID'] ."&Medico=". $p['Medico'] ."'><input type=button value=Responder></a></td>";
          }?>
        </tbody>
      </table>

<!-- ***************************************  OTRA ********************************************************************-->

      <table class="perfil">
      <tbody>
      <?php
          if($str[0]=="o"){   
            $pacient = $miPDO->prepare("SELECT * FROM consultaotra, paciente WHERE paciente.id = consultaotra.IDpaciente AND consultaotra.ID = :ID");
            $pacient->execute(array('ID' => $_GET['ID']));
            $p = $pacient->fetch();
            echo "<tr><th>DNI</th><td>" . $p['DNI'] ."</td></tr>";
            echo "<tr><th>Nombre</th><td>" . $p['Nombre'] ."</td></tr>";
            echo "<tr><th>Apellidos</th><td>" . $p['Apellidos'] ."</td></tr>";
            echo "<tr><th>Numero de la seguridad social</th><td>" . $p['NumSS'] . "</td></tr>";
            echo "<tr><th>Sexo</th><td>" . $p['Sexo'] . "</td></tr>";
            echo "<tr><th>Asunto Consulta</th><td>" . $v['asuntoConsulta'] ."</td></tr>";
            echo "<tr><th>Descripción Consulta</th><td>" . $v['textoConsulta']."</td></tr>";
            echo "<td><a href ='formularioRespuesta.php?ID=". $v['ID'] ."&Medico=". $p['Medico'] ."'><input type=button value=Responder></a></td>";
          }  ?>
        </tbody>
      </table>

    </div>
  </body>

</html>