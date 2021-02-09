<!DOCTYPE html>

<?php 
require('dbmedcon.php');
?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="author" content="LuciaVM">
  <title>Login</title>
  <link href="styles/estiloLogin.css" rel="stylesheet">
  <meta name="generator" content="Google Web Designer 10.0.2.0105">
</head>

<body class="htmlNoPages">
  <div class="logo">
    <svg data-gwd-shape="rectangle" class="gwd-rect-rshb"></svg>
    <img src="assets/MedCon-logo.png" id="IMG_1" class="gwd-img-98vu">
    <span class="gwd-span-6t34">¡Bienvenido!</span>
  </div>
  <div class="login">
      <?php 
      //16040618D
      //QBB00OYR6WU
        $dni = isset($_POST['dni']) ? $_POST['dni'] : null;
        $contrasenya = isset($_POST['pass']) ? $_POST['pass']: null;
        
        
        if($dni != null){
            $consultaEnPaciente = $miPDO -> prepare('SELECT id, password FROM paciente WHERE DNI LIKE :dni');
            $consultaEnPaciente -> execute(array('dni' => $dni));
            $paciente = $consultaEnPaciente -> fetch();
            
            if(!is_array($paciente)){
                $consultaEnMedico = $miPDO -> prepare('SELECT id, password, medicoJefe FROM medico WHERE DNImed LIKE :dni');
                $consultaEnMedico -> execute(array('dni' => $dni));
                $medico = $consultaEnMedico -> fetch();

                if(!is_array($medico)){
                    ?> <script> alert("No se encuentra ese DNI/NIE/Pasaporte") </script> <?php
                }
                else{
                    if($medico['password'] == $contrasenya){
                        if($medico['medicoJefe'] == 0){
                            //Dirigir al área de médico
                            $idMed = $medico['id'];
                            ?> <script> window.location.href='listaConsultasMedico.php?idMed=<?php echo $idMed?>' </script> <?php
                        }
                        else{
                            //Dirigir al área de médico-jefe
                            $idMedJefe = $medico['id'];
                            ?> <script> window.location.href='seleccionarRol.php?idMed=<?php echo $idMedJefe?>' </script> <?php
                        } 
                    }
                    else{
                        ?> <script> alert("La contraseña no es correcta") </script> <?php
                    }
                }
            }
            else{
                
                if($paciente['password'] == $contrasenya){
                    //Dirigir al área de paciente
                    $idPac = $paciente['id'];
                    ?> <script> window.location.href='listaConsultasPaciente.php?id=<?php echo $idPac?>' </script> <?php
                }
                else{
                    ?> <script> alert("La contraseña no es correcta") </script> <?php
                }
            }
        }

        ?>

    <form name = "login" action = "login.php" method = "post" enctype = "multipart/form-data">
      <span class="gwd-span-l0dx">Inicio de sesión</span>
      <input type="text" id="text_1" name = "dni" class="gwd-input-1nfr">
      <span class="gwd-span-1ogd">DNI/NIE/Pasaporte:</span>
      <span class="gwd-span-1anj">Contraseña:</span>
      <input type="password" id="text_2" name = "pass" class="gwd-input-182e">
      <input type = "submit" id="button_1" class="gwd-button-f41u" name = "enviar" value = "Entrar">
    </form>
    
  </div>
</body>

</html>