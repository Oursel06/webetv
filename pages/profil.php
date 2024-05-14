<?php
require_once("../config.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(!internauteEstConnecte()) header("location:login.php");
// debug($_SESSION);
$contenu .= '<p class="centre">Bonjour <strong>' . $_SESSION['username']['pseudo'] . '</strong></p>';
$contenu .= '<div class="cadre"><h2> Voici vos informations </h2>';
$contenu .= '<p> votre email est: ' . $_SESSION['clients']['email'] . '<br>';
$contenu .= 'votre ville est: ' . $_SESSION['clients']['ville'] . '<br>';
$contenu .= 'votre cp est: ' . $_SESSION['clients']['code_postal'] . '<br>';
$contenu .= 'votre adresse est: ' . $_SESSION['clients']['adresse'] . '</p></div><br><br>';
//--------------------------------- AFFICHAGE HTML ---------------------------------//
echo $contenu;
