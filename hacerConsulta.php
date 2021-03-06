<?php
    session_start();
    require('dbmedcon.php');
    
    $IDPaciente = isset($_GET['IDPaciente']) ? $_GET['IDPaciente'] : null;
?>
<!DOCTYPE html>
<html>
    <script>
        function myFunction() {
            selecc = document.getElementById("tipoForm").value;
            tablaCOVID = document.getElementById('tablaCOVID');
            tablaPeriodica = document.getElementById('tablaPeriódica');
            tablaOtra = document.getElementById('tablaOtra');

            if(selecc=='COVID'){
                document.getElementById('tablaCOVID').style.display='table';
                tablaPeriodica.style.display='none';
                tablaOtra.style.display='none';
            } else if(selecc=='Periódica'){
                tablaCOVID.style.display='none';
                tablaPeriodica.style.display='table';
                tablaOtra.style.display='none';
            } else if(selecc=='Otra'){
                tablaCOVID.style.display='none';
                tablaPeriodica.style.display='none';
                tablaOtra.style.display='table';
            }  
        }

        function validaCOVID(){
            asuntoConsulta = document.formCOVID.asuntoConsulta.value;
                if (asuntoConsulta == ""){
                    alert("Debes completar el asunto");
                    return false;
                }

            textoConsulta = document.formCOVID.textoConsulta.value;
            if (textoConsulta == ""){
                    alert("Debes completar el texto de la consulta");
                    return false;
                }

            malestar_general = document.formCOVID.malestar_general.value;
            if (malestar_general == ""){
                    alert("Debe indicar si tiene malestar general");
                    return false;
                }

            mucosidad = document.formCOVID.mucosidad.value;
            if (mucosidad == ""){
                    alert("Debe indicar si tiene mucosidad");
                    return false;
                }
                
            dolor_tragar = document.formCOVID.dolor_tragar.value;
            if (dolor_tragar == ""){
                    alert("Debe indicar si tiene dolor al tragar");
                    return false;
                }
                    
            cambio_voz = document.formCOVID.cambio_voz.value;
            if (cambio_voz == ""){
                    alert("Debe indicar si ha notado un cambio en la voz");
                    return false;
                }
                    
            tos = document.formCOVID.tos.value;
            if (tos == ""){
                    alert("Debe indicar si tiene tos");
                    return false;
                }
                    
            falta_aire = document.formCOVID.falta_aire.value;
            if (falta_aire == ""){
                    alert("Debe indicar si tiene falta de aire");
                    return false;
                }
                    
            perdida_olf_gust = document.formCOVID.perdida_olf_gust.value;
            if (perdida_olf_gust == ""){
                    alert("Debe indicar si ha perdido el olfato o el gusto");
                    return false;
                }
                        
            dolor_muscular = document.formCOVID.dolor_muscular.value;
            if (dolor_muscular == ""){
                    alert("Debe indicar si tiene dolor muscular");
                    return false;
                }
                        
            diarrea = document.formCOVID.diarrea.value;
            if (diarrea == ""){
                    alert("Debe indicar si tiene diarrea");
                    return false;
                }
                        
            enfermedad_cron = document.formCOVID.enfermedad_cron.value;
            if (enfermedad_cron == ""){
                    alert("Debe indicar si tiene alguna enfermedad crónica");
                    return false;
                }
                        
            contacto_positivo = document.formCOVID.contacto_positivo.value;
            if (contacto_positivo == ""){
                    alert("Debe indicar si ha estado en contacto con algún positivo");
                    return false;
                }
                
            embarazo = document.formCOVID.embarazo.value;
            if (embarazo == ""){
                    alert("Debe indicar si existe posibilidad de embarazo");
                    return false;
                }

            sanitario_FFAA_SSEE = document.formCOVID.sanitario_FFAA_SSEE.value;
            if (sanitario_FFAA_SSEE == ""){
                    alert("Debe indicar si es usted personal sanitario, de fuerzas armadas, o participa en actividades esenciales");
                    return false;
                }
                            
            hab_residencia = document.formCOVID.hab_residencia.value;
            if (hab_residencia == ""){
                    alert("Debe indicar si vive en alguna residencia o similar");
                    return false;
                }
                            
            fumador = document.formCOVID.fumador.value;
            if (fumador == ""){
                    alert("Debe indicar si fuma");
                    return false;
                }
                            
            zona_riesgo = document.formCOVID.zona_riesgo.value;
            if (zona_riesgo == ""){
                    alert("Debe indicar si ha estado en alguna zona de riesgo");
                    return false;
                }
            
            if(!document.formCOVID.datos.checked){
                alert("Debe aceptar el tratamiento de datos");
                return false;
            }
        }

        function validaPeriodica(){
            asuntoConsulta = document.formPeriodica.asuntoConsulta.value;
                if (asuntoConsulta == ""){
                    alert("Debes completar el asunto");
                    return false;
                }

            temaConsulta = document.formPeriodica.temaConsulta.value;
            if (temaConsulta == ""){
                    alert("Debes completar el tema");
                    return false;
                }

            textoConsulta = document.formPeriodica.textoConsulta.value;
            if (textoConsulta == ""){
                    alert("Debes completar el texto de la consulta");
                    return false;
                }
            
            if(!document.formPeriodica.datos.checked){
                alert("Debe aceptar el tratamiento de datos");
                return false;
            }

            return true;
        }

        function validaOtra(){
            asuntoConsulta = document.formOtra.asuntoConsulta.value;
                if (asuntoConsulta == ""){
                    alert("Debes completar el asunto");
                    return false;
                }

            textoConsulta = document.formOtra.textoConsulta.value;
            if (textoConsulta == ""){
                    alert("Debes completar el texto de la consulta");
                    return false;
                }

            if(!document.formOtra.datos.checked){
                alert("Debe aceptar el tratamiento de datos");
                return false;
            }
        }
    </script>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="ClaraJV">
        <title>Formulario Consulta</title>
        <meta name="generator" content="Google Web Designer 10.0.2.0105">
        <link href="styles/estiloPacientes.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css"> 
    </head>
    <body>
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

        <div class="form">
            <div id = "tituloHacerConsulta">
                <h1> Formulario para hacer una consulta </h1>
            </div>
            <div id = "seleccionarConsulta">
                <table id = "tablaSeleccionarConsulta">
                    <tr>
                        <td> Seleccione el tipo de consulta que quiera realizar</td>
                        <td> 
                        <select id="tipoForm" class = "selectorTipoForm" onchange="myFunction()">
                            <option value="COVID">COVID</option>
                            <option value="Periódica">Periódica</option>
                            <option value="Otra">Otra</option>
                        </select>
                        </td>
                    </tr>
                    <tr id = "filaVacia">
                        <td colspan= "2"></td>
                    </tr>
            </div>
        
            <div id = "pintarFormularios">
            <form method="POST" name = "formCOVID">
                <table id="tablaCOVID">
                    <tr>
                        <td colspan="2">
                            <pre><b> <h2 class = "tituloForm"> Formulario para consultas sobre COVID-19  <h2> </b></pre>
                        </td>
                    </tr>
                    <tr><td><pre><b>Asunto   </b></pre></td>
                        <td><input type="text" name="asuntoConsulta"></td>
                    </tr>
                    <tr><td><pre><b>Consulta   </b></pre></td>
                        <td><textarea id="textoRespuesta" name="textoConsulta" rows="4" cols="50" autocapitalize="sentences" placeholder="Escriba su consulta"></textarea></td>
                    </tr>
                    <?php
                        $consultacovid = $miPDO->prepare('SELECT `ID`, `fecha`, `asuntoConsulta` 
                        FROM `consultacovid` WHERE `IDpaciente` LIKE :IDPaciente');
                        $consultacovid -> execute(array('IDPaciente' => $IDPaciente));
                        $consultas = $consultacovid -> fetchAll();

                        if(count($consultas) != 0){
                            ?>
                            <tr><td><pre><b>Si está relacionada con una consulta anterior, selecciónela   </b></pre></td>
                                <td>
                                    <select name="consultaPadre">
                                        <option value="nada" selected>...</option>
                                        <?php
                                            foreach($consultas as $consulta){
                                                echo $consulta['ID'];
                                                ?>
                                                <option value="<?php echo $consulta['ID']?>">
                                                    <?php echo $consulta['asuntoConsulta'].' día '. $consulta['fecha']?>
                                                </option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                    <?php 
                        } 
                    ?>
                    <tr><td><pre><b>¿Siente malestar general?   </b></pre></td>
                        <td>
                            <input type="radio" name="malestar_general" value="1">Sí
                            <input type="radio" name="malestar_general" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>Introduzca su temperatura, si la sabe   </b></pre></td>
                        <td><input type="text" name="temperatura"></td>
                    </tr>
                    <tr><td><pre><b>¿Tiene mucosidad?   </b></pre></td>
                        <td>
                            <input type="radio" name="mucosidad" value="1">Sí
                            <input type="radio" name="mucosidad" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Siente dolor al tragar?   </b></pre></td>
                        <td>
                            <input type="radio" name="dolor_tragar" value="1">Sí
                            <input type="radio" name="dolor_tragar" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Ha notado algún cambio en su voz?   </b></pre></td>
                        <td>
                            <input type="radio" name="cambio_voz" value="1">Sí
                            <input type="radio" name="cambio_voz" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Tiene tos?   </b></pre></td>
                        <td>
                            <input type="radio" name="tos" value="1">Sí
                            <input type="radio" name="tos" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Siente falta de aire?   </b></pre></td>
                        <td>
                            <input type="radio" name="falta_aire" value="1">Sí
                            <input type="radio" name="falta_aire" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Ha perdido el sentido del gusto o del olfato?   </b></pre></td>
                        <td>
                            <input type="radio" name="perdida_olf_gust" value="1">Sí
                            <input type="radio" name="perdida_olf_gust" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Siente dolor muscular?   </b></pre></td>
                        <td>
                            <input type="radio" name="dolor_muscular" value="1">Sí
                            <input type="radio" name="dolor_muscular" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Ha tenido diarrea?   </b></pre></td>
                        <td>
                            <input type="radio" name="diarrea" value="1">Sí
                            <input type="radio" name="diarrea" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Tiene usted alguna enfermedad crónica?   </b></pre></td>
                        <td>
                            <input type="radio" name="enfermedad_cron" value="1">Sí
                            <input type="radio" name="enfermedad_cron" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Ha estado en contacto con algún positivo?   </b></pre></td>
                        <td>
                            <input type="radio" name="contacto_positivo" value="1">Sí
                            <input type="radio" name="contacto_positivo" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Existe posibilidad de embarazo?   </b></pre></td>
                        <td>
                            <input type="radio" name="embarazo" value="1">Sí
                            <input type="radio" name="embarazo" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Es usted personal sanitario, de fuerzas armadas, o participa en actividades esenciales?   </b></pre></td>
                        <td>
                            <input type="radio" name="sanitario_FFAA_SSEE" value="1">Sí
                            <input type="radio" name="sanitario_FFAA_SSEE" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Vive en alguna residencia o similar?   </b></pre></td>
                        <td>
                            <input type="radio" name="hab_residencia" value="1">Sí
                            <input type="radio" name="hab_residencia" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Fuma?   </b></pre></td>
                        <td>
                            <input type="radio" name="fumador" value="1">Sí
                            <input type="radio" name="fumador" value="0">No
                        </td>
                    </tr>
                    <tr><td><pre><b>¿Ha estado en alguna zona de riesgo?   </b></pre></td>
                        <td>
                            <input type="radio" name="zona_riesgo" value="1">Sí
                            <input type="radio" name="zona_riesgo" value="0">No
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" name="datos">Acepto que estos datos sean usados por el personal médico.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class = "botonForm" name="enviarCOVID" onclick = "return validaCOVID();">
                            <input type="reset" class = "botonForm" name="borrar">
                        </td>
                    </tr>
                </table>
                <?php
                    if(isset($_REQUEST['enviarCOVID'])):
                        $fecha = date('Y-m-d');
                        $asunto = isset($_POST['asuntoConsulta']) ? $_POST['asuntoConsulta'] : null;
                        $texto = isset($_POST['textoConsulta']) ? $_POST['textoConsulta'] : null;
                        $malestar_general = isset($_POST['malestar_general']) ? $_POST['malestar_general'] : null;
                        $temperatura = isset($_POST['temperatura']) ? $_POST['temperatura'] : null;
                        $mucosidad = isset($_POST['mucosidad']) ? $_POST['mucosidad'] : null;
                        $dolor_tragar = isset($_POST['dolor_tragar']) ? $_POST['dolor_tragar'] : null;
                        $cambio_voz = isset($_POST['cambio_voz']) ? $_POST['cambio_voz'] : null;
                        $tos = isset($_POST['tos']) ? $_POST['tos'] : null;
                        $falta_aire = isset($_POST['falta_aire']) ? $_POST['falta_aire'] : null;
                        $perdida_olf_gust = isset($_POST['perdida_olf_gust']) ? $_POST['perdida_olf_gust'] : null;
                        $dolor_muscular = isset($_POST['dolor_muscular']) ? $_POST['dolor_muscular'] : null;
                        $diarrea = isset($_POST['diarrea']) ? $_POST['diarrea'] : null;
                        $enfermedad_cron = isset($_POST['enfermedad_cron']) ? $_POST['enfermedad_cron'] : null;
                        $contacto_positivo = isset($_POST['contacto_positivo']) ? $_POST['contacto_positivo'] : null;
                        $embarazo = isset($_POST['embarazo']) ? $_POST['embarazo'] : null;
                        $sanitario_FFAA_SSEE = isset($_POST['sanitario_FFAA_SSEE']) ? $_POST['sanitario_FFAA_SSEE'] : null;
                        $hab_residencia = isset($_POST['hab_residencia']) ? $_POST['hab_residencia'] : null;
                        $fumador = isset($_POST['fumador']) ? $_POST['fumador'] : null;
                        $zona_riesgo = isset($_POST['zona_riesgo']) ? $_POST['zona_riesgo'] : null;
                        //obtener los datos de un formulario

                        if($_POST['consultaPadre'] != "nada") {
                            $consultaPadre = $_POST['consultaPadre'];
                        } else {
                            $consultaPadre = NULL;
                        }
                        
                        $todas= $miPDO->prepare('SELECT * FROM consultacovid');
                        $todas -> execute();
                        $IDtodas = $todas -> fetchAll();

                        $numConsultas = count($IDtodas) + 1;
                        $ID = 'c'.strval($numConsultas);
                        
                        $insertar = $miPDO->prepare('INSERT INTO `consultacovid`(`ID`, `fecha`, `respondida`, `asuntoConsulta`, 
                        `textoConsulta`, `IDpaciente`, `consultaPadre`, `malestar_general`, `temperatura`, `mucosidad`, `dolor_tragar`,
                        `cambio_voz`, `tos`, `falta_aire`, `perdida_olf_gust`, `dolor_muscular`, `diarrea`, `enfermedad_cron`, `contacto_positivo`, 
                        `embarazo`, `sanitario_FFAA_SSEE`, `hab_residencia`, `fumador`, `zona_riesgo`) -- meter consultapadre
                        VALUES( :ID, :fecha, :respondida, :asuntoConsulta, :textoConsulta, :IDpaciente, :consultaPadre, :malestar_general, :temperatura, :mucosidad,
                         :dolor_tragar, :cambio_voz, :tos, :falta_aire, :perdida_olf_gust, :dolor_muscular, :diarrea, :enfermedad_cron, :contacto_positivo, 
                        :embarazo, :sanitario_FFAA_SSEE, :hab_residencia, :fumador, :zona_riesgo)');
                            $ok = $insertar -> execute(array(
                                'ID' => $ID,
                                'fecha'=>$fecha,
                                'respondida'=>"0",
                                'asuntoConsulta'=>$asunto,
                                'textoConsulta'=>$texto,
                                'IDpaciente'=>$IDPaciente,
                                'consultaPadre'=>$consultaPadre,
                                'malestar_general'=>$malestar_general,
                                'temperatura'=>$temperatura,
                                'mucosidad'=>$mucosidad,
                                'dolor_tragar'=>$dolor_tragar,
                                'cambio_voz'=>$cambio_voz,
                                'tos'=>$tos,
                                'falta_aire'=>$falta_aire,
                                'perdida_olf_gust'=>$perdida_olf_gust,
                                'dolor_muscular'=>$dolor_muscular,
                                'diarrea'=>$diarrea,
                                'enfermedad_cron'=>$enfermedad_cron,
                                'contacto_positivo'=>$contacto_positivo,
                                'embarazo'=>$embarazo,
                                'sanitario_FFAA_SSEE'=>$sanitario_FFAA_SSEE,
                                'hab_residencia'=>$hab_residencia,
                                'fumador'=>$fumador,
                                'zona_riesgo'=>$zona_riesgo,
                            ));
                            $miPDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                            if($ok): ?> <script>alert( 'Insertado correctamente');</script> 
                            <?php 
                            endif;              
                    endif ?>
            </form>
            <form method="POST" name = "formPeriodica">
                <table id="tablaPeriódica">
                    <tr>
                        <td colspan="2">
                            <pre><b> <h2 class = "tituloForm"> Formulario para consultas periódicas </h2> </b></pre>
                        </td>
                    </tr>
                    <tr><td><pre><b>Asunto   </b></pre></td>
                        <td><input type="text" name="asuntoConsulta"></td>
                    </tr>
                    <tr><td><pre><b>Tema   </b></pre></td>
                        <td><input type="text" name="temaConsulta"></td>
                    </tr>
                    <tr><td><pre><b>Consulta   </b></pre></td>
                        <td>
                            <textarea id="textoConsulta" name="textoConsulta" rows="4" cols="50" autocapitalize="sentences" placeholder="Escriba su consulta"></textarea>
                        </td>
                    </tr>
                    <?php
                        $consultaPer = $miPDO->prepare('SELECT `ID`, `fecha`, `asuntoConsulta` 
                        FROM `consultaperiodica` WHERE `IDpaciente` LIKE :IDPaciente');
                        $consultaPer -> execute(array('IDPaciente' => $IDPaciente));
                        $consultasPer = $consultaPer -> fetchAll();

                        if(count($consultasPer) != 0){
                            ?>
                            <tr><td><pre><b>Si está relacionada con una consulta anterior, selecciónela   </b></pre></td>
                                <td>
                                    <select name="consultaPadre">
                                        <option value="nada" selected>...</option>
                                        <?php
                                            foreach($consultasPer as $consulta){
                                                echo $consulta['ID'];
                                                ?>
                                                <option value="<?php echo $consulta['ID']?>">
                                                    <?php echo $consulta['asuntoConsulta'].' día '. $consulta['fecha']?>
                                                </option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                    <?php 
                        } 
                    ?>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" name="datos">Acepto que estos datos sean usados por el personal médico.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class = "botonForm" name="enviarPer" onclick = "return validaPeriodica();">
                            <input type="reset" class = "botonForm" name="borrar">
                        </td>
                    </tr>
                </table>
                <?php
                    if(isset($_REQUEST['enviarPer'])):
                        $texto = isset($_POST['textoConsulta']) ? $_POST['textoConsulta'] : null;
                        $asunto = isset($_POST['asuntoConsulta']) ? $_POST['asuntoConsulta'] : null;
                        $tema = isset($_POST['temaConsulta']) ? $_POST['temaConsulta'] : null;
                        $fecha = date('Y-m-d');

                        if($_POST['consultaPadre'] != "nada") {
                            $consultaPadre = $_POST['consultaPadre'];
                        } else {
                            $consultaPadre = NULL;
                        }
                        
                        $todasPer= $miPDO->prepare('SELECT * FROM consultaperiodica');
                        $todasPer -> execute();
                        $IDPer = $todasPer -> fetchAll();

                        $numConsultas = count($IDPer) + 2;
                        $ID = 'p'.strval($numConsultas);

                        //obtener los datos de un formulario
                        $insertar = $miPDO->prepare('INSERT INTO `consultaperiodica`(`ID`, `fecha`, `respondida`, `tema`, 
                        `asuntoConsulta`, `textoConsulta`, `IDpaciente`, `consultaPadre`) -- meter consultapadre
                        VALUES( :ID, :fecha, :respondida, :temaConsulta, :asuntoConsulta, :textoConsulta, :IDpaciente, :consultaPadre)');
                            $ok = $insertar -> execute(array(
                                'ID' => $ID,
                                'fecha'=>$fecha,
                                'respondida'=>"0",
                                'temaConsulta' => $tema,
                                'asuntoConsulta'=>$asunto,
                                'textoConsulta'=>$texto,
                                'IDpaciente'=>$IDPaciente,
                                'consultaPadre' => $consultaPadre,
                            ));
                            $miPDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                            if($ok): ?> <script>alert( 'Insertado correctamente');</script> 
                            <?php 
                            endif;              
                    endif ?>
            </form>
            <form method="POST" name = "formOtra">
                <table id="tablaOtra">
                    <tr>
                        <td colspan="2">
                            <pre><b> <h2 class = "tituloForm"> Formulario para otras consultas  </h2> </b></pre>
                        </td>
                    </tr>
                    <tr><td><pre><b>Asunto   </b></pre></td>
                        <td><input type="text" name="asuntoConsulta"></td>
                    </tr>
                    <tr><td><pre><b>Consulta   </b></pre></td>
                        <td><textarea id="textoConsulta" name="textoConsulta" rows="4" cols="50" autocapitalize="sentences" placeholder="Escriba su consulta"></textarea></td>
                    </tr>
                    <?php
                        $consultaOtra = $miPDO->prepare('SELECT `ID`, `fecha`, `asuntoConsulta` 
                        FROM `consultaotra` WHERE `IDpaciente` LIKE :IDPaciente');
                        $consultaOtra -> execute(array('IDPaciente' => $IDPaciente));
                        $consultas = $consultaOtra -> fetchAll();

                        if(count($consultas) != 0){
                            ?>
                            <tr><td><pre><b>Si está relacionada con una consulta anterior, selecciónela   </b></pre></td>
                                <td>
                                    <select name="consultaPadre">
                                        <option value="nada" selected>...</option>
                                        <?php
                                            foreach($consultas as $consulta){
                                                echo $consulta['ID'];
                                                ?>
                                                <option value="<?php echo $consulta['ID']?>">
                                                    <?php echo $consulta['asuntoConsulta'].' día '. $consulta['fecha']?>
                                                </option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                    <?php 
                        } 
                    ?>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" name="datos">Acepto que estos datos sean usados por el personal médico.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class = "botonForm" name="enviarOtra" onclick = "return validaOtra();">
                            <input type="reset" class = "botonForm" name="borrar">
                        </td>
                    </tr>
                </table>
                
                <?php
                    if(isset($_REQUEST['enviarOtra'])):
                        $texto = isset($_POST['textoConsulta']) ? $_POST['textoConsulta'] : null;
                        $asunto = isset($_POST['asuntoConsulta']) ? $_POST['asuntoConsulta'] : null;
                        $fecha = date('Y-m-d');

                        if($_POST['consultaPadre'] != "nada") {
                            $consultaPadre = $_POST['consultaPadre'];
                        } else {
                            $consultaPadre = NULL;
                        }
                        
                        $todas= $miPDO->prepare('SELECT * FROM consultaotra');
                        $todas -> execute();
                        $IDtodas = $todas -> fetchAll();

                        $numConsultas = count($IDtodas) + 85;
                        $ID = 'o'.strval($numConsultas);

                        //obtener los datos de un formulario
                        $insertar = $miPDO->prepare('INSERT INTO `consultaotra`(`ID`, `fecha`, `respondida`, 
                        `asuntoConsulta`, `textoConsulta`, `IDpaciente`, `consultaPadre`) -- meter consultapadre
                        VALUES( :ID, :fecha, :respondida, :asuntoConsulta, :textoConsulta, :IDpaciente, :consultaPadre)');
                            $ok = $insertar -> execute(array(
                                'ID' => $ID, 
                                'fecha'=>$fecha,
                                'respondida'=>"0",
                                'asuntoConsulta'=>$asunto,
                                'textoConsulta'=>$texto,
                                'IDpaciente'=>$IDPaciente,
                                'consultaPadre' => $consultaPadre,
                            ));
                            $miPDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                            if($ok): ?> <script>alert( 'Insertado correctamente');</script> 
                            <?php 
                            endif;              
                    endif ?>
            </form>
            </div>
        </div>
    </body>
</html>