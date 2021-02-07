<?php
// utiliza el mismo formulario pero añade un campo hidden para el id y los campos se completan con los datos leídos de la base de datos
require("dbmedcon.php");

$pacientes = [];
if(isset($_GET)){
	$editar = $miPDO->prepare('SELECT * FROM paciente WHERE Telefono = '.$_GET['Telefono'].';');
	$editar->execute();
	$paciente = $editar->fetchAll();
}
	
if(isset($_POST['enviar'])) {
	$editar = $miPDO->prepare('UPDATE paciente SET Nombre = "'.$_POST['Nombre'].'", Apellidos = "'.$_POST['Apellidos'].'", Telefono = "'.$_POST['Telefono']. '", Email = "'.$_POST['Email'].'", Fecha = "'.$_POST['Fecha'].'", Sexo = "'.$_POST['Sexo'].'", Direccion = "'.$_POST['Direccion'].'", Localidad = "'.$_POST['Localidad'].'", CD="'.$_POST['CD'].'", Provincia = "'.$_POST['Provincia'].'", Alergias = "'.$_POST['Alergias'].'" WHERE id = "'.$_POST['id'].'";'); 
	$ok_update = $editar->execute();
	if($ok_update) {
		echo "<script>
			alert('Paciente editado correctamente'); 
			window.location.replace('http://localhost/index.php');
		</script>";
	} else {
		print_r($editar->errorInfo());
    }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Paciente</title>
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
  <nav id="menu-superior">
    <ul>
    <li><a href="listaConsultasMedico.php"><h3 class="gwd-p-gv4z" id="listConsultas">Consultas Activas</h3></a></li>
      <li><a href="listaPacientesMedico"><h3 class="gwd-p-gv4z gwd-p-1qhn" id="fichaPaciente">Pacientes</h3></a></li>
      <li><a href="desconectar.html"><h3 class="gwd-p-gv4z gwd-p-5vs1 " id="salir">Salir</h3></a></li>
    </ul>
  </nav>
  <div class="contenedor gwd-div-yyjb">
    <h1>Datos personales de los pacientes</h1>
    <form method="POST" action="formularioRespuesta.php">	
      <input type="hidden" name="id" value=<?php echo $paciente[0]['id']; ?>>
    <div>
    <table border="1">
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
      <br><br>
      <td><input type="submit" name="Responder"></td>
    </form>
    </div>
  </div>
</body>

</html>