<?php

if (!isset($_GET["prenom"]) || !isset($_GET["nom"]) || !isset($_GET["id"]) || !isset($_GET["mdp"])) {
    echo ("Il manque des arguments !");
    echo ("<pre>");
    var_dump($_GET);
    echo ("</pre>");
    die();
}

$personnages = json_decode(file_get_contents("users.json"), true);
$new_user = array(
    "nom" => $_GET['nom'],
    "prenom" => $_GET['prenom'],
    "id" => $_GET['id'],
    "mdp" => $_GET['mdp'],
);
array_push($personnages, $new_user);
file_put_contents("users.json", json_encode($personnages));
header("Location: Contrats_rh.php");