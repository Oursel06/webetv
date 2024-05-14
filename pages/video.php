<head>
    <title>E-TV | Vidéo</title>
</head>

<?php require("../partials/public_header.php");?>
<body>
    <?php
    echo ("<br><br><br><br>");
    // Récupération des vidéos de la chaîne youtube
    $API_key = 'AIzaSyBOwxpmm3ThrbiKfNA0JYm0q9JE4wcHxdI';
    $channelID = 'UCUbw3IATii8qeDYdkNRQbTw';
    $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=' . $channelID . '&key=' . $API_key));
    ?>
    <div class="video-list" style="display: flex; flex-wrap: wrap; justify-content: center;">
        <?php
        foreach ($videoList->items as $item) {
            if (isset($item->id->videoId)) {
                echo '<div class="vidéo-youtube" style="border: solid 1px black; width: min-content; padding: 5px; text-align: center; margin: 5px; color: white">
                    <iframe width="280" height="150" src="https://www.youtube.com/embed/' . $item->id->videoId . '" frameborder="0" allowfullscreen></iframe>
                    <p>' . $item->snippet->title . '</p>
                </div>';
            }
        } ?>
    </div>
</body>

</html>