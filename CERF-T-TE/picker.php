<?php
session_start();

if(!isset($_GET['lang'])){
    $_SESSION['lang'] = "fr";
}else{
    
    $_SESSION['lang'] = clean_input($_GET['lang']);

}

$fichier_langage = "lang/fichier_" . strtolower($_SESSION['lang']) . ".php";

require_once($fichier_langage);

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>