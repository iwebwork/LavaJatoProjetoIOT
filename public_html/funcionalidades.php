<html>
    <head>
        <title>Lava-Jato ECOLOGICO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php

            session_start();
            require 'config.php';
            if( isset($_SESSION['id']) AND empty($_SESSION['id']) == false ){
                echo "<h2>Area restrita</h2><br>".PHP_EOL;
                $id = $_SESSION['id'];
                
                $sql = $db->query("SELECT * FROM usuarios WHERE id = '$id' ");
                if ($sql->rowCount() > 0) {

                    $dado = $sql->fetch();
                    echo "<h2>Seja bem vindo ao sistema: ".$dado['nome']."</h2><br>".PHP_EOL;
                    

                }

            }else{
                header("Location: login.php");
            }

        ?>
        
    <a href="sair.php"><h2>Sair</h2></a>
        
        <!--BootstrapV3-->
        <!--<link rel="stylesheet" href="assets/bootstrapv3/bootstrap.min.css"/>-->
	
        <!--BootstrapV4-->
        <!--<link rel="stylesheet" href="assets/bootstrapv4/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/bootstrapv3/bootstrap.min.css" type="text/css">-->
        <!--Links-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrapv4/bootstrap.min.css" type="text/css"/>
        
        <!--CSS proprios-->
        <link rel="stylesheet" href="assets/css/navbar.css" type="text/css"/>
        <link rel="stylesheet" href="assets/css/home-body.css" type="text/css"/>
        <link rel="stylesheet" href="assets/css/rodape.css" type="text/css"/>

    </head>
    <body class="fundo">
        
        
        
        
        
        
        
        
        
        
        
        
        <!--Arquivos para o framework Bootstrap e JQuery de JavaScript
        <script type="text/javascript" src="assets/bootstrapv3/jquery.min.js"></script>
	<script type="text/javascript" src="assets/bootstrapv3/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/bootstrapv4/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrapv4/bootstrap.bundle.min.js"></script>
        Links para o framework Bootstrap e JQuery de JavaScript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>