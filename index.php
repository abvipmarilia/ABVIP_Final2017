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
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Menu da Aplicação -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navegacao">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#page-top">ABVIP</a>
        </div>
        <div class="collapse navbar-collapse" id="menu-navegacao">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#page-top"></a></li>
          <li>
            <a class="" href="#principal">Principal</a>
          </li>
          <li>
            <a class="" href="#instituicao">Instituição</a>
          </li>
          <li>
            <a class="" href="#cestas">Cestas</a>
          </li>
          <li>
            <a class="" href="#localizacao">Localização</a>
          </li>
          <li>
            <a class="" href="#fale">Fale Conosco</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Fim Menu da Aplicação -->

    <!-- Slider da Aplicação -->
    <div class="divslider">
      slider

    </div>
    <!-- Fim Slider -->

    <!-- Principal -->
    <div id="principal">
      <h1>Principal</h1>
    </div>
    <!-- Fim Principal -->

    <!-- Instituicao -->
    <div id="instituicao">
      <h1>Instituição <small>Informações sobre a instituição</small></h1>
    </div>

    <!-- Fim Instituicao -->

    <!-- Cestas -->
    <div id="cestas">
      <h1>Cestas <small>Como receber sua cesta básica</small></h1>
    </div>

    <!-- Fim Cestas -->

    <!-- Localização -->
    <div id="localizacao">
      <h1>Localização <small>Onde estamos</small></h1>
    </div>

    <!-- Fim Localização -->

    <!-- Fale Conosco -->
    <div id="fale">
      <h1>Fale Conosco <small>Preencha o formulário a seguir</small></h1>
    </div>

    <!-- Fim Fale Conosco -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>