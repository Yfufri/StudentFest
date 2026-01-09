<?php
use Dotenv\Dotenv;

require_once 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once 'models/bddconnect.php';
$conn = openCon();

$action = $_GET['action'] ?? null;
$UrlOfPage = "http://localhost/StudentFest/";

switch ($action) {
    default :
    case 'home':
        require "app/controllers/homecontroller.php";
        break;
    case 'localisation':
        require "app/controllers/localisationcontroller.php";
        break;
    case 'valeur':
        require "app/controllers/valcontroller.php";
        break;
}
?>