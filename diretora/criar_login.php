<?php 
 session_start();



 include 'conexao.php';
 include 'verifica_login.php';
 
 
 




 
 ?>


<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - Criar Login Dalva Control</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Criar Login DalvaControl</h3>
                    <h3 class="title has-text-grey"><a href= 'painel.php'>DalvaControl</a></h3>

                    <div class="box">
                      <p><?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        
        ?></p>
                </div>
                    <div class="box">
                        <form action="grava_login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" required autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha" required>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Gravar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


</html>