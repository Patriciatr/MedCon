<!DOCTYPE html>

<?php 
require('dbmedcon.php');
?>

<html>

<head>
  <meta charset="utf-8">
  <title>Paciente</title>
  <link href="styles/estiloPacientes.css" rel="stylesheet">
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
</head>

<body class="htmlNoPages">
  <div class="gwd-div-lm07"></div>
  <img src="assets/logo.png" class="gwd-img-fa6j">
  <nav id="menu-superior">
    <ul>
      <li><a href="listConsultas.html"><h3 class="gwd-p-gv4z" id="listConsultas">Consultas</h3></a></li>
      <li><a href="haceronsultas.html"><h3 class="gwd-p-gv4z gwd-p-1qhn" id="haceronsultas">Hacer consulta</h3></a></li>
      <li class="gwd-li-2971"><a href="fichaPaciente.html"><h3 class="gwd-p-gv4z gwd-p-5vs1" id="fichaPaciente">Datos Personales</h3></a></li>
      <li class="gwd-li-1xiy"><a href="desconectar.html"><h3 class="gwd-p-gv4z destacado" id="salir">Salir</h3></a></li>
    </ul>
  </nav>
 
  
  <div class = "Listado_consultas_paciente">

    <h1>Listado de las consultas realizadas</h1>
      
    <div>
          <table class = "tablaListadoConsultasPaciente">
              <tr>
                  <th>Fecha</th>
                  <th>Asunto</th>
                  <th> Estado</th>
                  <th> Detalles</th>
              </tr>

              <?php
              
            // Comprobar que el id del paciente se pasa como id y SIN comillas
              $idPac = isset($_GET['id']) ?$_GET['id']: null; 

              $consultaCovid = $miPDO -> prepare('SELECT ID, fecha, respondida, asuntoConsulta FROM consultacovid WHERE IDpaciente LIKE :idPac');
              $consultaCovid -> execute(array('idPac' => $idPac));
              $consultasCovid = $consultaCovid -> fetchAll();

              $consultaOtra = $miPDO -> prepare('SELECT ID, fecha, respondida, asuntoConsulta FROM `consultaotra` WHERE IDpaciente LIKE :idPac');
              $consultaOtra -> execute(array('idPac' => $idPac));
              $consultasOtra = $consultaOtra -> fetchAll();

              $consultaPeriodica = $miPDO -> prepare('SELECT ID, fecha, respondida, asuntoConsulta FROM `consultaperiodica` WHERE IDpaciente LIKE :idPac');
              $consultaPeriodica -> execute(array('idPac' => $idPac));
              $consultasPeriodica = $consultaPeriodica -> fetchAll();

              $consultasTodas = array_merge($consultasCovid, $consultasOtra, $consultasPeriodica);


              foreach($consultasTodas as $consulta){
                if($consulta['respondida'] == 0 ){
                    $respondida = "Sin responder";
                }
                else{
                    $respondida = "Respondida";
                }

                echo '
              <tr>
                  <td>'.$consulta['fecha'].'</td>
                  <td>'.$consulta['asuntoConsulta'].'</td>
                  <td>'.$respondida.'</td>
                  <td><a href = "perfilConsulta.php?ID='.$consulta['ID'].'"> Detalles </a></td>
              </tr>';
              }
              ?>
          </table>
    </div>
  </div>
  
  
</body>

</html>