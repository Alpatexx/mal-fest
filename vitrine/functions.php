<?php
    function bootstrap() {
        echo "<head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
                    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
                    <link rel='stylesheet' href='style.css'>";
    }
    function navbar(){
        echo "<link rel='icon' href='img/favicon.ico'/>
        </head>
          <nav class='navbar navbar-expand-sm  container-fluid navbar-nav   fixed-top'>
          
          <ul class='container-fluid d-flex justify-content-around ul1'>
            <li><a href='index.php'><img class='' src='img/logo2.png' alt='Logo Site' width='auto' height='50'></a></li>
            <li><a class='navborder rounded-pill' href='index.php'>Accueil</a></li>
            <li><a class='navborder rounded-pill' href='quisommesnous.php'>Qui sommes-nous ?</a></li>
            <li><a class='navborder rounded-pill' href='contact.php'>Contact</a></li>
            <li><a class='navborder rounded-pill' href='activites.php'>Activités</a></li>
            <li><a class='navborder rounded-pill' href='partenaires.php'>Partenaires</a></li></a></li>

          </ul>
        </nav>";
      }
    function footer(){
      echo"  <footer class='text-center'>
      <p>© 2022 - All rights reserved - Mal'Fest - Politique de confidentialité</p>
    </footer>";
    echo"  <footer class='text-center'>
      <p>Accès à l'intranet : <a href=intranet/index.php>INTRANET</a></p>
    </footer>";
    }
?>