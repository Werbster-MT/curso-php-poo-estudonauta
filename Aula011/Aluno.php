<?php 
    require_once "Pessoa.php";
    class ALuno extends Pessoa {
        private $matricula;
        private $curso;

        public function pagarMensalidade() {
            echo "<p>Pagando mensalidade do aluno {$this->getNome()}</p>";
        }

        public function getMatricula() {
            return $this->matricula;
        }

        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }

        public function getCurso() {
            return $this->curso;
        }

        public function setCurso($curso) {
            $this->curso = $curso;
        }
    }
?>