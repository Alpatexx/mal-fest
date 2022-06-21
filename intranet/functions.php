<?php
   session_start();
    function bootstrap() {
        echo "<head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
                    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
                    <link rel='stylesheet' href='style.css'>";
    }
    function navbar(){
      echo "<link rel='icon' href='img/favicon.ico'/>
      </head>
        <nav class='navbar navbar-expand-sm  container-fluid navbar-nav '>
        
        <ul class='container-fluid d-flex justify-content-around ul1'>
          <li><a href='accueil.php'><img class='' src='img/logo2.png' alt='Logo Site' width='auto' height='50'></a></li>
          <li><a class='navborder navborder2 rounded-pill' href='accueil.php'>Accueil</a></li>
          <li><a class='navborder navborder2 rounded-pill' href='annuaire.php'>Annuaire</a></li>
          <li><a class='navborder navborder2 rounded-pill' href='fichiers.php'>Fichiers</a></li>";
          
          $groupe_temp;
                $groupes = json_decode(file_get_contents("groupes.json"), true);
                foreach ($groupes as $key => $groupe) {
                    $groupe_temp = $key;
                    foreach($groupe as $key => $donnee){
                        if($_SESSION['id'] == $donnee['id']){
                            echo '<li>
                                        <a class="navborder navborder2 rounded-pill" href=" '.$groupe_temp.'.php">'.$groupe_temp.'</a>
                                  </li>';
                        }
                    }
                }
                ?>
            <?php
                if(isset($_SESSION['id'])){
                    echo "<span class='p'>"." ".$_SESSION['id']."</span>";
                    echo "<a href='index.php' class='navborder navborder2 rounded-pill'>  Se déconnecter</a>";
                }
                else{
                    echo "<span class='text-white'>Vous n'êtes pas connecté</span>
                    <a href='index.php' class='navborder navborder2 rounded-pill'> Se connecter</a>";
                }
            ?>
        <?php echo'</ul></nav>';
          
          
    }
    function navbar2(){
        echo "<link rel='icon' href='img/favicon.ico'/>
        </head>
          <nav class='navbar navbar-expand-sm  container-fluid navbar-nav  fixed-top'>
          
          <ul class='container-fluid d-flex justify-content-around ul1'>
            <li><a href='index.php'><img class='' src='img/logo2.png' alt='Logo Site' width='auto' height='50'></a></li>
          </ul>
        </nav>";
      }
    function footer(){
      echo"  <footer class='text-center'>
      <p>© 2022 - All rights reserved - Mal'Fest - Politique de confidentialité</p>
    </footer>";
    }
?>