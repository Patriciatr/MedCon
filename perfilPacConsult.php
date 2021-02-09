<!DOCTYPE html>
<?php
  $IDPaciente = $_GET['idPac'];
?>
<html>

<head>
  <meta charset="utf-8">
  <title>Perfil de la consulta</title>
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
  if(isset($_GET)){

    $str = $_GET['ID'];


    if($str[0]=="c"){
        $covid = $miPDO->prepare("SELECT * FROM consultacovid WHERE consultacovid.ID = :ID");
        $covid->execute(array('ID' => $_GET['ID']));
        $v = $covid->fetch();

    }
	
    else if($str[0]=="p"){
        $periodico = $miPDO->prepare("SELECT * FROM consultaperiodica WHERE consultaperiodica.ID = :ID");
        $periodico->execute(array('ID' => $_GET['ID']));
        $v = $periodico->fetch();

      }
    else if($str[0]=="o"){
        $otra = $miPDO->prepare("SELECT * FROM consultaotra WHERE consultaotra.ID = :ID");
        $otra->execute(array('ID' => $_GET['ID']));
        $v = $otra->fetch();

      }

}
  ?>
  <div class="gwd-div-lm07"></div>
  <img src="assets/logo.png" class="gwd-img-fa6j">
  <nav id="menu-superior">
  <ul>
      <li><a href="listaConsultasPaciente.php?id=<?php echo $IDPaciente?>"><h3 class="gwd-p-gv4z" id="listConsultas">Consultas</h3></a></li>
      <li><a href="hacerConsulta.php?IDPaciente=<?php echo $IDPaciente?>"><h3 class="gwd-p-gv4z gwd-p-1qhn" id="haceronsultas">Hacer consulta</h3></a></li>
      <li><a href="perfilPaciente.php?id=<?php echo $IDPaciente?>"><h3 class="gwd-p-gv4z gwd-p-5vs1" id="fichaPaciente">Datos Personales</h3></a></li>
      <li ><a href="login.php"><h3 class="gwd-p-gv4z destacado" id="salir">Salir</h3></a></li>
    </ul>
  </nav>
  <div class="contenedor">
    <h1>Datos de consulta</h1> 
  
