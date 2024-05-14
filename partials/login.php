<head>
  <link rel="stylesheet" href="../css/custom.css" />
</head>


<?php
require("../config.php");
if (internauteEstConnecte()) {
  header("location:../index.php");
}

// Traitement de l'inscription
if (isset($_POST['register'])) {
  // Récupération des données du formulaire
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordRepeat = $_POST['password-repeat'];

  // Vérification des données du formulaire
  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    // Gérer l'erreur si des champs sont vides
    header("Location: login.php?error=emptyfields&username=" . $username . "&email=" . $email);
    exit();
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    // Gérer l'erreur si l'email est incorrect et le nom d'utilisateur contient des caractères non valides
    header("Location: login.php?error=invalidemailusername");
    exit();
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Gérer l'erreur si l'email est incorrect
    header("Location: login.php?error=invalidemail&username=" . $username);
    exit();
  } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    // Gérer l'erreur si le nom d'utilisateur contient des caractères non valides
    header("Location: login.php?error=invalidusername&email=" . $email);
    exit();
  } else if ($password !== $passwordRepeat) {
    // Gérer l'erreur si les mots de passe ne correspondent pas
    header("Location: login.php?error=passwordcheck&username=" . $username . "&email=" . $email);
    exit();
  } else {
    // Vérifier si le nom d'utilisateur ou l'email existe déjà dans la base de données
    $sql = "SELECT username FROM users WHERE username=? OR email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      // Gérer l'erreur si la requête SQL échoue
      header("Location: login.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "ss", $username, $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {

        header("Location: login.php?error=le nom d utilisateur ou l email existe deja&email=" . $email);
        exit();
      } else {
        // Hashage du mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // Enregistrement des données dans la base de données
        $sql = "INSERT INTO users (username, email, password, type) VALUES (?, ?, ?, 'user')";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // Gérer l'erreur si la requête SQL échoue
          header("Location: login.php?error=sqlerror");
          exit();
        } else {
          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
          mysqli_stmt_execute($stmt);
          $_SESSION['admin'] = false;
          header("Location: login.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

// connexion
if (isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {

    header("Location: login.php?error=des champs sont vides");
    echo "Pas de données";
    exit();
  } else {
    // Vérification des données dans la base de données
    $sql = "SELECT * FROM users WHERE username=? OR email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      // Gérer l'erreur si la requête SQL échoue
      header("Location: login.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "ss", $username, $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        // Vérification du mot de passe hashé
        $passwordCheck = password_verify($password, $row['password']);
        if ($passwordCheck == false) {
          header("Location: login.php?error=les donnees de connexion sont incorrectes");
          exit();
        } else if ($passwordCheck == true) {
          // Démarrer une session utilisateur
          session_start();
          $_SESSION['userId'] = $row['id'];
          $_SESSION['username'] = $row['username'];
          if ($row['type'] == "admin") {
            $_SESSION['admin'] = true;
            header("Location: ../admin.php?login=success");
          } else {
            $_SESSION['admin'] = false;
            header("Location: ../index.php?login=success");
          }
          exit();
        } else {
          header("Location: login.php?error=erreur inconnue survenue");
          exit();
        }
      } else {
        header("Location: login.php?error=les donnees de connexion sont incorrectes");
        exit();
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
?>


<div class="container" id="containerlogin">
  <div class="form-container sign-up-container">
    <form class="formcoco" method="post">
      <h1 class="h1coco">Creer un compte</h1>
      <!-- <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div> -->
      <!-- <span>ou utilisez votre courriel pour vous inscrire</span> -->
      <input class="inputcoco" type="text" placeholder="Nom" name="username" />
      <input class="inputcoco" type="email" placeholder="Email" name="email" />
      <input class="inputcoco" type="password" placeholder="Mot de passe" name="password" />
      <input class="inputcoco" type="password" placeholder="Confirmer le mot de passe" name="password-repeat" />
      <button class="buttoncoco" name="register">S'inscrire</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form class="formcoco" method="post">
      <h1 class="h1coco">Connectez-vous</h1>
      <div class="social-container">
        <!-- <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> -->
      </div>
      <!-- <span>ou utilisez votre compte</span> -->
      <input class="inputcoco" type="username" placeholder="Nom" name="username" />
      <input class="inputcoco" type="password" placeholder="Mot de passe" name="password" />
      <a class="acoco" href="#">Mot de passe oublie ?</a>
      <button class="buttoncoco" name="login">Connectez-vous</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1 class="h1coco">Heureux de te revoir !</h1>
        <img src="../images/etv.png" alt="logo icon" style="width: 30%;">
        <p class="pacoco">Pour rester connecte avec nous, veuillez vous connecter avec vos informations personnelles</p>
        <button class="buttoncoco ghost" id="signIn">Connectez-vous</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1 class="h1coco">Bonjour, mon ami!</h1>
        <img src="../images/etv.png" alt="logo icon" style="width: 30%;">
        <p class="pacoco">Entrez vos donnees personnelles et commencez votre voyage avec nous</p>
        <button class="buttoncoco ghost" id="signUp">S'inscrire</button>
      </div>
    </div>
  </div>
</div>

<script src="../script/script.js"></script>