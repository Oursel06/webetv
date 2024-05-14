<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/styleapropos.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <title>E-TV | A Propos</title>
    <link rel="icon" type="image" href="../images/etvlogo.png" />

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

<body>
    <nav>
        <a href="../index.php" class="nav-icon" aria-label="visit homepage" aria-current="page">
            <img src="../images/etvlogo.png" alt="logo icon">
        </a>

        <div class="main-navlinks">
            <button class="hamburger" type="button" aria-label="Toggle navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navlinks_container">
                <a href="../index.php" aria-current="page">ACCUEIL</a>
                <a href="./interview.php">INTERVIEW</a>
                <a href="podcast.php">PODCAST</a>
                <a href="reportage.php">REPORTAGE</a>
                <a href="blog.php">BLOG</a>
                <a href="propos.php">A PROPOS</a>
                <a href="contact.php">CONTACT</a>
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
    <div class="page">
        <div class="video-presentation">
            <!--id chaine etvynov : UCUbw3IATii8qeDYdkNRQbTw -->
            <iframe frameborder="0" scrolling="no" width="80%" height="500px" type="text/html" src="https://www.youtube.com/embed/uMUuwW8Ra4s" allowfullscreen>
            </iframe>
        </div>
        <div class="section-presentation">
            <div class="section-title">
                <h2> Le projet E-tv</h2>
            </div>
            <div class="projet-presentation-text">
                <p> E-TV, ce sont 3 lettres qui réunissent 13 personnes, 6 thèmes et deux formats, le tout dans un seul but : mettre en lumière les acteurs du monde de demain. <br> Être acteur pour le monde de demain, c’est agir personnellement ou professionnellement en tenant compte des problématiques actuelles qui nous entourent et tenter, un peu, au moins un peu, de contribuer positivement au futur de nos sociétés. <br>
                    Animés par les enjeux écologiques, sociétaux, technologiques, sanitaires, les enjeux de consommations ou les initiatives individuelles, nous recevons devant nos caméras des personnes convaincues de pouvoir œuvrer bénéfiquement pour le monde de demain. <br>
                    Que ce soit en interview ou en podcast, nous laissons la parole à ceux qui partagent notre optimisme, et notre utopie. </p>
                <p> E-TV c’est un moment d’expérimentation, un moment où l’on apprend, où l’on se comprend, un moment de partage et d’ouverture à des initiatives positives, et un moment pour avancer tous ensemble vers un but commun. </p>
            </div>
        </div>
        <div class="section-presentation">
            <div class="section-title">
                <h2> Présentation de la E-team </h2>
            </div>
        </div>

        <div class="carousel-content">
            <div class="carousel-container">
                <div class="carousel">
                    <div class="carousel-item-propos">
                        <div class="items">
                            <img src="../images/damien.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/marion.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/pierre.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/audran.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/axel.png" />
                        </div>
                    </div>
                    <div class=" carousel-item-propos">
                        <div class="items ">
                            <img src="../images/catalina.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/sabrina.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/margaux.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/theo.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/alexandre.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/tatiana.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/nolan.png" />
                        </div>
                    </div>
                    <div class="carousel-item-propos">
                        <div class="items ">
                            <img src="../images/yan.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="items-content">
                    <img class="img" src="../images/etv_profil.png" />
                    <p class="header"></p>
                    <p class="description">
                    </p>
                    <img class="imgskills" src="../images/circle-outline.png">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="footerpage">
                <li class="list-inline-item"><a href="" aria-current="page">Accueil</a></li>
                <li class="list-inline-item"><a href="../pages/interview.php">Interview</a></li>
                <li class="list-inline-item"><a href="../pages/podcast.php">Podcast</a></li>
                <li class="list-inline-item"><a href="../pages/reportage.php">Reportage</a></li>
                <li class="list-inline-item"><a href="../pages/blog.php">Blog</a></li>
                <li class="list-inline-item"><a href="../pages/propos.php">A propos</a></li>
                <li class="list-inline-item"><a href="../pages/contact.php">Contact</a></li>
            </div>
            <div class="logoreseaux">
                <img src="../images/etv.png" alt="logo etv" class="imgfooter">
                <div class="reseaux">
                    <a href="https://www.linkedin.com/company/87460831"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/projetetv/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@projetetv"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/@etvprojet"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://open.spotify.com/show/4jG8rArdxhbfEYoofMwk2M"><i class="fa-brands fa-spotify"></i></a>
                </div>
            </div>
            <div class="footeretv">
                <li class="list-inline-item"><a href="../faq.php" aria-current="page">FAQ - Foire aux questions</a></li>
                <li class="list-inline-item"><a href="../pages/creeruncompte.php">Créer un compte</a></li>
                <li class="list-inline-item"><a href="../pages/contacteznous.php">Contactez-nous</a></li>
                <li class="list-inline-item"><a href="../pages/mentionslegales.php">Mentions légales</a></li>
                <li class="list-inline-item"><a href="../pages/cgd.php">Conditions générales d'utilisation</a></li>
            </div>
        </footer>
        <!-- <p class="copyright">E-TV © 2022</p> -->
    </div>
</body>
<script type="text/javascript" src="../script/scriptapropos.js"></script>
<script type="text/javascript" src="../script/script.js"></script>

</div>

</html>