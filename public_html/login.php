<!DOCTYPE html>

<html>
    <head>
        <title>Lava-Jato ECOLOGICO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
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
        <link rel="stylesheet" href="assets/css/login.css" type="text/css"/>

    </head>

    <body class="">
        
        <!-- Inicio area logo -->
        <div class="container-fluid area-logo">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center logo">Lava-Jato</div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <!-- Fim area logo -->
        
        <!-- Inicio area Login-->
        <?php
            require 'config.php';
            session_start();
            //Se o usuario não digitou algo nos campos email e deixou ele enviou vazio
            if ( isset($_POST['email']) && empty($_POST['email']) === false)  {
                $email = addslashes($_POST['email']);
                $senha = md5(addslashes($_POST['senha']));   
                
                $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ");
                
                if($sql->rowCount() > 0){
                    $dado = $sql->fetch();
                    $_SESSION['id'] = $dado['id'];
                    print_r($dado);
                    header("Location: funcionalidades.php");
                }      
                
            }else{
                
            }
        ?>
        <div class="container">
            <div class="area border border-ligh">
                <form method="POST">
                    
                    <div class="row form-group">
                        <div class="col-12"><label for="exampleInputEmail1">Email:</label></div>
                        <div class="col-12"><input name ="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12"><label for="exampleInputPassword1">Senha:</label></div>
                        <div class="col-12"><input name="senha" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Senha"></div>
                    </div>
                    
                    <div class="clearfix">
                        <div class="float-left"><button type="submit" class="btn btn-primary btn-lg">Entrar</button></div>
                        <div class="float-right"><button type="submit" class="btn btn-primary btn-lg">Cadastrar</button></div>
                    </div>
                    
                    
                </form>
            </div>
            
        </div>
        <!-- Fim area Login-->
        
        <!-- Inicio do rodapé -->
        <footer>
            <div class="container-fluid rodape">
                <div class="row area-rodape">
                    <div class="col-sm-1">

                    </div>
                    <div class="col-sm-10">

                    </div>
                    <div class="col-sm-1">

                    </div>
                </div>
                <div class="row area-rodape">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-8 text-center">
                        - Todos os direitos reservados <br/>lavajato.projetoIOT@gmail.com
                    </div>
                    <div class="col-sm-2">

                    </div>
                </div>
                <div class="row area-rodape">
                    <div class="col-sm-1">

                    </div>
                    <div class="col-sm-10">

                    </div>
                    <div class="col-sm-1">

                    </div>
                </div>
            </div>
        </footer>
        
        
        <!-- Fim do rodapé -->
        
        
        
        
        
        
        
        <!--Arquivos para o framework Bootstrap e JQuery de JavaScript
        <script type="text/javascript" src="assets/bootstrapv3/jquery.min.js"></script>
	<script type="text/javascript" src="assets/bootstrapv3/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/bootstrapv4/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrapv4/bootstrap.bundle.min.js"></script>
        Links para o framework Bootstrap e JQuery de JavaScript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_lava-jato&amp;utm_content=footer_img"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div></body>
</html>