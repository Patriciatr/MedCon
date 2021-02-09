<?php
  $IDPaciente = $_GET['id'];
?>
<!DOCTYPE html>

<?php 
require('dbmedcon.php');
?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="author" content="LuciaVM">
  <title>Paciente</title>
  <link href="styles/estiloPacientes.css" rel="stylesheet">
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
</head>

<body class="htmlNoPages">
  <div class="gwd-div-lm07"></div>
  <img src="assets/logo.png" class="gwd-img-fa6j">
  <h4 class = "area" >Área de paciente</h4>
  <nav id="menu-superior">
    <ul>
      <li class="gwd-p-gv4z"><a href="listaConsultasPaciente.php?id=<?php echo $IDPaciente?>">Consultas</a></li>
      <li class="gwd-p-gv4z gwd-p-1qhn"><a href="hacerConsulta.php?IDPaciente=<?php echo $IDPaciente?>">Hacer consulta</a></li>
      <li class="gwd-p-gv4z gwd-p-5vs1"><a href="perfilPaciente.php?id=<?php echo $IDPaciente?>"><id="PerfilPaciente">Datos personales</a></li>
      <li class="gwd-p-gv4z salir"><a href="login.php">Salir</a></li> 
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
                  <td><a href = "perfilPacConsult.php?ID='.$consulta['ID'].'&idPac='.$idPac.'"> Detalles </a></td>
              </tr>';
              }
              ?>
          </table>
    </div>
  </div>
  
  
</body>

</html>