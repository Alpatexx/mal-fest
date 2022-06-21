<?php
$personnages = json_decode(file_get_contents("users.json"), true);
foreach($personnages as $key => $personnage) {
    if($personnage['id'] == $_GET['id']) {
        unset($personnages[$key]);
    }
}
file_put_contents("users.json", json_encode($personnages));
header("Location: accueil.php");
