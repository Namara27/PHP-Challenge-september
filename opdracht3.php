<?php

$boodschappen = ["aardappel", "aardbei", "melk", "yoghurt"];

foreach ($boodschappen as $boodschap) {
    echo "<ul>";
    echo "<li>" . "$boodschap " . "<img src='img/" . $boodschap . ".jpg" . "'>" . "</li>";
    echo "</ul>";
}

