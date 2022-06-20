<?php 
  include 'functions.php';
  //session_start();
  bootstrap();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mal'Fest | Connexion </title>
  <meta charset="utf-8">
  <?php 
    bootstrap();
    navbar2();
  ?>
  </head>
  <body class="">
  <div class=''><p>&nbsp</p></div>
  <div class=''><p>&nbsp</p></div>
  <div class=''><p>&nbsp</p></div>
  <div class=''><p>&nbsp</p></div>
  <div class=''><p>&nbsp</p></div>
<?php
echo "<div class='sidenav margindiv'>
        <div class='login-main-text'>
          <h3 class='display-3'>Connexion au site</h3>
          <h4>Entrez votre nom d'utilisateur et votre mot de passe</h4>";
          ?>
          <?php 
          if(isset($_SESSION['id'])){
              session_destroy();
              echo"<p class='rose'>Vous êtes bien déconnecté</p>";
          }
          echo "</div>
          </div>";
          ?>
          

<?php
        echo "<div class='main margindiv'>
        <div class='col-md-6 col-sm-12'>
          <div class='login-form'>
            <form action='connexion_traitement.php'>
              <div class='form-group'>
                <label>Utilisateur</label>
                <input type='text' class='form-control' name='id' placeholder='ID'>
              </div>
              <div class='form-group'>
                <label>Mot de passe</label>
                <input type='password' class='form-control' name='mdp' placeholder='Mot de passe'>
              </div>
              <div class=''><p>&nbsp</p></div>
              <button type='submit' class='navborder btn navborder2 rounded-pill'>Se connecter</button>
            </form>
            <p><br>
          </div>
        </div>
      </div>";

?>
<div class="fixed-bottom">
<?php
footer();
?>
</div>
</body>
</html>