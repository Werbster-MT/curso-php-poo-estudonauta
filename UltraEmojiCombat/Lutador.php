<?php 
    class Lutador{
        // Atributos
        private $nome; 
        private $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria, $vitoria, $derrotas, $empates;
         
        // Métodos
        function apresentar () {
            echo "<p>----------------------</p>";
            echo "<p>CHEGOU A HORA! O lutador " .$this->getNome();
            echo ", veio diretamente de " .$this->getNacionalidade();
            echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg";
            echo "<br/>Ele tem " .$this-> getVitorias() . " vitórias";
            echo $this->getDerrotas() . " derrotas e " .$this->getEmpates() . " empates</p>";
        }

        function status () {
            echo "<p>----------------------</p>";
            echo "{$this->getNome()} é um peso {$this->getCategoria()}"; 
            echo " e já ganhou {$this->getVitorias()} vezes";
            echo " perdeu {$this->getDerrotas()} vezes e ";
            echo " empatou {$this->getEmpates()} vezes.";
        }

        function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        // Métodos Especiais
        function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso);
            $this->vitorias = $vitorias; 
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }
        
        // Métodos Getters
        public function getNome() {
            return $this->nome;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function getVitorias() {
            return $this->vitorias;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }

        public function getEmpates() {
            return $this->empates;
        }

        // Métodos Setters
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }

        public function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria(); // Atualiza a categoria ao modificar o peso
        }

        private function setCategoria() {
            // Implementação para definir a categoria baseada no peso
            // Exemplo simplificado:
            if ($this->peso < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9) {
                $this->categoria = "Médio";    
            } elseif ($this->peso <= 120.2) {
                $this->categoria = "Peso Pesado";
            }
            else {
                $this->categoria = "Inválido";
            }
        }

        public function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }

        public function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }

        public function setEmpates($empates) {
            $this->empates = $empates;
        } // Métodos Getters
    }
?>