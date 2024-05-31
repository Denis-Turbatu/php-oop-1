<?php
    include_once __DIR__ . '/Models/movie.php';
    include_once __DIR__ . '/Models/genere.php';

    $movie = new Movie();
    $genere_tag = new Genere();

    /* ---------- FILM N. #1 ---------- */
    /* ----- GENERE ----- */
    // Nome del genere
    $genere_tag->setName("Sci-fi/Avventura");
    $genere_tag->getName();

    // Tag #1 & #2
    $genere_tag->setTag(["#Sci-fi", "#Avventura", "#Spazio", "#Christopher-Nolan"]);
    $genere_tag->getTag();


    /* ----- MOVIE ----- */
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
    $movie->setRunningTime(149);
    $movie->getRunningTime();



    /* ---------- FILM N. #2 ---------- */
    $movie1 = new Movie();
    $genere_tag1 = new Genere();
    /* ----- GENERE ----- */
    // Nome del genere
    $genere_tag1->setName("Azione");
    $genere_tag1->getName();

    // Tag #1 & #2
    $genere_tag1->setTag(["#Azione", "#Guy Fawkes"]);
    $genere_tag1->getTag();


    /* ----- MOVIE ----- */
    // Titolo
    $movie1->setMovie("V per Vendetta");
    $movie1->getMovie();

    // Anno rilascio
    $movie1->setReleaseYear("2005");
    $movie1->getReleaseYear();

    // Genere
    $movie1->setGenere($genere_tag1);
    $movie1->getGenere();

    // Durata
    $movie1->setRunningTime(142);
    $movie1->getRunningTime();


    /* ---------- FILM N. #3 ---------- */
    $movie2 = new Movie();
    $genere_tag2 = new Genere();
    /* ----- GENERE ----- */
    // Nome del genere
    $genere_tag2->setName("Giallo/Commedia");
    $genere_tag2->getName();

    // Tag #1 & #2
    $genere_tag2->setTag(["#Giallo", "#Commedia", "#Steven-Spielberg", "#Leonardo-DiCaprio"]);
    $genere_tag2->getTag();


    /* ----- MOVIE ----- */
    // Titolo
    $movie2->setMovie("Catch me if you can");
    $movie2->getMovie();

    // Anno rilascio
    $movie2->setReleaseYear("2002");
    $movie2->getReleaseYear();

    // Genere
    $movie2->setGenere($genere_tag2);
    $movie2->getGenere();

    // Durata
    $movie2->setRunningTime(161);
    $movie2->getRunningTime();




    // Stampa
    var_dump($movie, $movie->getRunningTime());
    ?><hr><?php
    var_dump($movie1, $movie1->getRunningTime());
    ?><hr><?php
    var_dump($movie2, $movie2->getRunningTime());
    ?>