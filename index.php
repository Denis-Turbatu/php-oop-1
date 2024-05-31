<?php
    include_once __DIR__ . '/objects/movie.php';

    $movie = new movie();
    var_dump($movie);

    $movie -> setMovieTitle("Interstellar");
    var_dump($movie);