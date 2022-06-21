<?php

if (!isset($_GET["nom_group"])) {
    echo ("Il manque des arguments !");
    echo ("<pre>");
    var_dump($_GET);
    echo ("</pre>");
    die();
}

$groupes = json_decode(file_get_contents("groupes.json"), true);
$groupes[$_GET["nom_group"]] = array();
file_put_contents("groupes.json", json_encode($groupes));
header("Location: Contrats_rh.php");