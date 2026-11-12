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

echo "<header>";
echo "<h1>Gestion des Ressources</h1>";
echo "<a href='ajouter.php' target='_blank'>Ajouter</a>";
echo "</header>";

$ressources = lire () ;

echo "<main>";

foreach ($ressources as $res) {
    echo "<article>";
    echo "<img class='icone' src='images/".$res['type'].".png' alt='".$res['type']."'>";
    echo "<h1>".$res['titre']."</h1>";
    echo "<p>".$res['description']."</p>";
    $chemin=$res['type']=="document" ? "uploads/".$res['fichier'] : $res['url'];
    
    echo "<footer>";

    echo "<a href='".$chemin."' target='_blank'>Voir</a>";
    echo "<a href='modifier.php?id=".$res['id']."' target='_blank'>Modifier</a>";
    echo "<a href='supprimer.php?id=".$res['id']."' target='_blank'>Supprimer</a>";
    
    echo "</footer>";

    echo "</article>";

}

echo "</main>";
?>
</body>
</html>

