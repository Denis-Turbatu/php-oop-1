<?php

    class Actor{
        private string $actor_name;
        private string $actor_surname;
        private string $birth_date;

        /* ------------- ACTOR NAME ------------- */
        // impostiamo il nome del attore
        public function setActorName(string $actor_name){
            $this->actor_name = $actor_name;
        }
        // prendiamo il nome del attore
        public function getActorName(){
            return $this->actor_name;
        }

        /* ------------- ACTOR SURNAME ------------- */
        // impostiamo il cognome del attore
        public function setActorSurname(string $actor_surname){
            $this->actor_surname = $actor_surname;
        }
        // prendiamo il cognome del attore
        public function getActorSurname(){
            return $this->actor_surname;
        }

        /* ------------- TITLE ------------- */
        // impostiamo la data di nascita del attore
        public function setBirthDate(string $birth_date){
            $this->birth_date = $birth_date;
        }
        // prendiamo il nome del film
        public function getBirthDate(){
            return $this->birth_date;
        }
    }