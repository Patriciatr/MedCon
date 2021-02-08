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
    $pac = $miPDO->prepare("SELECT * FROM consultaotra WHERE consultaotra.ID = :ID");

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
  <div class="contenedor ">
    <h1>Consulta </h1>
    <h2>Fecha:</h2>
    <?php
        $pac->execute(array('ID' => $_GET['ID']));
        $v = $pac->fetch();
        echo "<p>" . $v['fecha'] ."</p>";
    ?>
    <table border="1">
    <tbody>
        <?php
                echo "<tr><th>Asunto Consulta</th><td>" . $v['asuntoConsulta'] ."</td></tr>";
                echo "<tr><th>Descripción Consulta</th><td>" . $v['textoConsulta']."</td></tr>";
            ?>
        </body>
    </table>
    <form class="gwd-form-xbgc" method="POST">
    <?php
      if($v['consultaPadre']!=NULL){
        echo "<td><a href ='consultasOtra.php?ID=". $v['ID'][0] ."".$v['consultaPadre']."'><input type=button value=Anterior></a></td>";
      }
      ?>
      <input type="button" id="Archivos" value="Archivos" onclick="location.href='index.php'">
      <?php
      $pad = $miPDO->prepare("SELECT * FROM consultaotra WHERE  consultaotra.consultaPadre = ".substr($v['ID'], 1)."");
      $pad->execute(array('ID' => $_GET['ID']));
      $p = $pad->fetch();
      $bool = $p ? 'false': 'true';
      if($bool != 'true' ){
        echo "<td><a href ='consultasOtra.php?ID=".$p['ID']."'><input type=button value=Siguiente></a></td>";
      }
      
      ?>
    </form>
  </div>
</body>

</html>