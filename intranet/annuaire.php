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
</head>
<body class='bgcolor'>
<?php 
    navbar();
  ?>
<div class='margindiv'>
<div class="">
<h1>Annuaire du groupe</h1>
<div id="bar"></div>
<div class=''><p>&nbsp</p></div>
</div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Photo</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">ID</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $personnages = json_decode(file_get_contents("users.json"), true);
                    foreach ($personnages as $personnage) {
                    ?>
                        <tr>
                            <td><?php 
                            $image = '<img src="img/annuaire/'.$personnage['id'].'.jpeg" alt="photo de '.$personnage['id'].'" width="auto" height="75"/>';
                            echo $image;
                            ?></td>
                            <td><?php echo $personnage['prenom'] ?></td>
                            <td><?php echo $personnage['nom'] ?></td>
                            <td><?php echo $personnage['id'] ?></td>
                            <td style="border: none"><a href="modif_users.php?groupe=<?php echo $personnage['id'] ?>" class="btn btn-sm btn-success material-icons">Modifier</a></td>
                                    
                            <td style="border: none"><a href="supprimer_personnage.php?id=<?php $_GET['id'] = $personnage['id']; echo $_GET['id']; ?>" class="btn btn-sm btn-danger material-icons">Supprimer</a></td>
                            
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <?php
            //scroll();
        ?>

        <script src="../app.js"></script>
        <div class="py-5"></div>
        
    </div>
    </div>


<div class="fixed-bottom">
<?php
footer();
?>
</div>

</body>
</html>