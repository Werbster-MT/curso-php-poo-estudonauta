<?php 
    require_once "Aluno.php";

    class Bolsista extends Aluno {
        private $bolsa;

        public function renovarBolsa() {
            echo "<p>Bolsa será renovada</p>";
        }

        public function pagarMensalidade() {
            echo "<p>{$this->nome} é bolsista! Então paga com desconto!</p>";
        }
       
        public function getBolsa() {
            return $this->bolsa;
        }

        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }
    }
?>