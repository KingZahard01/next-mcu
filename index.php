<?php
require './api.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Próxima Película de Marvel</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="movie-card">
        <img src="<?= $data["poster_url"]; ?>"
            class="movie-poster"
            alt="Poster de <?= $data["title"]; ?>"
            class="movie-poster">

        <h3>
            <?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias
        </h3>

        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>

        <p>La siguiente es: <b><?= $data["following_production"]["title"] ?></b></p>
    </div>
</body>

</html>