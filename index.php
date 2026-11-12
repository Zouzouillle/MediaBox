<!-- C:\xampp\htdocs\MediaBox\FICHIERS\MediaBox -->

<?php

include("includes/fonctions.php");



?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title> TP - SLAM </title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php

$ressources = lire () ;

foreach ($ressources as $res) {
    echo "<h1>".$res['titre']."</h1>";
    echo "<p>".$res['description']."</p>";
    echo "<a href='".$res['url']."'>".$res['url']."</a>";
}

?>
</body>
</html>

