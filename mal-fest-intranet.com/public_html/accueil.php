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
  <?php 
    navbar();
  ?>
<body class='bgcolor'>
<div class='d-flex justify-content-around'>
<img src='img/banniere.jpeg' alt='Bannière' width='auto' height='400px'></a>
</div>
<div class="margindiv">
<h1>Bienvenue sur l'Intranet du groupe !</h1>
<div id="bar"></div>
<div class=''><p>&nbsp</p></div>
<h5>L'association du Mal'Fest remercie tous ses bénévoles !</h5>
</div>
<div class='fixed-bottom'>
<?php
footer();
?>
</div>
</body>
</html>