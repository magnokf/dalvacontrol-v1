<?php
session_start();


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>DalvaControl | Diretora</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>


    <section class="hero is-success is-fullheight">
                    <div class="hero-body">
                        <div class="container has-text-centered">
                            <div class="column is-4 is-offset-4">

                                <h4 class="title has-text-grey">Login<a href="index.php" style="text-decoration: none"><img src="imagens/favicon.png" width="50" alt="Página Inicial" title="Pagina Inicial">DalvaControl</a></h4>


                                <?php
                                if(!isset($_SESSION)){


                                }else{
                                    if(isset($_SESSION['msg'])){
                                        echo '<div class="box">';
                                        echo '<p>' .$_SESSION['msg']. '</p>';
                                        unset($_SESSION['msg']);
                                        echo '</div>';
                                    }
                                }
                                ?>

                                <div class="notification is-cieb">
                                    <p>Acesso Restrito</p>
                                    <p>Login Obrigatório</p>
                                </div>

                                <div class="box">
                                    <form id="form" action="login.php" class="ajax_load" method="POST">

                                        <div class="field">
                                            <div class="control">
                                                <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                            </div>
                                        </div>

                                        <div class="field">
                                            <div class="control">
                                                <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                            </div>
                                        </div>
                                        <button type="submit" class="button is-block is-link is-large is-fullwidth" >Entrar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

			

    
  </body>
</html>
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>

