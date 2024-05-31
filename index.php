<?php
    include_once __DIR__ . '/Models/movie.php';

    $movie = new Movie();

    // Titolo
    $movie->setMovie("Interstellar");
    $movie->getMovie();

    // Anno rilascio
    $movie->setReleaseYear("2014");
    $movie->getReleaseYear();

    // Genere
    $movie->setGenere("Sci-fi/Avventura");
    $movie->getGenere();

    // Durata
    $movie->setRunningTime(149.4);
    $movie->getRunningTime();

    // Stampa
    var_dump($movie);