<?php

/**
 * DATABASE
 */
if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "root");
    define("CONF_DB_PASS", "m15c1d8m12R9");
    define("CONF_DB_NAME", "dalva_db");
} else{
    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "dmrgame1_dava");
    define("CONF_DB_PASS", "uwz4c0wd58pdkpth5g");
    define("CONF_DB_NAME", "dmrgame1_dalva");
//    define("CONF_DB_HOST", "localhost");
//    define("CONF_DB_USER", "root");
//    define("CONF_DB_PASS", "m15c1d8m12R9");
//    define("CONF_DB_NAME", "dalva_db");
}


$hostname = CONF_DB_HOST;
$user = CONF_DB_USER;
$password = CONF_DB_PASS;
$database = CONF_DB_NAME;
$conexao = mysqli_connect($hostname, $user, $password, $database);

		
if (!$conexao) {
print "Problemas para conectar no banco. Verifique os dados!";

}
	//$conn = new PDO("sqlsrv:Database=cadastro;server=localhost\SQLEXPRESS; ConnectionPooling=0", "sa", "root");

$conn = new mysqli(CONF_DB_HOST, CONF_DB_USER, CONF_DB_PASS, CONF_DB_NAME);

//$dbh = new PDO('mysql:host=CONF_DB_HOST;dbname=CONF_DB_NAME', $user, $password);
//$pdo = new PDO('mysql:host=CONF_DB_HOST;dbname=CONF_DB_NAME', $user, $password);

//$pdo->exec("set names utf8");



