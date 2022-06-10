<?php

require_once('./fonction-res.php');

$auteur = retourne_auteur();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="menu"></div>
    <div class="contenu">
        <div class="nouveau_post"></div>
        <div class="affiche_post"></div>
    </div>

    <script src="./index.js"></script>
</body>
</html>