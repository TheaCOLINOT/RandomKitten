<?php
$images = glob('images/*.{jpg,png,gif}', GLOB_BRACE); //stock chemins des images dans dossier images, sous forme de tableau
$randomImage = $images[array_rand($images)]; //variable randomImage qui selec un chemin au ahasard

$html = <<<HTML
<DOCTYPE>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Find kitten</title>
        <link rel="stylesheet" href="style/styles.css" />
      </head>
      <body>
        <h1> Find Kitten </h1>
        <a href="index.php"> <button class="find" type="button"> See cat's </button> </a>
        <img class="randomimg" src='$randomImage' alt='Image' />  <!--- balise image avec variable php dans source --->
      </body>
</html>

HTML;



echo $html; //affiche variable qui contient le HTML

?>

