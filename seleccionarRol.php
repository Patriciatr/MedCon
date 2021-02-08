<?php
    session_start();
    require('dbmedcon.php');
    $dniMed=3; //cambiar por $dniMed=$_GET['dniMed'];
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Selección de Rol</title>
  <link href="styles/estiloMedicoJefe.css" rel="stylesheet">
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
  <script type="text/javascript">
    function rolSeleccionado(){
      rol = document.formulario.rol.value;
      if (rol == "MedicoJefe"){
        window.location.href='listaMedicosMedicoJefe?dniMed=<?php echo $dniMed?>.php';
      } else if (rol == "Medico"){
        window.location.href='listaConsultasMedico?dniMed=<?php echo $dniMed?>.php';
      }
    }
  </script>
</head>

<body class="htmlNoPages">
  <div class="gwd-div-lm07"></div>
  <img src="assets/logo.png" class="gwd-img-fa6j">
  <nav id="menu-superior">
    <ul>
      <li><a href="seleccionarRol.html"><h3 class="gwd-p-gv4z" id="seleccionarRol">Seleccionar Rol</h3></a></li>
      <li><a href="desconectar.html"><h3 class="gwd-p-gv4z gwd-p-1qhn " id="salir">Salir</h3></a></li>
    </ul>
  </nav>
  <div class="form">
    <form name="formulario" method="POST">
      <table>
        <tbody>
          <tr>
            <td><pre><b>Rol   </b></pre></td>
            <td>
              <input type="radio" name="rol" value="Medico">Médico
              <input type="radio" name="rol" value="MedicoJefe">Médico Jefe
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="button" name="enviar" value="Seleccionar" onclick="return rolSeleccionado();">
              <!-- meter login para volver -->
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</body>

</html>
