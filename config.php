<?php
//-------- BDD
if ($_SERVER['SERVER_NAME'] == 'e-tv.info') {
    define('DB_SERVER', 'etvinfidata.mysql.db');
    define('DB_USERNAME', 'etvinfidata');
    define('DB_PASSWORD', 'sMm8mXFQEjAvEeuJPWvD4vTmm');
    define('DB_NAME', 'etvinfidata');
} else if ($_SERVER['SERVER_NAME'] == 'pre-prod.e-tv.info') {
    define('DB_SERVER', 'etvinfidata.mysql.db');
    define('DB_USERNAME', 'etvinfidata');
    define('DB_PASSWORD', 'sMm8mXFQEjAvEeuJPWvD4vTmm');
    define('DB_NAME', 'etvinfidata');
} else {
    // define('DB_SERVER', 'localhost');
    // define('DB_USERNAME', 'root');
    // define('DB_PASSWORD', 'root');
    // define('DB_NAME', 'etv');
    define('DB_SERVER', 'mysql-webetv.alwaysdata.net');
    define('DB_USERNAME', 'webetv_useradmin');
    define('DB_PASSWORD', 'etv2024');
    define('DB_NAME', 'webetv_2024');
}

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $conn->connect_error);

//--------- SESSION
// session_start();

//--------- VARIABLES
$contenu = '';

//--------- AUTRES INCLUSIONS
require_once("fonction.php");