<?php 
  include 'functions.php';
  session_start();
  bootstrap();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mal'Fest | Accueil</title>
  <meta charset="utf-8">
  <?php 
    bootstrap();
    navbar();
  ?>
<body class='bgcolor'>
  <section>
    <video autoplay loop id="videoback">
        <source src="video/video.mp4" type="video/mp4">
    </video>
      </section>

  <div class='d-flex justify-content-xl-center programmation'>
    <img src='img/programmation.png' alt='Programmation MalFest' width='1300' height='auto'>
  </div>
  
  <div class='vide text-center'><h3>Découvre les artistes en musique !</h3></div>
  <div class='d-flex justify-content-around'>
  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/3DCWeG2J1fZeu0Oe6i5Q6m?utm_source=generator" width="30%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/3QVolfxko2UyCOtexhVTli?utm_source=generator" width="30%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/7keGfmQR4X5w0two1xKZ7d?utm_source=generator" width="30%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
  </div>
  <div class='vide text-center'><h3>Playlist officielle du festival : </h3></div>
  <div class='d-flex justify-content-xl-center'>
  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/0aulwT1iL6RyMcmatxJiGU?utm_source=generator&theme=0" width="65%" height="300" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
  </div>

<?php
footer();
?>
</body>
</html>