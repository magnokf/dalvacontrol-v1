<?php 
session_start();
include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);
$status = 'B';
$level = '0';



	$sql = "INSERT INTO tab_usuario (`usuario`, `senha`, `status`, `level`, `created`) VALUES ('$usuario', '$senha', '$status', $level, NOW())";

	$save_query = mysqli_query($conexao, $sql);
	$linhas = mysqli_affected_rows($conexao);





	

//$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
//$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


if($linhas =='1'){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário " .$usuario. ", foi criado com sucesso</p>";
	header("Location: criar_login.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'> ERRO!!O usuário : ".$usuario." <strong>já existe no banco de dados</strong>, favor revisar os dados !!!</p>";
	header("Location: criar_login.php");
}
mysqli_close($conexao);

session_register_shutdown();





?>







 