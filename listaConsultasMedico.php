<!DOCTYPE html>

<?php 
require('dbmedcon.php');
?>
<html>

<head>
  <meta charset="utf-8">
  <title>Medico</title>
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="styles/estiloMedicos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
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
  <div class = "Listado_consultas_medico">

    <h1>Listado de las consultas activas</h1>
      
    <div>
          <table class = "tablaListadoConsultasMedico">
              <tr>
                  <th>Fecha</th>
                  <th>Asunto</th>
                  <th> Nombre y apellidos del paciente</th>
                  <th> Detalles</th>
              </tr>

              <?php
              

              $idMedico = isset($_GET['idMed']) ?$_GET['idMed']: null; 
              $consultaCovid = $miPDO -> prepare('SELECT consultacovid.ID, consultacovid.fecha, consultacovid.asuntoConsulta, paciente.Nombre, paciente.Apellidos, paciente.id FROM `consultacovid`, `paciente` WHERE paciente.Medico LIKE :idMed AND consultacovid.IDpaciente LIKE paciente.id AND consultacovid.respondida LIKE 0');
              $consultaCovid -> execute(array('idMed' => $idMedico));
              $consultasCovid = $consultaCovid -> fetchAll();
              

              $consultaOtra = $miPDO -> prepare('SELECT consultaotra.ID, consultaotra.fecha, consultaotra.asuntoConsulta, paciente.Nombre, paciente.Apellidos, paciente.id FROM `consultaotra`, `paciente` WHERE paciente.Medico LIKE :idMed AND consultaotra.IDpaciente LIKE paciente.id AND consultaotra.respondida LIKE 0');
              $consultaOtra -> execute(array('idMed' => $idMedico));
              $consultasOtra = $consultaOtra -> fetchAll();

              $consultaPeriodica = $miPDO -> prepare('SELECT consultaperiodica.ID, consultaperiodica.fecha, consultaperiodica.asuntoConsulta, paciente.Nombre, paciente.Apellidos, paciente.id FROM `consultaperiodica`, `paciente` WHERE paciente.Medico LIKE :idMed AND consultaperiodica.IDpaciente LIKE paciente.id AND consultaperiodica.respondida LIKE 0');
              $consultaPeriodica -> execute(array('idMed' => $idMedico));
              $consultasPeriodica = $consultaPeriodica -> fetchAll();

              $consultasTodas = array_merge($consultasCovid, $consultasOtra, $consultasPeriodica);

              foreach($consultasTodas as $consulta){
                echo '
                <tr>
                    <td>'.$consulta['fecha'].'</td>
                    <td>'.$consulta['asuntoConsulta'].'</td>
                    <td>'.$consulta['Nombre'].' '.$consulta['Apellidos'].'</td>
                    <td><a href = "perfilConsulta.php?ID='.$consulta['ID'].'"> Detalles </a></td>
                </tr>';
              }
            ?>
          </table>
    </div>
  </div>
  
  

</body>

</html>