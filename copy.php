<head>
  <meta charset="UTF-8">
  <script src=" https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js "></script>
</head>

<div style="text-align: center; width: 100%;">
  <?php
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["miniature"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Vérification type fichier
  $check = getimagesize($_FILES["miniature"]["tmp_name"]);
  if ($check === true) {
    echo "<lottie-player src='https://assets6.lottiefiles.com/packages/lf20_qpwbiyxf.json' background='transparent' speed='1' loop autoplay></lottie-player><br>";
    throw new Exception("Le fichier n'est pas une image.");
  }
  // Vérification taille image
  if ($_FILES["miniature"]["size"] > 2000000) {
    echo "<lottie-player src='https://assets6.lottiefiles.com/packages/lf20_qpwbiyxf.json' background='transparent' speed='1' loop autoplay></lottie-player><br>";
    echo "IMAGE TROP VOLUMINEUSE.";
    throw new Exception("Fichier trop volumineux.");
  }
  // Vérification extension
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "<lottie-player src='https://assets6.lottiefiles.com/packages/lf20_qpwbiyxf.json' background='transparent' speed='1' loop autoplay></lottie-player><br>";
    echo "Fichier n'est pas une image.";
    throw new Exception("Type de fichier autorisé ici : JPG, JPEG, PNG et GIF.");
  }
  if (move_uploaded_file($_FILES["miniature"]["tmp_name"], $target_file)) {
  ?>
    <?php
    // On envoi les informations dans la BdD
    if (isset($_POST['upload'])) {
      require("./config.php");
      $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
      $sql = "INSERT INTO video (v_id, title, image, description, url, t_id, c_id) VALUES (NULL, '" . str_replace("'", "\'", $_POST['title'])  . "', '" . $_FILES["miniature"]["name"] . "','" . str_replace("'", "\'", $_POST['description']) . "', '" . $_POST['url'] . "', '" . $_POST['type_video'] . "', '" . $_POST['categorie_video'] . "')";
      if (mysqli_query($conn, $sql)) {
    ?>
        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_vij39mwv.json" background="transparent" speed="1" loop autoplay></lottie-player><br>
      <?php
        echo "Vidéo '" . $_POST['title'] . "' upload !";
      } else {
      ?>
        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_qpwbiyxf.json" background="transparent" speed="1" style="width: 300px; height: 300px;" autoplay></lottie-player><br>

  <?php
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
      }
      mysqli_close($conn);
    }
  } else {
    echo "Erreur lors du chargement de l'image. <br>";
  }
  ?>
</div>