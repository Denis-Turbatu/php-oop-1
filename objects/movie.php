<?php 
    class movie{
        private string $title;
        public string $release_year;
        public string $genere;
        public float $running_time;

        public function setMovie(string $title){
            $this->title = $title;
        }

        public function getMovie(){
            return $this->title;
        }
    }