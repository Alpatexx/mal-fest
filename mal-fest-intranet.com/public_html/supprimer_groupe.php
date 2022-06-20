<?php
$groupes = json_decode(file_get_contents("groupes.json"), true);
foreach($groupes as $key => $groupe) {
    if($key == $_GET['groupe']){
        unset($groupes[$key]);
    }
}
file_put_contents("groupes.json", json_encode($groupes));
header("Location: accueil.php");