<?php
	$dsn = "mysql:dbname=id6559066_projeto_lava_jato;host=localhost";
	$dbuser = "id6559066_lavajato";
	$dbpass = "lavajato3156";

	try{

		$pdo = new PDO ($dsn, $dbuser, $dbpass);
		
	}catch(PDOException $erro ){
		
		echo "Falhou a coneção: ". $erro->getMessage();
	}
?>
