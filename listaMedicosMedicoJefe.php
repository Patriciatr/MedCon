<!DOCTYPE html>
<?php 
require('dbmedcon.php');
?>

<html>

<head>
  <meta charset="utf-8">
  <title>Medico</title>
  <link href="styles/estiloMedicoJefe.css" rel="stylesheet">
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css">
  <style type="text/css">
    .gwd-li-13d3 {
      left: 72px;
      top: 16px;
    }
  </style>
  <script>
      function ocultarMostrarBorrar(elementoBorrar, elementoAsignar){
        var x = document.getElementById(elementoBorrar);
        tipoDisplay = getComputedStyle(x, null).display;
        var y =  document.getElementById(elementoAsignar);
        tipoDisplayAsignar = getComputedStyle(y, null).display;

        if (tipoDisplay == "none") {
          x.style.display = "table-row";
          if(tipoDisplayAsignar != "none"){
            y.style.display = "none";
          }
         }   
        else {
          x.style.display = "none";
        }   
      }
      
      function ocultarMostrarAsignar(elementoAsignar, elementoBorrar){
        var x = document.getElementById(elementoAsignar);
        tipoDisplay = getComputedStyle(x, null).display;
        var y = document.getElementById(elementoBorrar);
        tipoDisplayBorrar = getComputedStyle(y, null).display;

        if (tipoDisplay == "none") {
          x.style.display = "table-row";
          if(tipoDisplayBorrar != "none"){
            y.style.display = "none";
          }
         }   
        else {
          x.style.display = "none";
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
      <li class="gwd-li-13d3"><a href="desconectar.html"><h3 class="gwd-p-gv4z gwd-p-1qhn " id="salir">Salir</h3></a></li>
    </ul>
  </nav>
</body>
<div class = "Listado_medicos_medicoJefe">

    <h1>Listado de médicos </h1>
      
    <div>
          <table class = "tablaListadoMedicos">
              <tr>
                <th> ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th> Editar relación médico-paciente</th>
              </tr>
              
              
              <?php

                
                $consulta = $miPDO -> prepare('SELECT * FROM medico');
                $consulta -> execute();
                $medicos = $consulta -> fetchAll();
                
                $cnt = 0;
                foreach($medicos as $medico){
                    $cnt = $cnt +1;
                  echo '
                    <tr>
                        <td>'.$medico['DNImed'].'</td>
                        <td>'.$medico['Nombremed'].'</td>
                        <td>'.$medico['Apellidosmed'].'</td>
                        <td> 
                            <button id = "botonDesplegableBorrar"  type="button" onclick="ocultarMostrarBorrar("filaBorrar'.$cnt.'", "filaAsignar'.$cnt.'")"> Borrar asignación </button>
                            <button id = "botonDesplegableAsignar"  type="button" onclick="ocultarMostrarAsignar("filaAsignar'.$cnt.'", "filaBorrar'.$cnt.'")"> Crear asignación </button>
                        </td>
                    </tr>
                    <tr id = "filaBorrar'.$cnt.'" style.display = "none"> 
                        <td colspan= 2>
                            Seleccione el paciente del médico '.$medico['Nombremed'].' '.$medico['Apellidosmed'].' que quiere desasignar:
                        </td>
                        <td>
                            <select name="paciente" >
                                <option value="Paciente 1">Paciente 1</option>
                                <option value="Paciente 2">Paciente 2</option>
                                <option value="Paciente 3">Paciente 3</option>
                            </select>
                        </td>
                        <td>
                            <input type="submit" name="enviar" value="Borrar asignación">
                        </td>
                    </tr>
                    <tr id = "filaAsignar'.$cnt.'" style.display = "none"> 
                        <td colspan= 2>
                            Seleccione el paciente que quiere asignar al médico '.$medico['Nombremed'].' '.$medico['Apellidosmed'].':
                        </td>
                        <td>
                            <select name="paciente" >
                                <option value="Paciente 1">Paciente 1</option>
                                <option value="Paciente 2">Paciente 2</option>
                                <option value="Paciente 3">Paciente 3</option>
                            </select>
                        </td>
                        <td>
                            <input type="submit" name="enviar" value="Crear asignación">
                        </td>
                    </tr>';
                }
                ?>
              
          </table>

    </div>
    
  </div>

</html>