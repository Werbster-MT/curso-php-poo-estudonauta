<?php 
    require_once "Animal.php";
    class Ave extends Animal {
        private $corPena;

        public function alimentar() {
            echo "<p>Comendo Sustâncias</p>";
        }

        public function emitirSom() {
            echo "<p>Peixe não faz som</p>";
        }

        public function locomover() {
            echo "<p>Voando</p>";
        }

        public function getCorPena() {
            return $this->corPena;
        }

        public function fazerNinho() {
            echo "<p>Construindo um Ninho</p>";
        }

        public function setCorPena($corPena) {
            $this->corPena = $corPena;
        }
    }
?>