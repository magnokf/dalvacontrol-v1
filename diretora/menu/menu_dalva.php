<?php
if (session_status()!==PHP_SESSION_ACTIVE) {
    # code...
    session_start();
}


include('../diretora/verifica_login.php');
include '../diretora/conexao.php';


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>


    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DalvaControl | Diretora</title>
  <!-- Obtain Bootstrap style sheet from CDN (online service) so it doesn't have to be on my machine -->
  <!-- Check http://www.bootstrapcdn.com/ for latest version. -->
  <!-- Bootstrap core CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">




  <!-- Custom styles for this -->
  <style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
    body {


    }
    .navbar-nav>li>.dropdown-menu {
      margin-top:20px;
      border-top-left-radius:4px;
      border-top-right-radius:4px;
    }
    .navbar-default .navbar-nav>li>a {
      width:200px;
      font-weight:bold;
    }
    .mega-dropdown {
      position: static !important;
      width:100%;

    }
     .mega-dropdown-menu {
      padding: 8px 0;
      width: 100%;
      box-shadow: none;
      -webkit-box-shadow: none;
        background-color: #0b0b0b;
        border-radius: 50px;

    }
    .mega-dropdown-menu:before {
      content: "";
      border-bottom: 15px solid #fff;
      border-right: 17px solid transparent;
      border-left: 17px solid transparent;
      position: absolute;
      top: -15px;
      left: 285px;
      z-index: 10;
    }
    .mega-dropdown-menu:after {
      content: "";
      border-bottom: 17px solid #ccc;
      border-right: 19px solid transparent;
      border-left: 19px solid transparent;
      position: absolute;
      top: -17px;
      left: 283px;
      z-index: 8;
    }
    .mega-dropdown-menu > li > ul {
        padding: 0;
        margin: 0;
        background-color: #0b0b0b;
    }
    .mega-dropdown-menu > li > ul > li {
      list-style: none;
    }
    .mega-dropdown-menu > li > ul > li > a {
      display: block;
      padding: 3px 15px;
      clear: both;
      font-weight: normal;
      line-height: 1.428571429;
      color: white;
      white-space: normal;
    }
    .mega-dropdown-menu > li ul > li > a:hover,
    .mega-dropdown-menu > li ul > li > a:focus {
      text-decoration: none;
      color: #444;
      background-color: #f5f5f5;
        font-size: 14px;
    }
    .mega-dropdown-menu .dropdown-header {
      color: #428bca;
      font-size: 17px;
      font-weight:bold;
    }
    .mega-dropdown-menu form {
      margin:3px 20px;
    }
    .mega-dropdown-menu .form-group {
      margin-bottom: 3px;
    }
      .navbar-brand{
          padding-top: 2px;
      }
    </style>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div class="container example2">
  
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
        <span class="sr-only">Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="painel.php"><img src="imagens/escola.png" width="80" style="position: relative"></a>
    </div>

<!--
  --->
    <div class="collapse navbar-collapse js-navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Secretaria <span class="glyphicon glyphicon-chevron-down"></span></a>

          <ul class="dropdown-menu mega-dropdown-menu row">
            <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">Menu Secretaria</li>
              <li class="col-sm-3">
              <li><a href="#">Alunos</a> </li>

              <li class="divider"></li>
              <li class="dropdown-header">Gestão</li>
              <li class="col-sm-3">
              <li><a href="#">Matrícula</a> </li>

          </ul>
            </li>
                
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Cadastro</li>
                <li><a href="#">Inclusão de Aluno</a></li>

                <li class="divider"></li>
                <li class="dropdown-header">Pesquisas</li>
                  <li><a href="list_dalva_completa.php">Lista Geral de Alunos COMPLETA</a></li>

                <li><a href="list_dalva.php">Lista Geral de Alunos Atualizado</a></li>
                  <li><a href="inlist_notconf.php">Pesquisar Aluno Contemplado que NÃO ATUALIZOU</a></li>
                  <li><a href="list_card.php">Pesquisar Aluno Contemplado - ATUALIZADO</a></li>
                  <li><a href="urgente_contato.php">Urgente Contato</a></li>
                  <li><a href="urgente_contato_aluno.php">Urgente Contato Aluno</a></li>
                  <li><a href="contemplados.php">Contemplados</a></li>
                  <li><a href="mocidade_cestas.php">Mocidade Cestas</a></li>
              </ul>
            </li>


          </ul>

        </li>
      </ul>





