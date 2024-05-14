<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/admin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Upload vidéo</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
        require("./config.php");
        $queryc = "SELECT c_id, c_libelle FROM categorie_video";
        $resultc = $conn->query($queryc);

        $queryt = "SELECT t_id, t_libelle FROM type_video";
        $resultt = $conn->query($queryt);
    ?>
        <form method="post" action="copy.php" enctype="multipart/form-data">
            <h1>Upload vidéo</h1>
            <fieldset>
                <label for="title">Titre de la vidéo : </label>
                <input maxlength="24" type="text" name="title" placeholder="Titre" /><br>
                <label for="minia">Image de fond : </label>
                <input type="file" name="miniature" id="miniature" /><br><br>
                <label maxlength="64" for="url">URL (YouTube) de la vidéo : </label>
                <input type="text" name="url" placeholder="Lien YouTube de la vidéo" /><br>
                <label for="description">Description de la vidéo : </label>
                <textarea maxlength="400" name="description" placeholder="Description de la vidéo"></textarea> <br><br>
                <label for="type">Type de vidéo : </label>
                <select name="type_video" id="type_video">
                    <?php foreach ($resultt as $rowt) { ?>
                        <option value="<?php echo $rowt['t_id']; ?>"><?php echo $rowt['t_libelle']; ?></option>
                    <?php } ?>
                </select> <br><br>
                <label for="categorie">Categorie de vidéo : </label>
                <select name="categorie_video" id="categorie_video">
                    <?php foreach ($resultc as $rowc) { ?>
                        <option value="<?php echo $rowc['c_id']; ?>"><?php echo $rowc['c_libelle']; ?></option>
                    <?php } ?>
                </select> <br><br>
                <button type="submit" name="upload">Upload vidéo</button>
                <br><br>
                <div style="width: 100%; text-align: center;">
                    <p><a href="./pages/podcast.php">Voir podcast</a></p>
                    <p><a href="./pages/reportage.php">Voir reportage</a></p>
                    <p><a href="./pages/interview.php">Voir interview</a></p>
                </div>
            </fieldset>
        </form>
    <?php } else { ?>
        <div class="acceserror">
            <div class="acceserrorcontent">
                <h1 class="w3-animate-top">Accès refusé !</h1>
                <hr class="w3-border-white w3-animate-zoom" style="margin:auto;width:50%">
                <h3 class="w3-animate-zoom">🚫 Vous n'avez pas l'autorisation d'accéder à cette page 🚫</h3>
                <a class="w3-animate-zoom" href="./index.php">Retour en lieu sûr</a>
            </div>
        </div>
    <?php } ?>
    <!-- <div style="width: auto; margin: 10px;">
        <table style="width: 100%; border: solid 1px black;">
            <tr style="border: solid .1px black;">
                <th style="padding: 10px;">ID</th>
                <th style="padding: 10px;">Titre</th>
                <th style="padding: 10px;">Image</th>
                <th style="padding: 10px;">Description</th>
                <th style="padding: 10px;">URL</th>
                <th style="padding: 10px;">Type</th>
                <th style="padding: 10px;">Catégorie</th>
                <th style="padding: 10px;"></th>
            </tr> -->
    <?php
    // $queryv = "SELECT * FROM video";
    // $resultv = $conn->query($queryv);
    // function deleteVideos($id_video)
    // {
    //     $query_delete = "DELETE FROM video WHERE video_id = " . $id_video;
    //     mysqli_query(mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME), $query_delete);
    // }
    // foreach ($resultv as $rowv) {
    ?>
    <!-- <tr style="vertical-align: middle;">
                <td style="padding: 10px; border-bottom: solid 1px black;"><?php echo $rowv['v_id']; ?></td>
                <td style="padding: 10px; border-bottom: solid 1px black;"><?php echo utf8_decode($rowv['title']); ?></td>
                <td style="padding: 10px; border-bottom: solid 1px black;"><?php echo $rowv['image']; ?></td>
                <td style="padding: 10px; border-bottom: solid 1px black;"><?php echo utf8_decode($rowv['description']); ?></td>
                <td style="padding: 10px; border-bottom: solid 1px black;"><?php echo $rowv['url']; ?></td>
                <td style="padding: 10px; border-bottom: solid 1px black;"><?php echo $rowv['t_id']; ?></td>
                <td style="padding: 10px; border-bottom: solid 1px black;"><?php echo $rowv['c_id']; ?></td>

                <td style="padding: 10px; border-bottom: solid 1px black;"><img id="<?php $rowv['v_id']; ?>" onclick="deleteVideo(<?php echo $rowv['v_id']; ?>)" src="./images/remove.png" style="cursor: pointer;" width="30px" height="30px" /></td>
                <td style="padding: 10px; border-bottom: solid 1px black;"><img src="./images/edit.png" style="cursor: pointer;" width="30px" height="30px" /></td>
            </tr> -->
    <?php
    // }
    ?>
    <!-- </table>
    </div> -->
</body>

</html>