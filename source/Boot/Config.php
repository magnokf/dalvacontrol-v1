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
}

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.dalvadeoliveira.com.br");
define("CONF_URL_TEST", "https://www.localhost/dalvacontrol");
define("URL", "https://www.localhost/dalvacontrol");
define("CONF_URL_ADMIN", "/admin");

/**
 * SITE
 */
define("CONF_SITE_NAME", "DalvaControl");
define("CONF_SITE_TITLE", "Gerenciador da E M Dalva de Oliveira");
define("CONF_SITE_DESC",
    "O DalvaControl é um gerenciador de alunos simples");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "dalvadeoliveira.com.br");


define("CONF_SITE_ADDR_STREET", "Estr. Manuel Nogueira de Sá");
define("CONF_SITE_ADDR_NUMBER", "S/N");
define("CONF_SITE_ADDR_COMPLEMENT", "Escola");
define("CONF_SITE_ADDR_CITY", "Realengo, Rio de Janeiro");
define("CONF_SITE_ADDR_STATE", "RJ");
define("CONF_SITE_ADDR_ZIPCODE", "21745-290");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@creator");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@creator");
define("CONF_SOCIAL_FACEBOOK_APP", "5555555555");
define("CONF_SOCIAL_FACEBOOK_PAGE", "groups/313937908760288");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "author");
define("CONF_SOCIAL_GOOGLE_PAGE", "5555555555");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "5555555555");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "insta");
define("CONF_SOCIAL_YOUTUBE_PAGE", "youtube");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "cafeweb");
define("CONF_VIEW_APP", "cafeapp");
define("CONF_VIEW_ADMIN", "cafeadm");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "mail.dalvadeoliveira.com.br");
define("CONF_MAIL_PORT", "465");
define("CONF_MAIL_USER", "diretora@dalvadeoliveira.com.br");
define("CONF_MAIL_PASS", "190800Br@");
define("CONF_MAIL_SENDER", ["name" => "DalvaApp", "address" => "diretora@dalvadeoliveira.com.br"]);
define("CONF_MAIL_SUPPORT", "diretora@dalvadeoliveira.com.br");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "ssl");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");








