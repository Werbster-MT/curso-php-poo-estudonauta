<?php 
    require_once "Video.php";
    require_once "Gafanhoto.php";

    class Visualizacao {
        private $espectador;
        private $filme;

        public function __construct($espectador, $filme)
        {   
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }        

        public function avaliar() {
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota) {
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorc($porc) {
            $nova = 0;
            if ($porc <= 20) {
                $nova = 3;
            } elseif($porc <= 50) {
                $nova = 5;
            } elseif ($porc <= 90) {
                $nova = 10;
            }
            $this->filme->setAvaliacao($nova);
        }

        /**
         * Get the value of espectador
         */ 
        public function getEspectador()
        {
                return $this->espectador;
        }

        /**
         * Set the value of espectador
         *
         * @return  self
         */ 
        public function setEspectador($espectador)
        {
                $this->espectador = $espectador;

                return $this;
        }

        /**
         * Get the value of filme
         */ 
        public function getFilme()
        {
                return $this->filme;
        }

        /**
         * Set the value of filme
         *
         * @return  self
         */ 
        public function setFilme($filme)
        {
                $this->filme = $filme;

                return $this;
        }
    }
?>