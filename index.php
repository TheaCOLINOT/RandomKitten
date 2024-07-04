<?php
$images = glob('images/*.{jpg,png,gif}', GLOB_BRACE);
$randomImage = $images[array_rand($images)];

$html = <<<HTML
<DOCTYPE>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Find kitten</title>
        <link rel="stylesheet" href="styles.css" />
      </head>
      <body>
        <h1> Find Kitten </h1>
        <a href="index.php"> <button class="find" type="button"> See cat's </button> </a>
        <img src='$randomImage' alt='Image' />
      </body>
</html>

HTML;



echo $html;

?>

