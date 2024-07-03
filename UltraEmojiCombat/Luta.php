<?php 
    require_once "Lutador.php";

    class Luta {
        // Atributos 
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        // Métodos Públicos
        public function marcarLuta($l1, $l2) {
            if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            } else {
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        public function lutar() {
            if ($this->aprovada) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = mt_rand(0, 2);

                switch ($vencedor) {
                    case 0:
                        echo "<p>Empate!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    
                    case 1: 
                        echo "<p>{$this->desafiado->getNome()} venceu</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    
                    case 2:
                        echo "<p>{$this->desafiante->getNome()} venceu</p>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                }

            } else {
                echo "<p>Luta não pode acontecer</p>";
            }
        }

        // Métodos Especiais
        public function getDesafiado()
        {
                return $this->desafiado;
        }

        public function setDesafiado($desafiado)
        {
                $this->desafiado = $desafiado;

                return $this;
        }

        public function getDesafiante()
        {
                return $this->desafiante;
        }

        public function setDesafiante($desafiante)
        {
                $this->desafiante = $desafiante;

                return $this;
        }

        public function getRounds()
        {
                return $this->rounds;
        }

        public function setRounds($rounds)
        {
                $this->rounds = $rounds;

                return $this;
        }

        public function getAprovada()
        {
                return $this->aprovada;
        }

        public function setAprovada($aprovada)
        {
                $this->aprovada = $aprovada;

                return $this;
        }
    }

?>