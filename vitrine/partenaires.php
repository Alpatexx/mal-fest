<?php 
  include 'functions.php';
  session_start();
  bootstrap();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mal'Fest | Partenaires</title>
  <meta charset="utf-8">
  <?php 
    bootstrap();
    navbar();
  ?>
<body class='bgcolor'>
<div class=''><p>&nbsp</p></div>
<div class=''><p>&nbsp</p></div>
<div class='d-flex justify-content-around'>
<img src='img/banniere.jpg' alt='Bannière' width='auto' height='300px'></a>
</div>
<div class=''><p>&nbsp</p></div>
<div class="margindiv">
<h1>Partenaires</h1>
<div id="bar"></div>
<div class=''><p>&nbsp</p></div>
<h5>L'association du Mal'Fest remercie tous ses partenaires !</h5>
</div>
<div class=''><p>&nbsp</p></div>

<div class='d-flex justify-content-around'>

<div class="card text-white bg-dark mb-3" style="width: 14rem;">
  <img class="card-img-top" src="img/orange.png" alt="Orange">
  <div class="card-body">
    <h5 class="card-title">Orange</h5>
  </div>
</div>

<div class="card text-white bg-dark mb-3" style="width: 14rem;">
  <img class="card-img-top" src="img/iut.jpeg" alt="IUT de St-Malo">
  <div class="card-body">
    <h5 class="card-title">IUT de St-Malo</h5>
  </div>
</div>
<div class="card text-white bg-dark mb-3" style="width: 14rem;">
  <img class="card-img-top" src="img/rennes1.jpeg" alt=">Université de Rennes 1">
  <div class="card-body">
    <h5 class="card-title">Université de Rennes 1</h5>
  </div>
</div>
</div>





<?php
footer();
?>
</body>
</html>