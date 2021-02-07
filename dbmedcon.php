<?php 
    $hostDB = 'localhost';
    $nombreDB = 'bdmedcon';
    $usuarioDB = 'root';
    // Conecta con base de datos
    $hostPDO = "mysql:host=$hostDB; dbname=$nombreDB; ;charset=utf8";
    try {
        $miPDO = new PDO("mysql:host=$hostDB;dbname=$nombreDB", $usuarioDB, '');
        
    catch(PDOException $e){
        echo "ERROR: " . $e->getMessage();
    }
?>