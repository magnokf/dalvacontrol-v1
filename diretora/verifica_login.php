<?php


if(!$_SESSION['usuario']) {
	header('Location: index.php');
	exit();
}
if(!isset($_SESSION['timestamp'])){
    $_SESSION['timestamp'] = time();
}

if(time() - $_SESSION['timestamp'] > 60*7) { //subtract new timestamp from the old one
    echo"<script>alert('Tempo Máximo de Inatividade Esgotado!! | Volte para o Login')</script>";
    unset($_SESSION['usuario'], $_SESSION['password'], $_SESSION['timestamp']);
    $_SESSION['logged_in'] = false;
    $_SESSION['msg'] ="<p>Tempo Máximo de 7 minutos de Inatividade Esgotado!!</p><p>Refaça o seu Login.</p>";
    header('Location: index.php'); //redirect to index.php
    exit;
} else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}