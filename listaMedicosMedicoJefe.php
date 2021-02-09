<!DOCTYPE html>
<?php 
require('dbmedcon.php');
$idMed=$_GET['idMed'];
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
        var x = elementoBorrar;
        tipoDisplay = getComputedStyle(x, null).display;
        var y = elementoAsignar;
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
        var x = elementoAsignar;
        tipoDisplay = getComputedStyle(x, null).display;
        var y = elementoBorrar;
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
      <li><a href='seleccionarRol.php?idMed=<?php echo $idMed?>'><h3 class="gwd-p-gv4z" id="seleccionarRol">Seleccionar Rol</h3></a></li>
      <li class="gwd-li-13d3"><a href="login.php"><h3 class="gwd-p-gv4z gwd-p-1qhn " id="salir">Salir</h3></a></li>
    </ul>
  </nav>
</body>
<div class = "Listado_medicos_medicoJefe">

<?php 

      // Los formularios de esta página envían a la misma página. Primero, comprobamos si se quiere borrar una asignación o crearla

      //Borrar asignación
      //16541029Q

      $dniPacBorrar = isset($_POST['pacienteBorrar']) ? $_POST['pacienteBorrar'] : null;
      $dniPacCrear = isset($_POST['pacienteCrear']) ? $_POST['pacienteCrear'] : null;
      $idMedico = isset($_POST['medicoID']) ? $_POST['medicoID'] : null;
      
      if($dniPacBorrar != null){
        $consultaBorrar = $miPDO -> prepare('UPDATE paciente SET Medico = -1 WHERE DNI = :dni');
        $ok = $consultaBorrar -> execute(array('dni' => $dniPacBorrar));
      }
      
      elseif($dniPacCrear != null and $idMedico != null){
        $consultaCrear = $miPDO -> prepare('UPDATE paciente SET Medico = :idMedico WHERE DNI = :dni');
        $ok = $consultaCrear -> execute(array('idMedico'=> $idMedico, 'dni' => $dniPacCrear));
      }

      
     


?>
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
                        <button id = "botonDesplegableBorrar'.$cnt.'"  class = "botonDesplegableBorrar" type="button" onclick="ocultarMostrarBorrar(filaBorrar'.$cnt.', filaAsignar'.$cnt.')"> Borrar asignación </button>
                        <button id = "botonDesplegableAsignar'.$cnt.'"  class = "botonDesplegableAsignar" type="button" onclick="ocultarMostrarAsignar(filaAsignar'.$cnt.', filaBorrar'.$cnt.')"> Crear asignación </button>
                        </td>
                    </tr>
                    
                  <form name= "borrarAsignacion'.$cnt.'" action = "listaMedicosMedicoJefe.php" method = "post" enctype = "multipart/form-data">
                    <tr id = "filaBorrar'.$cnt.'" class = "borrarOcultoInicio">
                      <td colspan= 2>
                        Seleccione el paciente del médico '.$medico['Nombremed']." ".$medico['Apellidosmed'].' que quiere desasignar
                      </td>
                      <td>
                        <select name="pacienteBorrar" >';

                          $consultaPacMedico = $miPDO -> prepare('SELECT * FROM paciente WHERE Medico like :ID');
                          $consultaPacMedico -> execute(array('ID' => $medico['id']));
                          $pacientesCon = $consultaPacMedico -> fetchAll();
                          
                          if(count($pacientesCon) == 0){
                            echo 'El doctor no tienen ningún paciente asignado';
                          }
                          else{
                            foreach($pacientesCon as $pacienteCon){
                              echo 
                              '<option value="'.$pacienteCon['DNI'].'">'.$pacienteCon['DNI']." - ".$pacienteCon['Nombre']." ".$pacienteCon['Apellidos'].'</option>';
                            }

                          }
                        echo 
                        '</select>
                      </td>
                      <td>
                        <input type="submit" name="enviar" value="Borrar asignación">
                      </td>
                    </tr>
                   </form> 
                   <form name= "crearAsignacion'.$cnt.'" action = "listaMedicosMedicoJefe.php" method = "post" enctype = "multipart/form-data">
                    <tr id = "filaAsignar'.$cnt.'" class = "asignarOcultoInicio"> 
                      <td colspan= 2>
                        Seleccione el paciente que quiere asignar
                      </td>
                      <td>
                        <select name="pacienteCrear" >';

                        $consultaPacSinMedico = $miPDO -> prepare('SELECT * FROM paciente WHERE Medico like -1');
                        $consultaPacSinMedico -> execute();
                        $pacientesSin =  $consultaPacSinMedico -> fetchAll();
                        $medicoID = $medico['id'];
                        if(count($pacientesSin) == 0){
                          echo '<option value="SinPaciente">'."No hay pacientes sin doctor asignado".'</option>';
                        }
                        else{
                          foreach($pacientesSin as $pacienteSin){
                            echo '<option value="'.$pacienteSin['DNI'].'">'.$pacienteSin['DNI']." - ".$pacienteSin['Nombre']." ".$pacienteSin['Apellidos'].'</option>';
                          }
                        }
                  
                        echo 
                        '</select>
                      </td>
                      <td>
                        <input type="hidden" name="medicoID" value="'.$medicoID.'">
                        <input type="submit" name="enviar" value="Crear asignación">
                      </td>
                    </tr>
                  </form>';
                }
                ?>
              
          </table>
        
    </div>
    
  </div>

</html>