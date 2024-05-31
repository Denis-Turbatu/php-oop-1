<?php 
    class Movie{
        private string $title;
        private string $release_year;
        private Genere $genere;
        private int $running_time;
        private Actor $actor;

        /* ------------- TITLE ------------- */
        // impostiamo il nome del film
        public function setMovie(string $title){
            $this->title = $title;
        }
        // prendiamo il nome del film
        public function getMovie(){
            return $this->title;
        }

        /* ------------- RELEASE YEAR ------------- */
        // impostiamo l'anno di rilascio del film
        public function setReleaseYear(string $release_year){
            $this->release_year = $release_year;
        }
        // prendiamo l'anno di rilascio del film
        public function getReleaseYear(){
            return $this->release_year;
        }

        /* ------------- GENERE ------------- */
        // impostiamo il genere del film
        public function setGenere(Genere $genere){
            $this->genere = $genere;
        }
        // prendiamo il genere del film
        public function getGenere(){
            return $this->genere;
        }

        /* ------------- RUNNING TIME ------------- */
        // impostiamo la durata del film
        public function setRunningTime(int $running_time){
            $this->running_time = $running_time;
        }
        // prendiamo la durata del film
        public function getRunningTime(){
            return $this->running_time / 60 . ' ore';
        }

        /* ------------- ACTOR ------------- */
        // impostiamo le caratterstiche del attore
        public function setActor(Actor $actor){
            $this->actor = $actor;
        }
        // prendiamo le caratterstiche del attore
        public function getActor(){
            return $this->actor;
        }
    }