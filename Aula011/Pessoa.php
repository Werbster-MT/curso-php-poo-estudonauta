<?php 

    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;

        public final function fazerAniversario() {
            $this->idade ++;
        }

        function getNome() {
            return $this->nome;
        }

        function getIdade() {
            return $this->idade;
        }

        function getSexo() {
            return $this->sexo;
        }
        
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }


    }
?>