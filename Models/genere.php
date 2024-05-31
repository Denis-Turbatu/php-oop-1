<?php 

    class Genere{
        private string $name;
        private array $tag;

        /* ------------- NAME ------------- */
        // impostiamo il nome del genere
        public function setName(string $name){
            $this->name = $name;
        }
        // prendiamo il nome del genere
        public function getName(){
            return $this->name;
        }

        /* ------------- TAG ------------- */
        // impostiamo il/i tag del film
        public function setTag(array $tag){
            $this->tag = $tag;
        }
        // prendiamo il/i tag del film
        public function getTag(){
            return $this->tag;
        }
    }