<!DOCTYPE html>
<html lang="auto">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/custom.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/louis-george-cafe" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <title>E-TV | Accueil</title>
  <link rel="icon" type="image" href="./images/etvlogo.png" />
</head>

<body id="body">

  <nav>
    <a href="index.php" class="nav-icon" aria-label="visit homepage" aria-current="page">
      <img src="./images/etv.png" alt="logo icon">
    </a>

    <div class="main-navlinks">
      <button class="hamburger" type="button" aria-label="Toggle navigation" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navlinks_container">
        <?php
        if (basename($_SERVER['PHP_SELF']) == 'index.php') {
          echo '<a href="index.php" aria-current="page">ACCUEIL</a>
            <a href="pages/interview.php">INTERVIEW</a>
            <a href="pages/podcast.php">PODCAST</a>
            <a href="pages/reportage.php">REPORTAGE</a>
            <a href="pages/blog.php">BLOG</a>
            <a href="pages/propos.php">A PROPOS</a>
            <a href="pages/contact.php">CONTACT</a>';
        } else {
          echo '<a href="../index.php" aria-current="page">ACCUEIL</a>
            <a href="interview.php">INTERVIEW</a>
            <a href="podcast.php">PODCAST</a>
            <a href="reportage.php">REPORTAGE</a>
            <a href="blog.php">BLOG</a>
            <a href="propos.php">A PROPOS</a>
            <a href="contact.php">CONTACT</a>';
        }
        ?>
      </div>
    </div>

    <div class="nav-authentication">
      <a href="#" class="sign-user" aria-label="Sign in page">
        <img src="./images/user-icon.png" alt="user-icon">
      </a>
      <?php
      session_start();
      if (isset($_SESSION['username'])) {
        echo "Bonjour, " . $_SESSION['username'];
        echo '<form action="./partials/logout.php" method="post"><button type="submit" name="logout-submit" class="deconnexion">Déconnexion</button></form>';
      } else {
        echo '<div class="sign-btns"><a href="./partials/login.php" type="button"><i class="bi bi-person-fill"></i> Connexion</a></div>';
      }
      ?>

    </div>
  </nav>

  <div class="imgbanner">
    <div class="splitbanner">
      <img class="banneracc" src="./images/banniere.png" alt="banneracc" />
      <div class="button_decouvrir_area">
        <a id="accueil_decouvrir" href="#scroll-page" class="button_decouvrir"><span></span><span></span><span></span><span></span>Découvrir les projets</a>
      </div>
    </div>
    <div class="home_items">
      <p>Écologie</p>
      <p>Social</p>
      <p>Consommation</p>
      <p>Innovation</p>
      <p>Initiative</p>
      <p>Santé</p>
    </div>
  </div>

  <h1>QUEL TYPE DE CONTENU TU PREFERES ?</h1>

  <!-- Flickity HTML init -->
  <div class="js-flickity">
    <!-- images from unsplash.com -->
    <div class="carousel-cell">
      <a href="pages/interview.php" style="height: 100%;"><img src="./images/carrousel-interview.png" alt="carousel interview" /></a>
    </div>
    <div class="carousel-cell">
      <a href="pages/podcast.php" style="height: 100%;"><img src="./images/carrousel-podcast.png" alt="carousel podcast" /></a>
    </div>
    <div class="carousel-cell">
      <a href="pages/blog.php" style="height: 100%;"><img src="./images/carrousel-article.png" alt="carousel article" /></a>
    </div>
    <div class="carousel-cell">
      <a href="pages/reportage.php" style="height: 100%;"><img src="./images/carrousel-reportage.jpeg" alt="carousel reportage" /></a>
    </div>
  </div>

  <h1 id="scroll-page">NOS DERNIERES NOUVEAUTES</h1>

  <?php
  require("./config.php");
  // Exécutez une requête SQL pour récupérer les articles les plus récents
  $result = executeRequete("SELECT image, url, title, t_libelle, c_libelle FROM video, type_video, categorie_video WHERE type_video.t_id = video.t_id AND categorie_video.c_id = video.c_id ORDER BY v_id DESC LIMIT 4");
  ?>

  <div class="homepage">
    <?php
    foreach ($result as $row) {
      if ($row['c_libelle'] == "Initiative") $color = "#A5519A";
      if ($row['c_libelle'] == "Social") $color = "#F0E61B";
      if ($row['c_libelle'] == "Innovation") $color = "#1E4B9B";
      if ($row['c_libelle'] == "Consommation") $color = "#E51A20";
      if ($row['c_libelle'] == "Ecologie") $color = "#65B32E";
      if ($row['c_libelle'] == "Sante") $color = "#69C6D9";
    ?>

      <div class="homepage_card" style="border: solid 3px <?php echo $color; ?>; background-image: url(./images/<?php echo $row['image']; ?>); background-repeat: no-repeat; background-size: cover;background-position: center center;">
        <a href="<?php echo $row['url']; ?>">
          <button class="play-button" style="background-color: <?php echo $color; ?>">
            <svg viewBox="0 0 100 100" width="40">
              <polygon points="20,10 90,50 20,90" />
            </svg>
          </button>
        </a>
        <div class="homepagecard_content">
          <p style="font-size: 20px"><?php echo $row['title']; ?></p>
          <p><?php echo $row['t_libelle']; ?></p>
          <p><?php echo $row['c_libelle']; ?></p>
        </div>
      </div>
    <?php }
    mysqli_close($conn);
    ?>
  </div>

  <h1 style="margin-bottom: 20px">UN COUP DE COEUR ?</h1>
  <p class="smalltitle">Retrouvez nos intervenant.e.s</p>

  <?php
  // Création d'un tableau avec les données à afficher
  $partenaires = array(
    array(
      'image' => './images/standup.jpg',
      'title' => 'STAND UP FOR THE PLANET',
      'color' => '#65b32e',
      'text' => 'Association dédiée à la préservation de l\'environnement.'
    ),
    array(
      'image' => './images/notion.png',
      'title' => 'NOTION D\'INTERIEUR',
      'color' => '#a5519a',
      'text' => 'Entreprise de bougies végétales ecoresponsables'
    ),
    array(
      'image' => './images/nofilter.png',
      'title' => 'COLLECTIF NOFILTER',
      'color' => '#f0e61b',
      'text' => 'Agence de communication engagée et sans filtre !'
    ),
    array(
      'image' => './images/standup.jpg',
      'title' => 'STAND UP FOR THE PLANET',
      'color' => '#65b32e',
      'text' => 'Association dédiée à la préservation de l\'environnement.'
    ),
    array(
      'image' => './images/logo_adcomevent.jpg',
      'title' => 'ADCOMEVENT',
      'color' => '#f0e61b',
      'text' => 'Agence de communication événementielle responsable.'
    ),
  );

  // Boucle pour afficher chaque élément du tableau
  echo "<div class='grid-container'>";
  foreach ($partenaires as $item) {
    echo '<div class="grid-item">';
    echo '<img src="' . $item['image'] . '">';
    echo '<h6 style="margin-bottom: 10px;">' . $item['title'] . '</h6>';
    echo '<svg width="50%" height="20">';
    echo '<line x1="0" y1="0" x2="100%" y2="0" style="stroke:' . $item['color'] . ';stroke-width:3" />';
    echo '</svg>';
    echo '<p>' . $item['text'] . '</p>';
    echo '</div>';
  }
  echo "</div>";
  ?>

  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1> -->

  <div class="footer-basic">
    <footer>
      <div class="footerpage">
        <li class="list-inline-item"><a href="" aria-current="page">Accueil</a></li>
        <li class="list-inline-item"><a href="./pages/interview.php">Interview</a></li>
        <li class="list-inline-item"><a href="./pages/podcast.php">Podcast</a></li>
        <li class="list-inline-item"><a href="./pages/reportage.php">Reportage</a></li>
        <li class="list-inline-item"><a href="./pages/blog.php">Blog</a></li>
        <li class="list-inline-item"><a href="./pages/propos.php">A propos</a></li>
        <li class="list-inline-item"><a href="./pages/contact.php">Contact</a></li>
      </div>
      <div class="logoreseaux">
        <img src="./images/etv.png" alt="logo etv" class="imgfooter">
        <div class="reseaux">
          <a href="https://www.linkedin.com/company/87460831"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://www.instagram.com/projetetv/"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.tiktok.com/@projetetv"><i class="fa-brands fa-tiktok"></i></a>
          <a href="https://www.youtube.com/@etvprojet"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://open.spotify.com/show/4jG8rArdxhbfEYoofMwk2M"><i class="fa-brands fa-spotify"></i></a>
        </div>
      </div>
      <div class="footeretv">
        <li class="list-inline-item"><a href="./faq.php" aria-current="page">FAQ - Foire aux questions</a></li>
        <li class="list-inline-item"><a href="./pages/creeruncompte.php">Créer un compte</a></li>
        <li class="list-inline-item"><a href="./pages/contacteznous.php">Contactez-nous</a></li>
        <li class="list-inline-item"><a href="./pages/mentionslegales.php">Mentions légales</a></li>
        <li class="list-inline-item"><a href="./pages/cgd.php">Conditions générales d'utilisation</a></li>
      </div>
    </footer>
    <p class="copyright">E-TV © 2023</p>
  </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./script/script.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</html>