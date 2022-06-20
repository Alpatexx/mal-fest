<?php
  include 'functions.php';
  session_start();
  bootstrap();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mal'Fest | Contact</title>
  <meta charset="utf-8">
  <?php 
    bootstrap();
    navbar();
  ?>
<body class='bgcolor'>
<div class=''><p>&nbsp</p></div>
<div class=''><p>&nbsp</p></div>
<div class="">
<h3 class="text-center">CONTACT</h3>
<p class="text-center">Association Mal'Fest<br>
                       Siège - IUT St-Malo<br>
                       40 Rue de la Croix Desilles <br>
                       35400 Saint-Malo<p>
</div>
<div class=''><p>&nbsp</p></div>
<div id="bar"></div>
<div class=''><p>&nbsp</p></div>
<h3 class="text-center">Nous contacter</h3>

<form action="contact.php" method="post" class="margindiv">
  <div class="row">
    <div class="col">
    <label for="nom">Prénom* : </label>
      <input type="text" class="form-control" placeholder="Votre Prénom" name="prenom"id='prenom' required>
    </div>
    <div class="col">
    <label for="nom">Nom* : </label>
      <input type="text" class="form-control" placeholder="Votre Nom de famille" name="nom" id='nom' required>
    </div>
  </div>
  <div class=''><p>&nbsp</p></div>
  <div class="row">
    <div class="col">
    <label for="nom">Mail* : </label>
      <input type="email" class="form-control" placeholder="Votre E-Mail" name="mail" id='mail' required>
    </div>
    <div class="col">
    <label for="nom">Téléphone* : </label>
      <input type="number" class="form-control" placeholder="Votre Téléphone" name="tel" id='tel' required>
    </div>
  </div>
  <div class=''><p>&nbsp</p></div>
  <label for="message">Laissez-nous un message...</label>
  <textarea class="form-control" rows="5" id="message" name="message"required ></textarea>
  <div class=''><p>&nbsp</p></div>
  <button type="submit" class=" btn navborder rounded-pill" id="valider" name="valider">Envoyer </button>
</form>

<div class="fixed-bottom">
<?php
footer();
?>
</div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                
    function get_data() {
        $file_name='contact.json';

        if(file_exists("$file_name")) { 
            $current_data=file_get_contents("$file_name");
            $array_data=json_decode($current_data, true);
            //Filtrage des valeurs : 
            $email = ($_POST['mail']);

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $email = $emailval;
            } else {
              echo($mail ."<p class='rose margindiv'>n'est pas une adresse valide</p>");
            }

            $tel = ($_POST['tel']);

            if (filter_var($tel, FILTER_SANITIZE_NUMBER_INT)) {
              $tel = $telval;
            } else {
              echo($tel ."<p class='rose margindiv'>n'est pas un numéro valide</p>");
            }
                               
            $tab=array(
              
                'prenom' => $_POST['prenom'],
                'nom' => $_POST['nom'],
                'mail' => $_POST['mail'],
                'tel' => $_POST['tel'],
                'message' => $_POST['message'],
            );
            $array_data[]=$tab;
            return json_encode($array_data);
        }
        else {
            $datae=array();
            $datae[]=array(
              'prenom' => $_POST['prenom'],
              'nom' => $_POST['nom'],
              'mail' => $_POST['mail'],
                'tel' => $_POST['tel'],
              'message' => $_POST['message'],
            );
            return json_encode($datae);
        }
    }
    $file_name='contact.json';
    if ($mailval=null and $telval=null){
      echo"<p class='rose margindiv'>Il y a eu des erreurs lors de l'envoi du formulaire car le format des critères n'a pas été réspécté.</p>";
    }
    else {
      if(file_put_contents("$file_name", get_data())) {
        echo"<p class='rose margindiv'>Le formulaire a bien été envoyé</p>";
      }                
    }
}
?> 