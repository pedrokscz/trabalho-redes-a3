<?php
include_once('include/Database.php');
define('SS_DB_NAME', 'railway');//banco da dados
define('SS_DB_USER', 'root');//usuario banco
define('SS_DB_PASSWORD', 'JaQbeltVgWdvREgOhwikxVMxMZjiWicX');///senha
define('SS_DB_HOST', 'kodama.proxy.rlwy.net');//servidor
define('SS_DB_PORT', '55237');

$dsn = "mysql:host=".SS_DB_HOST.";port=".SS_DB_PORT.";dbname=".SS_DB_NAME;
$pdo = "";

$options = [
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD, $options);
}catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$db 	=	new Database($pdo);
?>