<!----- fim menu SAD ---->


        <!------inicio usuario logado --->


        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário Logado:<?php echo $_SESSION['usuario'];?><span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                <?php


                if ($_SESSION['level'] == '5'){


                    echo '
                    
                    <ul class="dropdown-menu mega-dropdown-menu row">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Menu Adminstrador</li>
                        </ul>

                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Cadastro</li>
                            <li><a href="criar_login.php">Criar Login</a></li>
                            <li><a href="listar_login.php">Listar Usuários</a></li>
                            
                           <!-- <li><a href="/projeto/list_myvipfiles.php">Listar Meus Arquivos</a></li>-->
                           
                                                        
                            
                        </ul>
                    </li>
                    </li>
                    </ul>
                    
                    <!---<li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Ofícios & Documentos</li>
                            <li><a href="cad_vipfiles.php">Receber Documentos</a></li>
                                <li><a href="gera_oficio.php">Gerar Ofício Genérico</a></li>
                            <li><a href="gera_of_apresenta.php">Gerar Ofício de Apresentação - Custom</a></li>
                            <li><a href="listagem_mil_a.php">Gerar Ofício de Apresentação - Militar</a></li>

                            <li class="divider"></li>

                            <li class="dropdown-header">Ofícios de Cursos</li>
                            <li><a href="gera_oficio_cursos.php">Gerar Oficio de Cursos </a></li>
                            <li><a href="gera_oficio_ceciu1.php">Gerar Oficio de Cursos - CECIU 1 </a></li>
                            <li><a href="consulta_oficio_ceciu1.php">Pesquisar Oficios - CECIU 1</a></li>
                        </ul>
                    </li>

                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Arquivos Importantes</li>
                            <li><a href="cad_vipfiles.php">Salvar Arquivos</a></li>
                            <li><a href="listagemgeral_vipfiles.php">Listar Arquivos</a></li>

                            <li class="divider"></li>

                        </ul>--->

                    

                ';

                }
                else{

                    echo '
                    
                    <ul class="dropdown-menu mega-dropdown-menu row">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Menu de Usuário</li>
                        </ul>

                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Cadastro</li>
                            
                            
                            
                        </ul>
                    </li>
                    </li>
                    </ul>
                    
                    <!---<li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Ofícios & Documentos</li>
                            <li><a href="cad_vipfiles.php">Receber Documentos</a></li>
                                <li><a href="gera_oficio.php">Gerar Ofício Genérico</a></li>
                            <li><a href="gera_of_apresenta.php">Gerar Ofício de Apresentação - Custom</a></li>
                            <li><a href="listagem_mil_a.php">Gerar Ofício de Apresentação - Militar</a></li>

                            <li class="divider"></li>

                            <li class="dropdown-header">Ofícios de Cursos</li>
                            <li><a href="gera_oficio_cursos.php">Gerar Oficio de Cursos </a></li>
                            <li><a href="gera_oficio_ceciu1.php">Gerar Oficio de Cursos - CECIU 1 </a></li>
                            <li><a href="consulta_oficio_ceciu1.php">Pesquisar Oficios - CECIU 1</a></li>
                        </ul>
                    </li>

                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Arquivos Importantes</li>
                            <li><a href="cad_vipfiles.php">Salvar Arquivos</a></li>
                            <li><a href="listagemgeral_vipfiles.php">Listar Arquivos</a></li>

                            <li class="divider"></li>

                        </ul>--->

                    

                ';

                }

                ?>

                </li>
        </ul>

        <!---final usuario logado--->
        <!----INICIO SAIR LOGOUT --->

        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
        <li><a href="logout.php" >Sair</a></li>
            </li>
        </ul>
                    <!----final SAIR LOGOUT --->






    </div><!-- /.nav-collapse -->

</div>


<!-- / aba 2--->






<!-- Bootstrap 3.3.4 core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Put just before closing body tag so pages load faster -->
<!-- Obtain jquery javascript library from CDN -->
<!-- Check http://code.jquery.com/ for latest version. jQuery 2.x has the same API as jQuery 1.x, but does not support Internet Explorer 6, 7, or 8. -->
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<!-- Obtain Bootstrap javascript library from CDN (online service) so it doesn't have to be on my machine -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>
