<?php
$tab_user = array(
    "user1" => array( "nom" => "Selosse", "prenom" => "Ewen", "id" => "eselosse", "mdp" => "ewnsls"),
    "user2" => array( "nom" => "Granger", "prenom" => "Jean-Marin", "id" => "jgranger", "mdp" => "jgrang"),
    "user3" => array( "nom" => "Rauscher", "prenom" => "flavien", "id" => "frauscher", "mdp" => "frausch"),
    "user4" => array( "nom" => "Boulanger", "prenom" => "igor", "id" => "iboulanger", "mdp" => "iboul"),
    "user5" => array( "nom" => "Laure", "prenom" => "paulin", "id" => "plaure", "mdp" => "plau"),
    "user6" => array( "nom" => "mainguy", "prenom" => "jean", "id" => "jmainguy", "mdp" => "jmain"),
    "user7" => array( "nom" => "Menguy", "prenom" => "monsieur", "id" => "mmenguy", "mdp" => "menguy"),
    "user8" => array( "nom" => "Gatel", "prenom" => "David", "id" => "dgatel", "mdp" => "gatel"),
    "user9" => array( "nom" => "Communication", "prenom" => "Service", "id" => "scommun", "mdp" => "scommun"),
    "user10" => array( "nom" => "Personnel", "prenom" => "Ensemble", "id" => "personnel", "mdp" => "personnel"),
    "user11" => array( "nom" => "Commercial", "prenom" => "Service", "id" => "scommer", "mdp" => "scommer"),
    "user12" => array( "nom" => "RH", "prenom" => "Service", "id" => "srh", "mdp" => "srh"),
    "user13" => array( "nom" => "Technique", "prenom" => "Referent", "id" => "rtechnique", "mdp" => "rtechnique"),
    "user14" => array( "nom" => "IT", "prenom" => "Service", "id" => "sit", "mdp" => "sit"));

    file_put_contents("users.json", json_encode($tab_user));
?>