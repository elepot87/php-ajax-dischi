<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php dischi</title>
    <!-- Main style -->
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

    <!-- Richiamo i miei data del database in php -->
    <?php
    require_once __DIR__ . '/partials/database.php' ; 
    ?>

    <!-- Header -->
    <header class='header'>
        <div class="container">
            <img src="./img/logo.png" alt="logo spotify" class="logo">
        </div>
    </header>
    <!-- Main -->
    <main>
        <div class="container">
            <ul class="main-list">
                <?php 
                foreach ($database as $album) { ?>
                <li class="list-item">
                    <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?>" class="cover">
                    <div class="info-album">
                        <h3 class="title-cd">
                            <?php echo $album['title'] ?>
                        </h3>
                        <div class="author"><?php echo $album['author'] ?></div>
                        <div class="year"><?php echo $album['year'] ?></div>
                        <div class="genre"><?php echo $album['genre'] ?></div>
                    </div>
                </li>
                <?php } ?>

            </ul>
        </div>
    </main>
</body>

</html>