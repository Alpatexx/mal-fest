<?php
    include ("functions.php");
    bootstrap();
    navbar();
?>
<div class=''><p>&nbsp</p></div>
<div class=''><p>&nbsp</p></div> 
<h2 class='my-4 text-center'>Droit privilégiés d'un Utilisateur</h2>
    <div class="container">   
        <form action='modif_user.php'>
            <div class='form-row row my-4 ext-'>
                <div class ="col-sm-6">
                    <br>
                    <p>Entrez son ID : </p>
                    <div>
                        <input type='text' class='form-control' placeholder='id' name='iduser_privileg' required>
                    </div>
                    <br>
                    <p>Entrez son Nouveau Role : </p>
                    <div>
                        <input type='text' class='form-control' placeholder='Nouveau role' name='newrole' required>
                    </div>
                    <br>
                </div>
                <div class ="col-sm-6">
                    <br>
                    <p>Entrez le Groupe à affecter : </p>
                    <div>
                        <input type='text' class='form-control' placeholder='groupe' name='groupe_privileg' required>
                    </div>
                </div>
                <br>
            </div>
            <div class="row">
                <div class="col-sm-5"></div>
                <div class='col-2'>
                    <input type='submit' class='btn btn-success' value='Modifier'>
                </div>
            </div>
        </form>
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
                <tbody>
                    <?php
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
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
    footer();
?>