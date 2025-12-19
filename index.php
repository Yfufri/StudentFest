<?php

$action = $_GET['action'] ?? null;

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


$UrlOfPage = "http://localhost/StudentFest/";

?>