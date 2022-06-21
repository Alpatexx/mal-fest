<?php 
  include 'functions.php';
  session_start();
  bootstrap();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mal'Fest | Qui sommes nous ?</title>
  <meta charset="utf-8">
  <?php 
    bootstrap();
    navbar();
  ?>
<body class='bgcolor'>
<div class=''><p>&nbsp</p></div>
<div class=''><p>&nbsp</p></div>
<div class='vide text-center'><h3>Le Bureau</h3></div>

<div class='d-flex justify-content-around'>

<div class="card text-white bg-dark mb-3" style="width: 14rem;">
  <img class="card-img-top" src="img/gatel.jpeg" alt="David Gatel">
  <div class="card-body">
    <h5 class="card-title">David Gatel</h5>
  </div>
</div>

<div class="card text-white bg-dark mb-3" style="width: 14rem;">
  <img class="card-img-top" src="img/menguy.png" alt="François-Régis Menguy">
  <div class="card-body">
    <h5 class="card-title">François-Régis Menguy</h5>
  </div>
</div>
</div>

<div class='vide text-center'><h3>Communication, Relations presse & Influence</h3></div>

<div class="d-flex justify-content-around">

<div class="card text-white bg-dark mb-3" style="width: 14rem;">
  <img class="card-img-top" src="img/ewen.jpg" alt="Ewen Sélosse">
  <div class="card-body">
    <h5 class="card-title">Ewen Sélosse</h5>
  </div>
</div>

<div class="card text-white bg-dark mb-3" style="width: 14rem;">
  <img class="card-img-top" src="img/flavien.jpeg" alt="Flavien Rauscher">
  <div class="card-body">
    <h5 class="card-title">Flavien Rauscher</h5>
  </div>
</div>

<div class="card text-white bg-dark mb-3" style="width: 14rem;">
  <img class="card-img-top" src="img/jean-marin.png" alt="Jean-Marin Granger   ">
  <div class="card-body">
    <h5 class="card-title">Jean-Marin Granger</h5>
  </div>
</div>

</div>
<div class='vide text-center'><h3>Devenir bénévole</h3></div>
<div class='text-center'>
    <h3>Deviens Ambassadeur.Rice / Bénévole Pour Le Mal'Fest 2022 !</h3>
    <p>Le festival revient encore plus fort, plus loooong et plus grand !</p>
    <p>Nous sommes à la recherche d’ambassadeur.rices/bénévoles pour nous aider durant toute la durée de la fête et surtout pour rendre cette édition au top !</p>
    <p>Pour cela, rien de plus simple, il suffit de nous contacter via la page <a href=contact.php>Contact</a> !</p>
</div>
</div>

<?php
footer();
?>

</body>
</html>