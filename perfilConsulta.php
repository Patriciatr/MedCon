<?php
// utiliza el mismo formulario pero añade un campo hidden para el id y los campos se completan con los datos leídos de la base de datos
require("db.php");

$pacientes = [];
if(isset($_GET)){

    $str = .$_GET['ID'].;

    $type = (str_word_count($str, 1));

    if($type[1]="c"){
        $perfil = $miPDO->prepare('SELECT * FROM consultacovid WHERE ID = '.$_GET['ID'].';');
        $perfil->execute();
        $paciente = $perfil->fetchAll();
    }
	
    if($type[1]="p"){
        $perfil = $miPDO->prepare('SELECT * FROM consultaperiodica WHERE ID = '.$_GET['ID'].';');
        $perfil->execute();
        $paciente = $perfil->fetchAll();
    }
    if($type[1]="o"){
        $perfil = $miPDO->prepare('SELECT * FROM consultaotra WHERE ID = '.$_GET['ID'].';');
        $perfil->execute();
        $paciente = $perfil->fetchAll();
    }

}

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
      <input type="hidden" name="id" value=<?php echo $paciente[0]['id']; ?>>
      <table border="1">
        <tbody>
          <tr>
          </tr>
          <tr>
            <td>DNI</td>
            <td>
              <!--?php echo $pacientes[0]['dni']; ?-->
            </td>
          </tr>
          <tr>
            <td>Nombre </td>
            <td>
              <!--?php echo $pacientes[0]['nombre']; ?-->
            </td>
          </tr>
          <tr>
            <td>Apellidos</td>
            <td>
              <!--?php echo $pacientes[0]['apellidos']; ?-->
            </td>
          </tr>
          <tr>
            <td>Telefono</td>
            <td>
              <a href="tel:+34651628058">
                <!--?php echo $pacientes[0]['telefono']; ?-->
              </a>
            </td>
          </tr>
          <tr>
            <td>Direccion</td>
            <td>
              <!--?php echo $pacientes[0]['direccion']; ?-->
            </td>
          </tr>
          <tr>
          </tr>
          <tr>
            <td>NumSS</td>
            <td>
              <!--?php echo $pacientes[0]['numss']; ?-->
            </td>
          </tr>
          <tr>
            <td>Sexo</td>
            <td>
              <!--?php echo $pacientes[0]['sexo']; ?-->
            </td>
          </tr>
        </tbody>
      </table>
      <br><br>
      <td><input type="submit" name="Responder"></td>
    </form>
  </div>
</body>

</html>