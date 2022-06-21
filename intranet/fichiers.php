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
<body class='bgcolor'>
<?php $dir_perso = opendir("/Users/jean-marin.granger/Desktop/testsite/".$_SESSION['id']); ?>

                            <h2 class="my-4 text-center">Vos Fichier perso</h2>
                            <div class="container center">

                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Type de fichiers</th>
                                            <th scope="col">Téléchargement</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($file=readdir($dir_perso)){
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $file; ?></th>
                                                <?php $filetypee = ("/Users/jean-marin.granger/Desktop/testsite/".$_SESSION['id']."/".$file)?>
                                                <td><?php echo pathinfo($filetypee, PATHINFO_EXTENSION); ?></td>
                                                <td> <?php echo '<p><a class ="navborder navborder2 rounded-pill" href="dl.php?file=' . urlencode($file) . '">Télécharger</a></p>';?> </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
<h2 class="my-4 text-center">Les fichiers publiques</h2>
                            <div class="container center">

                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Type de fichiers</th>
                                            <th scope="col">Téléchargement</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $dir_public = opendir("/Users/jean-marin.granger/Desktop/testsite/public");
                                       
                                        while ($file=readdir($dir_public)){
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $file; ?></th>
                                                <?php  $filetypee=("/Users/jean-marin.granger/Desktop/testsite/public/"."/".$file); ?>
                                                <td><?php echo pathinfo($filetypee, PATHINFO_EXTENSION);?></td>
                                               <td> <?php echo '<p><a class ="navborder navborder2 rounded-pill" href="dl.php?file=' . urlencode($file) . '">Télécharger</a></p>';?> </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php


            
    ?>

<div class="fixed-bottom">
<?php
?>
<?php
footer();
?>
</div>
</body>
</html>
