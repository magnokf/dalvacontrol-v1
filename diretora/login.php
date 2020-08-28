<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from tab_usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

$dados = mysqli_fetch_array($result);



if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	$_SESSION['level'] = $dados['level'];
    $_SESSION['password'] =$senha;
    $_SESSION['setor'] = $dados['setor'];
    $_SESSION['logged_in'] = true;


	header('Location: list_dalva.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
    $_SESSION['logged_in'] = false;

    $_SESSION['msg'] = "<p style='color:red;'> ERRO DE USUÁRIO!!! : Login: ".$usuario." ou senha não conferem. Favor revisar os dados !!!</p>";
    header("Location: criar_login.php");

	exit();
}

