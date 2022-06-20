<?php

if (!isset($_GET["iduser_privileg"]) || !isset($_GET["groupe_privileg"])|| !isset($_GET["newrole"])) {
    echo ("Il manque des arguments !");
    echo ("<pre>");
    var_dump($_GET);
    echo ("</pre>");
    die();
}

$_SESSION['usermodif'] = $_GET['utilisateur'];
$groupes = json_decode(file_get_contents("groupes.json"), true);
foreach($groupes as $key => $groupe) {
    if($key == $_GET['groupe_privileg']){
        foreach($groupe as $key => $donnee){
            if($donnee['id'] == $_GET['iduser_privileg']){
                $donnee['role'] = $_GET['newrole'];
            }
        }
    }
}

if(isset($_POST['valider'])) {   
    foreach($groupes as $key => $groupe){
        if($key == $_GET['groupe_privileg']){
            foreach($groupe as $key => $donnee){
                if($donnee['id'] == $_GET['iduser_privileg']){
                    if($_GET['newrole'] != ""){$donnee["role"] = $_GET['newrole'];}
                }
            }
        }
    }
    header("Location: Annuaire.php");
}

file_put_contents("groupes.json", json_encode($groupes, JSON_UNESCAPED_UNICODE));
header("Location: Annuaire.php");