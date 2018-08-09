<?php
    $dsn = "mysql:dbname=projeto_lava_jato;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    
    try {
        $db = new PDO($dsn, $dbuser, $dbpass);
        
    } catch (Exception $ex) {
        echo "Falhou ".$ex->getMessage();
    }
    
?>
