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
    define("CONF_DB_USER", "dmrgame1_dalva");
    define("CONF_DB_PASS", "uwz4c0wd58pdkpth5g");
    define("CONF_DB_NAME", "dmrgame1_dalva");
}

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "dalva_db",
    "username" => "root",
    "passwd" => "m15c1d8m12R9",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.dalvadeoliveira.com.br");
define("CONF_URL_TEST", "https://www.localhost/dalvacontrol");
define("URL", "https://www.localhost/dalvacontrol");
define("CONF_URL_ADMIN", "/admin");








