<?php 
    class movie{
        private string $title;
        public string $release_year;
        public string $genere;
        public float $running_time;

        function __construct(string $title){
            $this->title = $title;
        }
    }