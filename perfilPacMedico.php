<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Perfil del paciente</title>
  <link rel="icon" href="assets/logo.ico" type="image/ico">
  <link href="styles/estiloMedicos.css" rel="stylesheet">
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
  <style type="text/css"></style>
</head>

<body class="htmlNoPages">
<?php
    require("dbmedcon.php");
    $idMed = isset($_GET['idMed']) ? $_GET['idMed'] : null;

    $miPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pac = $miPDO->prepare("SELECT * FROM paciente WHERE paciente.id = :id");

?>
  <div class="gwd-div-lm07"></div>
  <img src="assets/logo.png" class="gwd-img-fa6j">
  <nav id="menu-superior">
    <ul>
    <li><a href="listaConsultasMedico.php?idMed=<?php echo $idMed?>"><h3 class="gwd-p-gv4z" id="listConsultas">Consultas Activas</h3></a></li>
      <li ><a href="listaPacientesMedico.php?idMed=<?php echo $idMed?>"><h3 class="gwd-p-gv4z gwd-p-1qhn" id="fichaPaciente">Pacientes</h3></a></li>
      <li><a href="login.php"><h3 class="gwd-p-gv4z gwd-p-5vs1 " id="salir">Salir</h3></a></li>
    </ul>
  </nav>
  <div class="contenedor gwd-div-yyjb">
    <h1>Datos personales de los pacientes</h1>
    <div>
    <table class="perfil">
        <tbody>
        <?php
                $pac->execute(array('id' => $_GET['id']));
                $v = $pac->fetch();
                echo "<tr><th>DNI</th><td>" . $v['DNI'] ."</td></tr>";
                echo "<tr><th>Nombre</th><td>" . $v['Nombre'] ."</td></tr>";
                echo "<tr><th>Apellidos</th><td>" . $v['Apellidos'] ."</td></tr>";
                echo "<tr><th>Telefono</th><td><a href = tlf:'" . $v['Telefono'] . "'>" . $v['Telefono'] . "</a></td></tr>";
                echo "<tr><th>Dirección</th><td>" . $v['Direccion'] . "</td></tr>";
                echo "<tr><th>Numero de la seguridad social</th><td>" . $v['NumSS'] . "</td></tr>";
                echo "<tr><th>Sexo</th><td>" . $v['Sexo'] . "</td></tr>";
                
                    
            ?>
        </body>
        </table>
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

              $cov = $miPDO->prepare("SELECT * FROM consultacovid, medico, paciente WHERE medico.id = paciente.Medico AND consultacovid.IDpaciente = :id AND paciente.id = :id  ");
              $peri = $miPDO->prepare("SELECT * FROM consultaperiodica, medico, paciente WHERE medico.id = paciente.Medico AND consultaperiodica.IDpaciente = :id AND paciente.id = :id ");
              $ot = $miPDO->prepare("SELECT * FROM consultaotra, medico, paciente WHERE medico.id = paciente.Medico AND consultaotra.IDpaciente = :id AND paciente.id = :id ");

              $cov->execute(array('id' => $_GET['id']));
              $peri->execute(array('id' => $_GET['id']));
              $ot->execute(array('id' => $_GET['id']));

              $c = $cov->fetchAll();
              $p = $peri->fetchAll();
              $o = $ot->fetchAll(); 

              $consultasTodas = array_merge($c, $p, $o);


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
                  <td><a href = "perfilConsulta.php?ID='.$consulta['ID'].'&idMed='.$idMed.'"> Detalles </a></td>
              </tr>';
              }
              ?>
          </table>
    </div>
  </div>
</body>

</html>