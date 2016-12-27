<?php
  $titulo="ABVIP - Associação Batista Vida Plena ";
?>

<!DOCTYPE html>
<html lang="py-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$titulo?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/painel.css" rel="stylesheet">
      <link rel="stylesheet" href="css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target="menu-navegacao" data-offset="80">

    <!-- Menu da Aplicação -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ABVIP</a>
    </div>

   
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <!-- Fim Menu da Aplicação -->


    <!-- Principal -->
        <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-sm-3">
            Coluna 1
            </div>
            <div class="col-sm-9 text-right">
            Coluna 2
            </div>
            </div>
      </div>
      
    <!-- Fim Principal -->

    <!--
        <footer>
            <div class="container">
                <div class="col-sm-10">
                    <h4>ASSOCIAÇÃO BATISTA VIDA PLENA</h4>
                    Rua Nove de Julho, 1539 - Centro <br/>
                    CEP 17500-120 - Marília - SP<br/>
                    Fone (14)3433-1602
                </div>
                <div class="col-sm-2">
                    <small>Desenvolvido por: <a href="mailto:contato@abvipmarilia.com.br"><img src='/imgs/hidalgo.png' width="80%"/></a></small>
                </div>
            </div>
        </footer> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>