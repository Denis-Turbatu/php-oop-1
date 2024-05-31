<?php
    include_once __DIR__ . '/objects/movie.php';

    $movie = new movie();

    $movie->setMovie("Interstellar");
    $movie->getMovie();
    var_dump($movie);