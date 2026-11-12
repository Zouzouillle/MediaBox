<!-- C:\xampp\htdocs\MediaBox\FICHIERS\MediaBox -->

<?php

include("includes/fonctions.php");



?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title> TP - SLAM </title>
    <link rel="stylesheet" href="style/style.css">
    </head>
<body>
<?php

$ressources = lire () ;

foreach ($ressources as $res) {
    echo "<article>";
    echo "<h1>".$res['titre']."</h1>";
    echo "<p>".$res['description']."</p>";
    $chemin=$res['type']=="document" ? "uploads/".$res['fichier'] : $res['url'];
    echo "<a href='".$chemin."' target='_blank'>Voir</a>";
    echo "</article>";

}

?>
</body>
</html>

