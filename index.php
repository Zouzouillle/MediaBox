<?php

include("includes/fonctions.php");

$ressources = lire () ;

foreach ($ressources as $res) {
    echo "<h1>".$res['titre']."</h1>";
    echo "<p>".$res['description']."</p>";
}

?>

