<?php
function executeRequete($req)
{
    global $conn;
    $resultat = $conn->query($req);
    if (!$resultat) {
        die("Erreur sur la requete sql.<br>Message : " . $conn->error . "<br>Code: " . $req);
    }
    return $resultat;
}

//------------------------------------
function internauteEstConnecte()
{
    if (!isset($_SESSION['username'])) return false;
    else return true;
}

//------------------------------------
function internauteEstConnecteEtEstAdmin()
{
    if (internauteEstConnecte() && $_SESSION['username']['type'] == "admin") return true;
    else return false;
}

//------------------------------------
function getInterviewVideos()
{
    $result = executeRequete("SELECT image, description, url, title, t_libelle, c_libelle FROM video, type_video, categorie_video WHERE type_video.t_id = video.t_id AND categorie_video.c_id = video.c_id AND type_video.t_libelle = 'interview'");

    $videos = array();

    foreach ($result as $row) {
        $color = match ($row['c_libelle']) {
            "Initiative" => "#A5519A",
            "Social" => "#F0E61B",
            "Innovation" => "#1E4B9B",
            "Consommation" => "#E51A20",
            "Ecologie" => "#65B32E",
            "Sante" => "#69C6D9",
            default => "",
        };

        $videos[] = array(
            "image" => $row['image'],
            "description" => $row['description'],
            "url" => $row['url'],
            "title" => $row['title'],
            "color" => $color
        );
    }

    return $videos;
}

//------------------------------------
function getPodcastVideos()
{
    $result = executeRequete("SELECT image, description, url, title, t_libelle, c_libelle FROM video, type_video, categorie_video WHERE type_video.t_id = video.t_id AND categorie_video.c_id = video.c_id AND type_video.t_libelle = 'podcast'");

    $videos = array();

    foreach ($result as $row) {
        $color = match ($row['c_libelle']) {
            "Initiative" => "#A5519A",
            "Social" => "#F0E61B",
            "Innovation" => "#1E4B9B",
            "Consommation" => "#E51A20",
            "Ecologie" => "#65B32E",
            "Sante" => "#69C6D9",
            default => "",
        };

        $videos[] = array(
            "image" => $row['image'],
            "description" => $row['description'],
            "url" => $row['url'],
            "title" => $row['title'],
            "color" => $color
        );
    }

    return $videos;
}

