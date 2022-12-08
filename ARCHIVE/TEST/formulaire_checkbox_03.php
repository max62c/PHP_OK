<?php
    // Récupération de paramètres passés par la méthode GET
    // avec PHP>=4.1
    // $_GET["loisirs"] contient un tableau de valeurs
    $loisirs = $_GET["loisirs"];

    echo "<b>Vous aimez </b><br />";
    for ($i=0; $i<count($loisirs); $i++) {
        echo $loisirs[$i]."<br />";
    }
?>