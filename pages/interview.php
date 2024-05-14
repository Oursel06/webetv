<head>
    <title>E-TV | Interview</title>
</head>

<?php require("../partials/public_header.php"); ?>

<body>
    <br><br><br>
    <h1>Agir pour le monde de demain</h1>
    <?php
    require("../config.php");

    $interviewVideos = getInterviewVideos();

    echo "<div class='interview'>";
    foreach ($interviewVideos as $video) {
        echo "<div class='interview_card' style='border: solid 3px " . $video['color'] . "; background-image: url(../images/" . $video['image'] . "); background-repeat: no-repeat; background-size: cover;'>";
        echo "<div class='textonvideo'>";
        echo "<div class='textonvideotext'>";
        echo "<p>" . $video['description'] . "</p>";
        echo "</div>";
        echo "</div>";
        echo "<div class='interview_details'>";
        echo "<p class='interview_title'>" . $video['title'] . "</p>";
        echo "<div class='interview_buttons'>";
        echo "<a class='regarder' href='" . $video['url'] . "' style='background-color: " . $video['color'] . "'>Regarder</a>";
        // <a class="ajouter" name="add">Ajouter à ma liste</a>
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
    ?>


    <h1>ENVIE D'EN ÉCOUTER PLUS ?</h1>


    <div class="interview_autre">
        <div class="interview_search">
            <img src="../images/search.png" width="30px" height="30px" style="margin-left: 12px; margin-top: 18px; position: absolute; border-right: solid 1px black;" />
            <label>
                <input type="text" style="padding: 15px 20px 20px 50px; border-radius: 10px; border: solid 1px gray;" name="interview_search" id="interview_search" placeholder="Un sujet en particulier ?" />
            </label>
        </div>
        <div class="interview_category">
            <div class="categorie_items">
                <ul id="video-flters">
                    <li data-filter="*">Tous</li>
                    <li data-filter=".filter-ecologie">Écologie</li>
                    <li data-filter=".filter-social">Social</li>
                    <li data-filter=".filter-consommation">Consommation</li>
                    <li data-filter=".filter-innovation">Innovation</li>
                    <li data-filter=".filter-initiative">Initiative</li>
                    <li data-filter=".filter-sante">Santé</li>
                </ul>
            </div>
        </div>


        <div class="video-container" data-aos="fade-up" data-aos-delay="100">

            <?php
            $result = executeRequete("SELECT image, description, url, title, t_libelle, c_libelle FROM video, type_video, categorie_video WHERE type_video.t_id = video.t_id AND categorie_video.c_id = video.c_id AND type_video.t_libelle = 'interview'");

            foreach ($result as $row) {
                if ($row['c_libelle'] == "Initiative") {
                    $color = "#A5519A";
                    $categorie = "Initiative";
                }
                if ($row['c_libelle'] == "Social") {
                    $color = "#F0E61B";
                    $categorie = "Social";
                }
                if ($row['c_libelle'] == "Innovation") {
                    $color = "#1E4B9B";
                    $categorie = "Innovation";
                }
                if ($row['c_libelle'] == "Consommation") {
                    $color = "#E51A20";
                    $categorie = "Consommation";
                }
                if ($row['c_libelle'] == "Ecologie") {
                    $color = "#65B32E";
                    $categorie = "Ecologie";
                }
                if ($row['c_libelle'] == "Sante") {
                    $color = "#69C6D9";
                    $categorie = "Sante";
                }

            ?>
                <div style="margin: 5px;" class="video-item filter-<?php echo $categorie; ?>">
                    <div class="interview_card" style="border: solid 3px <?php echo $color; ?>; background-image: url(../images/<?php echo $row['image']; ?>); background-repeat: no-repeat; background-size: cover;">
                        <div class="textonvideo">
                            <div class="textonvideotext">
                                <?php echo $row['description']; ?>
                            </div>
                        </div>
                        <div class="interview_details">
                            <h1 class="interview_title"><?php echo $row['title']; ?></h1>
                            <div class="interview_buttons">
                                <a class="regarder" href="<?php echo $row['url']; ?>" style="background-color: <?php echo $color; ?>;">Regarder</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            mysqli_close($conn);
            ?>
        </div>
    </div>

    <?php
    require_once("../partials/public_footer.php");
    ?>
</body>
<script src="../script/isotope.pkgd.min.js"></script>