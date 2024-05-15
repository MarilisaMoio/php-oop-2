<?php 
    class Categories {
        public $animal;
        public $icon;

        public function __construct($_animal){
            $this->animal = $_animal;

            $this->animal === "Gatto" ? $this->icon = 'fa-solid fa-cat' : $this->icon = 'fa-solid fa-dog';
        }
    }
?>