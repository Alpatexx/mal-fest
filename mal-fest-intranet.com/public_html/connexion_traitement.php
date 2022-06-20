
<?php
session_start();


$username = $_GET['id'];
$password = $_GET['mdp'];
$file = file_get_contents("users.json");
$tab = json_decode($file,true); // Le true permet de convetir la chaine en tableau au lieu de tableau d'objet
auth($tab,$username,$password);

function auth($jsonTable,$username,$password) {
    $knownUser = false;
    foreach ($jsonTable as $value) {
        if ($value['id'] == $username) {
            if ($value['mdp'] == $password) {
                $_SESSION['id'] = $username;
                $_SESSION['mdp'] = $password;
                $_SESSION['role'] = $value['role'];
                $knownUser = true;
                break;
            } else {
                echo "mot de passe incorrect.";
            }
        }
    }
    if ($knownUser) {
        header("Location: accueil.php");
    } else {
        header("Location: index.php");
        echo"<p class='rose'>Utilisateur où mot de passe incorrect</p>";
    }
}
?>