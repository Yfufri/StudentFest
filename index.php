<?php

$action = $_GET['action'] ?? null;

switch ($action) {
    default :
    case 'home':
        require "app/controllers/homecontroller.php";
        break;
    case 'localisation':
        require "app/controllers/localisationcontroller.php";
    case 'valeur':
        require "app/controllers/valcontroller.php";
}


$UrlOfPage = "http://localhost/StudentFest/";

?>