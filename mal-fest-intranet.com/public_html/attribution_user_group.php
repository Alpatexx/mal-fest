<?php
if (!isset($_GET["iduser"]) || !isset($_GET["groupe"])|| !isset($_GET["role"])) {
    echo ("Il manque des arguments !");
    echo ("<pre>");
    var_dump($_GET);
    echo ("</pre>");
    die();
}
$verif_id;
$personnages = json_decode(file_get_contents("users.json"), true);
$groupes = json_decode(file_get_contents("groupes.json"), true);
foreach($personnages as $key => $personnage) {
    if($personnage['id'] == $_GET['iduser']) {
        $verif_id = $_GET['iduser'];
    }
    else{
        die();
        header("Location: Contrats_rh.php");
    }
}

if(isset($verif_id)){
    foreach($groupes as $key => $groupe) {
        if($key == $_GET['groupe']){
            $new_user_to_group = array(
                "id" => $verif_id,
                "role" => $_GET['role'],
            );
            array_push($groupes[$key], $new_user_to_group);
        }
    }
}

file_put_contents("groupes.json", json_encode($groupes));
header("Location: Contrats_rh.php");
?>