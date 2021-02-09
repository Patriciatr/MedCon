<?php
    session_start();
    require('dbmedcon.php');
    $IDconsulta = isset($_GET['ID']) ? $_GET['ID'] : null;
    $idMed = isset($_GET['Medico']) ? $_GET['Medico'] : null;
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de Respuesta</title> 
        <meta name="generator" content="Google Web Designer 10.0.2.0105">
        <link href="styles/estiloMedicos.css" rel="stylesheet">
        <link rel="icon" href="assets/logo.ico" type="image/ico">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" type="text/css"> 
    </head>
    <body>
        <div class="gwd-div-lm07"></div>
        <img src="assets/logo.png" class="gwd-img-fa6j">
        <nav id="menu-superior">
            <ul>
                <li><a href="listaConsultasMedico.php?idMed=<?php echo $idMed?>"><h3 class="gwd-p-gv4z" id="listConsultas">Consultas Activas</h3></a></li>
                <li class="gwd-li-yj6f"><a href="listaPacientesMedico.php?idMed=<?php echo $idMed?>"><h3 class="gwd-p-gv4z gwd-p-1qhn" id="fichaPaciente">Pacientes</h3></a></li>
                <li><a href="login.php"><h3 class="gwd-p-gv4z gwd-p-5vs1 " id="salir">Salir</h3></a></li>
            </ul>
        </nav>
        <div class="form">
            <form name="formulario" method="POST" enctype="multipart/form-data">
                <table id="tablaRespuesta">
                    <tr><td><pre><b>Texto   </b></pre></td>
                        <td><textarea id="textoRespuesta" name="textoRespuesta" rows="4" cols="50" autocapitalize="sentences" placeholder="Escribe tu respuesta"></textarea></td>
                    </tr>
                    <tr><td><pre><b>Imagen o Archivo   </b></pre></td>
                        <td><input type="file" name="archivo" id="archivo"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" name="datos">Acepto que esta información se le muestre al paciente.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="enviar">
                            <input type="reset" name="borrar">
                        </td>
                    </tr>
                </table>
                <?php
            if(isset($_REQUEST['enviar'])):
                $target_dir = "uploads/";
                $archSubir = $target_dir . "arch-Consulta". $IDconsulta . "-" .  basename($_FILES["archivo"]["name"]);
                $uploadOk = 1;

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";

                // if everything is ok, try to upload file
                } else {
                    move_uploaded_file($_FILES["archivo"]["tmp_name"], $archSubir);
                }
                
                $texto= isset($_POST['textoRespuesta']) ? $_POST['textoRespuesta'] : null;
                $archivo= $archSubir;
                $fecha = date('Y-m-d');
                //obtener los datos de un formulario
                $insertar = $miPDO->prepare('INSERT INTO `respuesta`(`fecha`, `texto`,
                    `archivos`, `IDMedico`, `IDconsulta`) VALUES(:fecha, :texto, :archivo, :IDMedico, :IDconsulta)');
                    $ok = $insertar -> execute(array(
                        'fecha'=>$fecha,
                        'texto'=>$texto,
                        'archivo'=>$archivo,
                        'IDMedico'=>$idMed,
                        'IDconsulta'=>$IDconsulta,
                    ));
                    $miPDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                    
                    if($ok) echo 'Insertado correctamente';
                                          
            endif ?>
            </form>
        </div>
        
    </body>
</html>