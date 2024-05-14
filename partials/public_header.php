<html lang="auto">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link rel="stylesheet" type="text/css" href="../css/styleapropos.css">
  <link href="https://fonts.cdnfonts.com/css/louis-george-cafe" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Flex:opsz,wght@8..144,100;8..144,300;8..144,500;8..144,700;8..144,900&display=swap" rel="stylesheet" />
  <script src=" https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js "></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="icon" type="image" href="../images/etvlogo.png" />
  <script src="../script/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>


  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YJ8YHTJZFB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-YJ8YHTJZFB');
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-262233921-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-262233921-1');
  </script>
</head>

<nav>
  <a href="../index.php" class="nav-icon" aria-label="visit homepage" aria-current="page">
    <img src="../images/etv.png" alt="logo icon">
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
    <a href="" class="sign-user" aria-label="Sign in page">
      <img src="../images/user-icon.png" alt="user-icon">
    </a>

    <?php
    session_start();
    if (isset($_SESSION['username'])) {
      echo "Bonjour, " . $_SESSION['username'];
      echo '<form action="../partials/logout.php" method="post"><button type="submit" name="logout-submit" class="deconnexion">Déconnexion</button></form>';
    } else {
      echo '<div class="sign-btns"><a href="../partials/login.php" type="button"><i class="bi bi-person-fill"></i> Connexion</a></div>';
    }
    ?>
  </div>
</nav>