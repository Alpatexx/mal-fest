<?php
$tab_groupes = array(
        "Communication" => array( "user1" => array("id" => "dgatel", "role" => "admin"),"user2" => array("id" => "mmenguy", "role" => "admin"), "user3" => array("id" => "scommun", "role" => "moderateur"), "user4" => array("id" => "personnel", "role" => "user")),
        "Contrats_rh" => array( "user1" => array("id" => "dgatel", "role" => "admin"),"user2" => array("id" => "mmenguy", "role" => "admin"), "user3" => array("id" => "srh", "role" => "moderateur")),
        "Paies_rh" => array( "user1" => array("id" => "dgatel", "role" => "admin"),"user2" => array("id" => "mmenguy", "role" => "admin"), "user3" => array("id" => "srh", "role" => "moderateur")),
        "Contrats_Partenaire" => array( "user1" => array("id" => "dgatel", "role" => "admin"),"user2" => array("id" => "mmenguy", "role" => "admin"), "user3" => array("id" => "scommer", "role" => "moderateur")),
        "Avant-vente" => array( "user1" => array("id" => "scommer", "role" => "moderateur"),"user2" => array("id" => "rtechnique", "role" => "user")),
        "Service_technique" => array( "user1" => array("id" => "sit", "role" => "admin")));

    file_put_contents("groupes.json", json_encode($tab_groupes));

$groupes = json_decode(file_get_contents("groupes.json"), true);
foreach($groupes as $key => $groupe) {
    echo($key);
    if($key == 'Communication'){
        $new_user_to_group = array(
            "id" => "eselosse",
            "role" => "user",
        );
        array_push($groupes[$key], $new_user_to_group);
    }
}

file_put_contents("groupes.json", json_encode($groupes));
?>