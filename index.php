<?php
    include_once __DIR__ . '/Models/movie.php';
    include_once __DIR__ . '/Models/genere.php';

    $movie = new Movie();
    $genere_tag = new Genere();

    /* ---------- GENERE ---------- */
    // Nome del genere
    $genere_tag->setName("Sci-fi/Avventura");
    $genere_tag->getName();

// Tag #1 & #2
    $genere_tag->setTag(["#Sci-fi", "#Avventura", "#Spazio", "#Christopher-Nolan"]);
    $genere_tag->getTag();


    /* ---------- MOVIE ---------- */
    // Titolo
    $movie->setMovie("Interstellar");
    $movie->getMovie();

    // Anno rilascio
    $movie->setReleaseYear("2014");
    $movie->getReleaseYear();

    // Genere
    $movie->setGenere($genere_tag);
    $movie->getGenere();

    // Durata
    $movie->setRunningTime(149.4);
    $movie->getRunningTime();

    // Stampa
    var_dump($movie);