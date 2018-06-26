<?php

    if(isset($_POST["nomeUser11"])) $nome = $_POST["nomeUser11"];
    else
        $nome ="Cayo";

    if(isset($_POST["emailUser11"])) $email = $_POST["emailUser11"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>UFSBOLA</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
    <!--ICONES-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>
    
    
<body>
    
   <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.png" height="75" width="160" style="padding-left: 20px">
            </a>
            
             <button class="navbar-toggler efeito efeito-1" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
            </button> 
            
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Inicio</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " href="registro.php">Minha Conta</a>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link" href="bolao.html" data-toggle="modal" data-target="#modalLogin">Bolões</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="minhaconta.html" style="color: #00579F" data-toggle="modal" data-target="#modalLogin">Sair</a>
                    </li>   
                </ul>
            </div>
        </nav>
        
        <div class="container-fluid">
           <div class="modal fade" id="modalLogin">
                        <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- CABEÇALHO DO MODAL -->
                              <div class="modal-header">
                                <h4 class="modal-title">ÁREA DE LOGIN</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                              <!-- BODY DO MODAL -->
                            <div class="modal-body" style="min-height: 280px">
                                <form class="form-horizontal" style="min-width: 280px; margin: 0 auto;" method="post" action="O QUE FAZER QUANDO PREENCHER O FORM">
                                    <fieldset class="borda">
                                        <legend><h6>Para efetuar o login, basta preencher as informações nos campos abaixo!</h6></legend>
                                        <div class="form-group">
                                            <label for="nomeLiga">Usuário:</label>
                                            <input type="text" class="form-control" id="nomeUser2" placeholder="Digite o nome do Usuário...">
                                        </div>
                                        <div class="form-group">
                                            <label for="numLiga">Senha:</label>
                                            <input type="password" class="form-control" id="senhaUser" placeholder="Digite a senha...">
                                        </div>
                                        <button type="button" class="btn btn-warning efeito efeito-1 m-auto" data-dismiss="modal" style="width: 150px"><b>ENTRAR</b></button>
                                        
                                    </fieldset>
                                </form>
                             </div>

                              <!-- RODAPÉ DO MODAL -->
                                <div class="modal-footer">
                                    <h5>Não tem conta?</h5>
                                    <button type="button" class="btn btn-warning efeito efeito-1 ml-auto" data-dismiss="modal" style="width: 150px"><b>CADASTRE-SE</b></button>
                                </div>

                            </div>
                          </div>
                        </div>
            </div>
            <!-- Navbar -->
            
            <!-- Registro -->
            <section class="main_cadastro">
                <div style="background-image: url(img/canarinho-pistola-brasil.png); height: 550px; width: 100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-xs-7 col-sm-12">
                        
                            <div class="topo">
                            <h1>Bem vindo</h1>
                            <div class="displayUserName">
                                <h1><?php echo $nome?>!</h1>
                            </div>
                            </div>
                            
                                                
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Registro -->
            <br><br>
            <!-- Bolões em destaque -->
            <section class="boloes_destaque">
                <div style="background-color: azure">
                <h1 id="destaque">Bolões em Destaque</h1>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-10" id="panel">
                            </div>
                                
                            <div class="col-lg-3 col-md-3 col-sm-10" id="panel">
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-10" id="panel">
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                    
            </section>
            <!-- Bolões em destaque -->
            <br><br>
            <!-- Resultados-->
            <section class="resultadosjogo">
                <div style="background-color: #00579F">
                    <div class="container">
                        <br>
                        <h1 style="color: white">Fique por dentro <br> dos resultados dos <br> últimos jogos</h1>
                        <br>
                        <div class="row">
                            
                            <div class="col-lg-3 col-md-6 col-sm-6 " >
                            <img src="img/Argentina-icon.png" height="40%" width="40%"> &emsp;&nbsp;
                            <img src="img/Croatia-icon.png" height="40%" width="40%"><br><br>
                                <div id="textoPlacar">
                                    <h2 class="textoPlacar">0 x 3</h2>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-sm-6" >
                            <img src="img/Colombia-icon.png" height="40%" width="40%"> &emsp;&nbsp;
                            <img src="img/Japan-icon.png" height="40%" width="40%"><br><br>
                                <div id="textoPlacar">
                                    <h2 class="textoPlacar">1 x 2</h2>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-sm-6">
                            <img src="img/England-icon.png" height="40%" width="40%"> &emsp;&nbsp;
                            <img src="img/Belgium-icon.png" height="40%" width="40%"><br><br>
                                <div>
                                    <h2 class="textoPlacar">0 x 0</h2>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-sm-6" >
                            <img src="img/Brazil-icon.png" height="40%" width="40%"> &emsp;&nbsp;
                            <img src="img/Costa-Rica-icon.png" height="40%" width="40%"><br><br>
                                <div id="textoPlacar">
                                    <h2 class="textoPlacar">1 x 1</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                </div>
            </section>
            
            <section class="noticias">
                <br>
                
                
                <div class="container">
                    <h1>Noticias</h1>
                    <br>
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <iframe src="https://feed.mikle.com/widget/v2/83346/" height="501px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" >
                            <iframe src="https://feed.mikle.com/widget/v2/83340/" height="499px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>    

                        </div>
                    </div>
                    </div>
            </section>
        <br>
   

    <div class="content"> 
        <footer>
            <nav class="navbar navbar-expand-sm" style="background-color: #000000; min-height: 40px">
                <a class="navbar-brand" href="index.html">
                    <img src="img/logoinvertido.png" height="60" width="120">
                </a>
                <h6><br>© Copyright 2018 - Todos os Direitos Reservados</h6>
                 <form method="get" action="http://www.twitter.com/" class="ml-auto">    
                    <button class="btn efeito efeito-2" type="submit" style="background-color: black">
                            <span class="btn-text" style="color: white"><div class="image"><i class="fab fa-twitter"></i></div></span>
                    </button>
                </form>
                <form method="get" action="http://www.facebook.com/">
                    <button class="btn efeito efeito-2" type="submit" style="background-color: black">
                        <span class="btn-text" style="color: white"><div  class="image"><i class="fab fa-facebook" ></i></div></span>
                    </button>
                </form>
            </nav>    
        </footer>
    </div>

                
        
        
    </body>
</html>