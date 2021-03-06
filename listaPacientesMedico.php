<!DOCTYPE html>
<?php 
  require('dbmedcon.php');
  $idMed = isset($_GET['idMed']) ? $_GET['idMed'] : null;
?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="author" content="LuciaVM">
  <title>Medico</title>
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="styles/estiloMedicos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
</head>
</head>
<body class="htmlNoPages">
  <div class="gwd-div-lm07"></div>
  <img src="assets/logo.png" class="gwd-img-fa6j">
  <h4 class = "area" >Área de médico</h4>
  <nav id="menu-superior">
    <ul>
        <li li class="gwd-p-gv4z"><a href="listaConsultasMedico.php?idMed=<?php echo $idMed?>">Consultas Activas</h3></a></li>
        <li class="gwd-p-gv4z gwd-li-yj6f"><a href="listaPacientesMedico.php?idMed=<?php echo $idMed?>">Pacientes</a></li>
        <li class="gwd-p-gv4z gwd-p-5vs1"><a href="login.php">Salir</a></li>
    </ul>
  </nav>
  <div class = "Listado_consultas_medico">

    <h1>Listado de pacientes </h1>
      
    <div>
          <table class = "tablaListadoConsultasMedico">
          <tr>
              <th> DNI</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th> Ver perfil del paciente</th>
          </tr>
              
              <?php
              

              $idMed = isset($_GET['idMed']) ?$_GET['idMed']: null; 
              $consulta = $miPDO -> prepare('SELECT * FROM paciente WHERE Medico like :idMed');
              $consulta -> execute(array('idMed' => $idMed));
              $pacientes = $consulta -> fetchAll();

              foreach($pacientes as $paciente){
                echo '
                    <tr>
                        <td>'.$paciente['DNI'].'</td>
                        <td>'.$paciente['Nombre'].'</td>
                        <td>'.$paciente['Apellidos'].'</td>
                        <td><a href = "perfilPacMedico.php?id='.$paciente['id'].'&idMed='.$idMed.'"> Detalles </a></td>
                    </tr>';
              }

              
              ?>
          </table>
    </div>
  </div>
  
  

</body>

</html>