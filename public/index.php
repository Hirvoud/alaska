<?php
session_start();


include_once("../app/Autoloader.php");
MyAutoload::start();

require(APP."Routeur.php");

if (isset($_GET["a"]) && !empty($_GET["a"])) {
    $route = $_GET["a"];
}
else {
    $route = "home";
}

$routeur = new Routeur($route);
$routeur->renderCont();