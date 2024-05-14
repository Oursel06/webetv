<head>
  <title>E-TV | Contact</title>
</head>

<?php require("../partials/public_header.php");?>

<?php
session_start();
if (isset($_POST['submit'])){
  extract($_POST);

  if (isset($username) && $username != "" &&
      isset($email) && $email != "" &&
      isset($message) && $message != ""){

    //Mettre mail ETV ICI
    $to = "";
    $subject = "Vous avez reçu un message de : " . $email;

    $message = "
      <p>Vous avez reçu un message de <strong>".$email."</strong></p>
      <p><strong>Nom : ".$username."</strong></p>
      <p><strong>Message : ".$message."</strong></p>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: <'.$email.'>' . "\r\n";

    $send = mail($to,$subject,$message,$headers);

    if ($send){
      $_SESSION['success_message'] = "message envoyé";
    }else {
      $info = "message non envoyé";
    }

  }
  else {
    $info = "Veuillez remplir tous les champs !";
  }
}

?>


<body>
  <div class="catContact">
    <div class="contactItem">
      <img src="../images/photography.png" class="iconcontact" alt="Interview" style="width: 40%;" />
      <button type="button" class="buttoncontact" title="Interview" id="show-div1">Interview</button>
    </div>
    <div class="contactItem">
      <img src="../images/microphone.png" class="iconcontact" alt="Podcast" style="width: 40%;" />
      <button type="button" class="buttoncontact" title="Podcast" id="show-div2">Podcast</button>
    </div>
    <div class="contactItem">
      <img src="../images/circle.png" class="iconcontact" alt="Autre" style="width: 40%;" />
      <button type="button" class="buttoncontact" title="Autre" id="show-div3">Reportage</button>
    </div>
  </div>

  <form action="" method="POST">
    <div class="backgroundcontact" id="container1">
      <div class="containercontact">
        <div class="screen">
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>CONTACT</span>
                <span>INTERVIEW</span>
              </div>
              <div class="app-contact">CONTACT INFO : ETV</div>
            </div>
            <div class="screen-body-item">
              <div class="app-form">
                <div class="app-form-group">
                  <label>
                  <input type="text" id="name" name="name" class="app-form-control" placeholder="NOM">
                  </label>
                </div>
                <div class="app-form-group">
                  <label>
                  <input type="email" id="email" name="email" class="app-form-control" placeholder="EMAIL">
                  </label>
                </div>
                <div class="app-form-group message">
                  <label>
                  <input id="message" name="message" class="app-form-control" placeholder="MESSAGE">
                  </label>
                </div>
                <div class="app-form-group buttons">
                  <button class="app-form-button" type="submit" name="submit">ENVOYER</button>
                  <?php
                    if (isset($info)) { ?>
                      <p class="request-message" style="color: red"><?=$info?></p>
                      <?php
                    }
                  ?>

                  <?php
                  if (isset($_SESSION['success_message'])) { ?>
                    <p class="request-message" style="color: green"><?=$_SESSION['success_message']?></p>
                    <?php
                  }
                  ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="backgroundcontact" id="container2" style="display: none;">
      <div class="containercontact">
        <div class="screen">
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>CONTACT</span>
                <span>PODCAST</span>
              </div>
              <div class="app-contact">CONTACT INFO : ETV</div>
            </div>
            <div class="screen-body-item">
              <div class="app-form">
                <div class="app-form-group">
                  <label>
                    <input type="text" id="name" name="name" class="app-form-control" placeholder="NOM">
                  </label>
                </div>
                <div class="app-form-group">
                  <label>
                    <input type="email" id="email" name="email" class="app-form-control" placeholder="EMAIL">
                  </label>
                </div>
                <div class="app-form-group message">
                  <label>
                    <input id="message" name="message" class="app-form-control" placeholder="MESSAGE">
                  </label>
                </div>
                <div class="app-form-group buttons">
                  <button class="app-form-button" type="submit">ENVOYER</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="backgroundcontact" id="container3" style="display: none;">
      <div class="containercontact">
        <div class="screen">
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>CONTACT</span>
                <span>REPORTAGE</span>
              </div>
              <div class="app-contact">CONTACT INFO : ETV</div>
            </div>
            <div class="screen-body-item">
              <div class="app-form">
                <div class="app-form-group">
                  <label>
                    <input type="text" id="name" name="name" class="app-form-control" placeholder="NOM">
                  </label>
                </div>
                <div class="app-form-group">
                  <label>
                    <input type="email" id="email" name="email" class="app-form-control" placeholder="EMAIL">
                  </label>
                </div>
                <div class="app-form-group message">
                  <label>
                    <input id="message" name="message" class="app-form-control" placeholder="MESSAGE">
                  </label>
                </div>
                <div class="app-form-group buttons">
                  <button class="app-form-button" type="submit">ENVOYER</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <?php
  require_once("../partials/public_footer.php");
  ?>

</body>
<script src="./script/script.js"></script>
<script>
  $("#show-div1").click(function() {
    $("#container1").show();
    $("#container2").hide();
    $("#container3").hide();
  });
  $("#show-div2").click(function() {
    $("#container1").hide();
    $("#container2").show();
    $("#container3").hide();
  });
  $("#show-div3").click(function() {
    $("#container1").hide();
    $("#container2").hide();
    $("#container3").show();
  });
</script>