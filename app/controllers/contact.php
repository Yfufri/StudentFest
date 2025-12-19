<?php
require_once "app/views/layout-head.php";
var_dump($_POST);
if([$_POST]!=null){
    echo "Formulaire envoyé";
}
require "app/views/contact.php";
?>
