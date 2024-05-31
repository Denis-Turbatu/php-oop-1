<?php 
    class Movie{
        private string $title;
        private string $release_year;
        private string $genere;
        private float $running_time;

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
        // impostiamo il nome del film
        public function setGenere(string $genere){
            $this->genere = $genere;
        }
        // prendiamo il nome del film
        public function getGenere(){
            return $this->genere;
        }

        /* ------------- RUNNING TIME ------------- */
        // impostiamo il nome del film
        public function setRunningTime(string $running_time){
            $this->running_time = $running_time;
        }
        // prendiamo il nome del film
        public function getRunningTime(){
            return $this->running_time;
        }
    }