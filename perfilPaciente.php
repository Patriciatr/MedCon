<!DOCTYPE html>
<?php
  $IDPaciente = $_GET['id'];
?>
<html>
  
<head>
  <meta charset="utf-8">
  <meta name="author" content="PatriciaTR">
  <title>Datos personales</title>
  <link rel="icon" href="assets/logo.ico" type="image/ico">
  <link href="styles/estiloPacientes.css" rel="stylesheet">
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
  <style type="text/css"></style>
</head>

<body class="htmlNoPages">
<?php
    require("dbmedcon.php");
    $miPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pac = $miPDO->prepare("SELECT * FROM paciente WHERE paciente.id = :id");

?>
  <div class="gwd-div-lm07"></div>
  <img src="assets/logo.png" class="gwd-img-fa6j">
  <h4 class = "area" >Área de paciente</h4>
  <nav id="menu-superior">
    <ul>
      <li class="gwd-p-gv4z"><a href="listaConsultasPaciente.php?id=<?php echo $IDPaciente?>">Consultas</a></li>
      <li class="gwd-p-gv4z gwd-p-1qhn"><a href="hacerConsulta.php?IDPaciente=<?php echo $IDPaciente?>">Hacer consulta</a></li>
      <li class="gwd-p-gv4z gwd-p-5vs1"><a href="perfilPaciente.php?id=<?php echo $IDPaciente?>">Datos Personales</a></li>
      <li class="gwd-p-gv4z salir"><a href="login.php">Salir</a></li> 
    </ul>
  </nav>
  <div class="contenedor gwd-div-yyjb">
    <div id="tituloPerfilPaciente">
      <h1>Datos personales del paciente</h1>
    </div>
    <div class = "divTablaPerfilPac">
    <table class="tablaPerfil">
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
            
                $med = $miPDO->prepare("SELECT * FROM medico, paciente WHERE medico.id = paciente.Medico");
                $med->execute(array('id' => $_GET['id']));
                $m = $med->fetch();
                echo "<tr><th>Medico asignado</th><td>" . $m['Apellidosmed'] .", " . $m['Nombremed'] . "</td></tr>";
            ?>
        </body>
    </div>
  </div>
</body>

</html>