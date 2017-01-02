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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="css/bootstrap-lumen.min.css" rel="stylesheet">
    <link href="css/painel.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

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
        <li><a href="#" title="Cestas Básicas"><i class="fa fa-shopping-basket fa-2x" aria-hidden="true" alt="Cestas Básicas"></i>
            </a></li>
        <li><a href="#" title="Relatórios"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" alt="Relatórios"></i>
</a></li>
          <li><a href="#" title="Cadastros"><i class="fa fa-wpforms fa-2x" aria-hidden="true" alt="Cadastros"></i></a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-2x" aria-hidden="true"></i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Minha conta</a></li>
            <li><a href="#">Trocar Senha</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Efetuar Logoff</a></li>
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

                <!-- Inicio da Navegação lateral -->
                <div class="panel panel-primary">
                    <div id="colGroup1" role="tab" class="panel-heading">
                        <h4 class="panel-title">
                            
                            <a href="#colListGroup1" aria-controls="colListGroup1" aria-expanded="true" data-toggle="collapse">
                                Cadastros
                            </a>
                        </h4>
                    </div>
                    <div role="tabpanel" class="panel-collapse collapse in" id="colListGroup1" aria-expanded="true">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Membros</a></li>
                            <li class="list-group-item"><a href="#">Instituições</a></li>
                            <li class="list-group-item"><a href="#">Regiões</a></li>
                            <li class="list-group-item"><a href="#">Pastores</a></li>
                            <li class="list-group-item"><a href="#">Atendimento</a></li>
                            <li class="list-group-item"><a href="#">Em breve</a></li>
                        </ul>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            <!-- Final da Navegação lateral -->
                

                <!-- Inicio da Navegação lateral -->
                <div class="panel panel-primary">
                    <div id="colGroup2" role="tab" class="panel-heading">
                        <h4 class="panel-title">
                            
                            <a href="#colListGroup2" aria-controls="colListGroup2" aria-expanded="true" data-toggle="collapse">
                                Relatórios
                            </a>
                        </h4>
                    </div>
                    <div role="tabpanel" class="panel-collapse collapse in" id="colListGroup2" aria-expanded="true">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Usuários</a></li>
                            <li class="list-group-item"><a href="#">Membros</a></li>
                            <li class="list-group-item"><a href="#">Cestas Entregues</a></li>
                            <li class="list-group-item"><a href="#">Histórico</a></li>
                            <li class="list-group-item"><a href="#">Cadastrar Membros</a></li>
                            <li class="list-group-item"><a href="#">Cadastrar Membros</a></li>
                        </ul>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            <!-- Final da Navegação lateral -->
            </div>
            <div class="col-sm-9">
                <div class="conteudo_painel">
                    <div class="conteudo_painel_int">
                       <div class="page-header">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="active"><a href="#">Mensagens <span class="badge">10</span></a></li>
                            <li class=""><a href="#">Usuários <span class="badge">10</span></a></li>
                            <li class=""><a href="#">Avisos <span class="badge">10</span></a></li>
                            <li class=""><a href="#">Aniversariantes <span class="badge">10</span></a></li>
                        </ul>
                        </div> 
                        
                        <div class="well well-sm">
                        
                            <h2>Seja bem vindo <strong>Usuário</strong></h2>
                            <p>Utilize o menu lateral para realizar a navegação.</p>
                            
                        </div>
                        
                        <div class="page-header"><h3>Avisos:</h3></div>
                        
                        <div class="alert alert-success">
                            <strong>Parabéns</strong>, você foi recomendado.
                        </div>
                        
                        <div class="alert alert-warning">
                            <strong>Atenção:</strong> Você tem até o dia XX/XX/XXXX para retirar sua cesta básica.
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-4">
                                <h3>Minhas tarefas</h3>
                                <ul>
                                    <li><a href="#">Projeto 1</a></li>
                                    <li><a href="#">Projeto 2</a></li>
                                    <li><a href="#">Projeto 3</a></li>
                                    <li><a href="#">Projeto 4</a></li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-block">Adicionar nova tarefa</a>
                            </div>

                            <div class="col-sm-4">
                                <h3>Minhas tarefas</h3>
                                <ul>
                                    <li><a href="#">Projeto 1</a></li>
                                    <li><a href="#">Projeto 2</a></li>
                                    <li><a href="#">Projeto 3</a></li>
                                    <li><a href="#">Projeto 4</a></li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-block">Adicionar nova tarefa</a>
                            </div>

                            <div class="col-sm-4">
                                <h3>Minhas tarefas</h3>
                                <ul>
                                    <li><a href="#">Projeto 1</a></li>
                                    <li><a href="#">Projeto 2</a></li>
                                    <li><a href="#">Projeto 3</a></li>
                                    <li><a href="#">Projeto 4</a></li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-block">Adicionar nova tarefa</a>
                            </div>

                        </div>
                    </div>
                </div>
                
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