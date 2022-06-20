<?php 
  include 'functions.php';
  //session_start();
  bootstrap();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mal'Fest | Intranet</title>
  <meta charset="utf-8">
  <?php 
    bootstrap();
    navbar();
  ?>
  <body>
  <div class=''><p>&nbsp</p></div>
  <?php
        $file = basename (__FILE__, '.php');
        $groupes = json_decode(file_get_contents("groupes.json"), true);
        foreach ($groupes as $key => $groupe) {
            if($key == $file){
                foreach($groupe as $key => $donnee){
                    if($_SESSION['id'] == $donnee['id']){
                        if($donnee['role'] == "admin"){
                            echo('
                            <h2 class="my-4 text-center">Ajouter un personnage</h2>
                            <div class="container">   
                                <form action="ajouter_personnages.php">
                                    <div class="form-row row my-4 ext-">
                                        <div class ="col-sm-6">
                                            <br>
                                            <p>Entrez son Nom : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Nom" name="nom" required>
                                            </div>
                                            <br>
                                            <p>Entrez son Prénom : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Prénom" name="prenom" required>
                                            </div>
                                            <br>
                                            
                                        </div>
                                        <div class ="col-sm-6">
                                            <br>
                                            <p>Entrez son mdp : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Nom" name="mdp" required>
                                            </div>
                                            <br>
                                            <p>Entrez son Identifiant : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Identifiant" name="id" required>
                                            </div>
                                            
                                        </div>
                                        <br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-2">
                                            <input type="submit" class="btn btn-success" value="Ajouter">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <h1 class="my-4 text-center">Liste des Utilisateurs</h1 >

                            <div class="container">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Prénom</th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Mot de passe</th>
                                            </tr>
                                        </thead>
                                        <tbody>');
                                            $personnages = json_decode(file_get_contents("users.json"), true);
                                            foreach ($personnages as $personnage) {
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $personnage['nom'] ?></th>
                                                    <td><?php echo $personnage['prenom'] ?></td>
                                                    <td><?php echo $personnage['id'] ?></td>
                                                    <td><?php echo $personnage['mdp'] ?></td>
                                                    <td style="border: none"><a href="supprimer_personnage.php?id=<?php echo $personnage['id'] ?>" class="btn btn-sm btn-danger material-icons">Supprimer</a></td>

                                                </tr>
                                            <?php
                                            }
                                        
                                        echo('</tbody>
                                    </table>
                                </div>
                            </div>
                            <h2 class="my-4 text-center">Ajouter un groupe</h2>
                            <div class="container">   
                                <form action="ajouter_groupes.php">
                                    <div class="form-row row my-4 ext-">
                                        <div class ="col-sm-6">
                                            <br>
                                            <p>Entrez le nom de Groupe : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Nom groupe" name="nom_group" required>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-2">
                                            <input type="submit" class="btn btn-success" value="Ajouter">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <h1 class="my-4 text-center">Liste des Groupes</h1 >
                        
                            <div class="container">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Groupe</th>
                                            </tr>
                                        </thead>
                                        <tbody>');
                                            $groupe_temp;
                                            $groupes = json_decode(file_get_contents("groupes.json"), true);
                                            foreach ($groupes as $key => $groupe) {
                                                $groupe_temp = $key;
                                            ?>
                                                <tr>
                                                    <td scope="row"><?php echo $groupe_temp ?></td>
                                                    <td style="border: none"><a href="supprimer_groupe.php?groupe=<?php echo $groupe_temp ?>" class="btn btn-sm btn-danger material-icons">Supprimer</a></td>
                        
                                                </tr>
                                            <?php
                                            }
                                            
                                        echo('</tbody>
                                    </table>
                                </div>
                            </div>
                            <h1 class="my-4 text-center">Liste des Utilisateurs associé à leur Groupe</h1 >
                        
                            <div class="container">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Groupes</th>
                                                <th scope="col">ID</th>
                                                <th scope="col">role</th>
                                            </tr>
                                        </thead>
                                        <tbody>');
                                            $groupe_temp;
                                            $groupes = json_decode(file_get_contents("groupes.json"), true);
                                            foreach ($groupes as $key => $groupe) {
                                                $groupe_temp = $key;
                                                foreach($groupe as $key => $donnee){
                                            ?>
                                                <tr>
                                                    <td scope="row"><?php echo $groupe_temp ?></td>
                                                    <th scope="row"><?php echo $donnee['id'] ?></th>
                                                    <td><?php echo $donnee['role'] ?></td>
                                                </tr>
                                            <?php
                                                }
                                            }
                                        echo('</tbody>
                                    </table>
                                </div>
                            </div>
                            <h2 class="my-4 text-center">Attribuer un Utilisateur à un Nouveau Groupe</h2>
                            <div class="container">   
                                <form action="attribution_user_group.php">
                                    <div class="form-row row my-4 ext-">
                                        <div class ="col-sm-6">
                                            <br>
                                            <p>Entrez son ID : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="id" name="iduser" required>
                                            </div>
                                            <br>
                                            <p>Entrez son Role : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="role" name="role" required>
                                            </div>
                                            <br>
                                        </div>
                                        <div class ="col-sm-6">
                                            <br>
                                            <p>Entrez le Groupe à affecter : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="groupe" name="groupe" required>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-2">
                                            <input type="submit" class="btn btn-success" value="Modifier">
                                        </div>
                                    </div>
                                </form>
                            </div>');
                        }
                        if($donnee['role'] == "moderateur"){
                            echo('
                            <h2 class="my-4 text-center">Ajouter un groupe</h2>
                            <div class="container">   
                                <form action="ajouter_groupes.php">
                                    <div class="form-row row my-4 ext-">
                                        <div class ="col-sm-6">
                                            <br>
                                            <p>Entrez le nom de Groupe : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Nom groupe" name="nom_group" required>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-2">
                                            <input type="submit" class="btn btn-success" value="Ajouter">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <h1 class="my-4 text-center">Liste des Groupes</h1 >
                        
                            <div class="container">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Groupe</th>
                                            </tr>
                                        </thead>
                                        <tbody>');
                                            $groupe_temp;
                                            $groupes = json_decode(file_get_contents("groupes.json"), true);
                                            foreach ($groupes as $key => $groupe) {
                                                $groupe_temp = $key;
                                            ?>
                                                <tr>
                                                    <td scope="row"><?php echo $groupe_temp ?></td>
                                                    <td style="border: none"><a href="supprimer_groupe.php?groupe=<?php echo $groupe_temp ?>" class="btn btn-sm btn-danger material-icons">Supprimer</a></td>
                        
                                                </tr>
                                            <?php
                                            }
                                            
                                        echo('</tbody>
                                    </table>
                                </div>
                            </div>
                            <h1 class="my-4 text-center">Liste des Utilisateurs associé à leur Groupe</h1 >
                        
                            <div class="container">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Groupes</th>
                                                <th scope="col">ID</th>
                                                <th scope="col">role</th>
                                            </tr>
                                        </thead>
                                        <tbody>');
                                            $groupe_temp;
                                            $groupes = json_decode(file_get_contents("groupes.json"), true);
                                            foreach ($groupes as $key => $groupe) {
                                                $groupe_temp = $key;
                                                foreach($groupe as $key => $donnee){
                                            ?>
                                                <tr>
                                                    <td scope="row"><?php echo $groupe_temp ?></td>
                                                    <th scope="row"><?php echo $donnee['id'] ?></th>
                                                    <td><?php echo $donnee['role'] ?></td>
                                                </tr>
                                            <?php
                                                }
                                            }
                                        echo('</tbody>
                                    </table>
                                </div>
                            </div>
                            <h2 class="my-4 text-center">Attribuer un Utilisateur à un Nouveau Groupe</h2>
                            <div class="container">   
                                <form action="attribution_user_group.php">
                                    <div class="form-row row my-4 ext-">
                                        <div class ="col-sm-6">
                                            <br>
                                            <p>Entrez son ID : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="id" name="iduser" required>
                                            </div>
                                            <br>
                                            <p>Entrez son Role : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="role" name="role" required>
                                            </div>
                                            <br>
                                        </div>
                                        <div class ="col-sm-6">
                                            <br>
                                            <p>Entrez le Groupe à affecter : </p>
                                            <div>
                                                <input type="text" class="form-control" placeholder="groupe" name="groupe" required>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-2">
                                            <input type="submit" class="btn btn-success" value="Modifier">
                                        </div>
                                    </div>
                                </form>
                            </div>');
                        }
                        if($donnee['role'] == "user"){
                            echo('<h2 class="my-4 text-center">Vous n\'êtes pas Administrateur ni Modérateur</h2>');
                        }
                    }
                }
            }
        }
    ?>
<div class="margindiv">
<h2 class="my-4 text-center">Les fichiers de votre groupe</h2>
    <div class="container center">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Type de fichier</th>
                    <th scope="col">Téléchargement</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $nom_groupe = basename(__FILE__, '.php');
                $dir_groupe = opendir("/Users/jean-marin.granger/Desktop/testsite/".$nom_groupe);
                //flavien Modifier chemin par arborescence ou il y a les dossiers de chaques groupes
                while ($file=readdir($dir_groupe)){
                ?>
                    <tr>
                        <th scope="row"><?php echo $file; ?></th>
                        <?php $filetypee = ("/Users/jean-marin.granger/Desktop/testsite/".$nom_groupe."/".$file)?>
                        <td><?php echo pathinfo($filetypee, PATHINFO_EXTENSION); ?></td>
                        <td> <?php echo '<p><a class ="navborder navborder2 rounded-pill" href="dl.php?file=' . urlencode($file) . '">Télécharger</a></p>';?> </td>
                        
                        <?php //flavien Modifier chemin par arborescence ou il y a les dossiers de chaques groupes ?>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<div class='fixed-bottom'>
<?php
footer();
?>
</div>
</body>
</html>