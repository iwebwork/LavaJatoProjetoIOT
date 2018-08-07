<?php
    $dsn = "mariadb:dbname=id6559066_projeto_lava_jatoi;host=Localhost";
    $dbuser = "id6559066_lavajato";
    $dbpass = "lavajato3156";
    
    try {
        $db = new PDO($dsn, $dbuser, $dbpass);
        
    } catch (Exception $ex) {
        echo "Falhou ".$ex->getMessage();
    }
    
?>