<!-- ***************************************  COVID ********************************************************************-->    
  
    <table class="perfil">
      <tbody>
      <?php
          if($str[0]=="c"){
                echo "<p>" . $v['fecha'] ."</p>";
                echo "<p>" . $v['textoConsulta'] ."</p>";
                echo "<tr><th>Malestar general</th><td>" . ($v['malestar_general'] ? 'Sí' : 'No').'</td></tr>';
                echo "<tr><th>Temperatura</th><td>" . $v['temperatura'] ."</td></tr>";
                echo "<tr><th>Mucosidad</th><td>" . ($v['mucosidad'] ? 'Sí' : 'No')."</td></tr>";
                echo "<tr><th>Dolor tragar</th><td>" . ($v['dolor_tragar']? 'Sí' : 'No') . "</td></tr>";
                echo "<tr><th>Cambio voz</th><td>" . ($v['cambio_voz'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Tos</th><td>" . ($v['tos'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Falta de aire</th><td>" .( $v['falta_aire'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Perdida olfato/gusto</th><td>" .( $v['perdida_olf_gust'] ? 'Sí' : 'No')."</td></tr>";
                echo "<tr><th>Dolor muscular</th><td>" . ($v['dolor_muscular']? 'Sí' : 'No') ."</td></tr>";
                echo "<tr><th>Cambio voz</th><td>" . ($v['cambio_voz'] ? 'Sí' : 'No')."</td></tr>";
                echo "<tr><th>Dolor tragar</th><td>" . ($v['dolor_tragar'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Diarrea</th><td>" . ($v['diarrea']? 'Sí' : 'No') . "</td></tr>";
                echo "<tr><th>Enfermedad Cronica</th><td>" . ($v['enfermedad_cron'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Contacto positivo</th><td>" . ($v['contacto_positivo'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Embarazo</th><td>" . ($v['embarazo'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Sanitario FFAA SSEE</th><td>" . ($v['sanitario_FFAA_SSEE'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Número de habitaciones que tiene la residencia</th><td>" . ($v['hab_residencia'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Fumador</th><td>" . ($v['fumador'] ? 'Sí' : 'No'). "</td></tr>";
                echo "<tr><th>Ha viajado a un país o zona de riesgo</th><td>" . ($v['zona_riesgo'] ? 'Sí' : 'No'). "</td></tr>";
              
              if($v['consultaPadre']!=NULL){
                  echo "<td><a href ='perfilPacConsult.php?ID=" .$v['consultaPadre']."&idPac=".$idPaciente."'><input type=button value=Anterior></a></td>";
                }
                $pad = $miPDO->prepare("SELECT * FROM consultacovid WHERE  consultacovid.consultaPadre = :ID");
                $pad->execute(array('ID' => $_GET['ID']));
                $p = $pad->fetch();
                $bool = $p ? 'false': 'true';
              if($bool != 'true' ){
                  echo "<td><a href ='perfilPacConsult.php?ID=".$p['ID']."&idPac=".$idPaciente."'><input type=button value=Siguiente></a></td>";
                }   
        }?>
        </tbody>
      </table>

      <table>
        <tbody>
        <?php
                if($str[0]=="c"){ 
                  $res = $miPDO->prepare("SELECT * FROM respuesta WHERE respuesta.IDconsulta = :ID  ");
                  $res->execute(array('ID' => $_GET['ID']));
                  $r = $res->fetchAll();
                  $boolRes = $r ? 'false': 'true';
                  if($boolRes != 'true' ){
                    $cnt = 0;
                    foreach($r as $con){
                        $cnt = $cnt +1;
                        echo "<h2> Respuesta  " . $cnt ."</h2>";
                        echo "<b>" . $con['fecha'] ."</b>";
                        echo "<h2> Contestación  " . $cnt ."</h2>";
                        echo "<p>" . $con['texto'] ."</p>";
                        if($con['archivos'] != NULL){
                          echo "<td><a href =".$con['archivos']."><input type=button value=Archivos></a></td>";
                        }
                    }  
                  }
              } 

        ?>
      </tbody>  
      </table>

      
<!-- ***************************************  PERIODICA ********************************************************************-->

      <table class="perfil">
      <tbody>
      <?php   
          if($str[0]=="p"){      
            echo "<p>" . $v['fecha'] ."</p>";
            echo "<tr><th>Tema</th><td>" . $v['tema'] .'</td></tr>';
            echo "<tr><th>Asunto Consulta</th><td>" . $v['asuntoConsulta'] ."</td></tr>";
            echo "<tr><th>Descripción Consulta</th><td>" . $v['textoConsulta']."</td></tr>";
            if($v['consultaPadre']!=NULL){
              echo "<td><a href ='perfilPacConsult.php?ID=" .$v['consultaPadre']."&idPac=".$IDPaciente."'><input type=button value=Anterior></a></td>";
            }
            $pad = $miPDO->prepare("SELECT * FROM consultaperiodica WHERE  consultaperiodica.consultaPadre = :ID");
            $pad->execute(array('ID' => $_GET['ID']));
            $p = $pad->fetch();
            $bool = $p ? 'false': 'true';
            if($bool != 'true' ){
              echo "<td><a href ='perfilPacConsult.php?ID=".$p['ID']."&idPac=".$IDPaciente."'><input type=button value=Siguiente></a></td>";
            } 
          }?>
        </tbody>
      </table>

      <table>
        <tbody>
        <?php 
                if($str[0]=="p"){
                  $res = $miPDO->prepare("SELECT * FROM respuesta WHERE respuesta.IDconsulta = :ID  ");
                  $res->execute(array('ID' => $_GET['ID']));
                  $r = $res->fetchAll();
                  $boolRes = $r ? 'false': 'true';
                  if($boolRes != 'true' ){
                    $cnt = 0;
                    foreach($r as $con){
                        $cnt = $cnt +1;
                        echo "<h2> Respuesta  " . $cnt ."</h2>";
                        echo "<b>" . $con['fecha'] ."</b>";
                        echo "<h2> Contestación  " . $cnt ."</h2>";
                        echo "<p>" . $con['texto'] ."</p>";
                        if($con['archivos'] != NULL){
                          echo "<td><a href =".$con['archivos']."><input type=button value=Archivos></a></td>";
                        }
                    }  
                  }
              }          
        ?>
      </tbody>  
      </table>

<!-- ***************************************  OTRA ********************************************************************-->

      <table class="perfil">
      <tbody>
      <?php
          if($str[0]=="o"){   
            echo "<p>" . $v['fecha'] ."</p>";
            echo "<tr><th>Asunto Consulta</th><td>" . $v['asuntoConsulta'] ."</td></tr>";
            echo "<tr><th>Descripción Consulta</th><td>" . $v['textoConsulta']."</td></tr>";
            if($v['consultaPadre']!=NULL){
                echo "<td><a href ='perfilPacConsult.php?ID=" .$v['consultaPadre']."&idPac=".$IDPaciente."'><input type=button value=Anterior></a></td>";
              }
            $pad = $miPDO->prepare("SELECT * FROM consultaotra WHERE  consultaotra.consultaPadre =  :ID");
            $pad->execute(array('ID' => $_GET['ID']));
            $p = $pad->fetch();
            $bool = $p ? 'false': 'true';
            if($bool != 'true' ){
                echo "<td><a href ='perfilPacConsult.php?ID=".$p['ID']."&idPac=".$IDPaciente."'><input type=button value=Siguiente></a></td>";
              }  
          }?>
          </tbody>
        </table>

        <table>
        <tbody>
        <?php 
                if($str[0]=="o"){
                  $res = $miPDO->prepare("SELECT * FROM respuesta WHERE respuesta.IDconsulta = :ID  ");
                  $res->execute(array('ID' => $_GET['ID']));
                  $r = $res->fetchAll();
                  $boolRes = $r ? 'false': 'true';
                  if($boolRes != 'true' ){
                    $cnt = 0;
                    foreach($r as $con){
                        $cnt = $cnt +1;
                        echo "<h2> Respuesta  " . $cnt ."</h2>";
                        echo "<b>" . $con['fecha'] ."</b>";
                        echo "<h2> Contestación  " . $cnt ."</h2>";
                        echo "<p>" . $con['texto'] ."</p>";
                        if($con['archivos'] != NULL){
                          echo "<td><a href =".$con['archivos']."><input type=button value=Archivos></a></td>";
                        }
                    }  
                  }
              }          
        ?>
      </tbody>  
      </table>
    </div>
  </body>

</html>