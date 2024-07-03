<?php 
    require_once "Pessoa.php";
    require_once "Publicacao.php";

    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;
        
        public function detalhes() {
            echo "<p>Livro {$this->titulo} escrito por {$this->autor}";
            echo "<br/>Páginas: {$this->totPaginas} atual {$this->getPagAtual()}";
            echo "<br/>Sendo lido por {$this->leitor->getNome()}";
        }

        public function __construct($titulo, $autor, $totPaginas, $leitor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->setAberto(false);
            $this->setPagAtual(0);
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
        }

        // Métodos Getters e Setters
        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getAutor(){
            return $this->autor;
        }
 
        public function setAutor($autor){
            $this->autor = $autor;
        }

        public function getTotPaginas(){
            return $this->totPaginas;
        }

        public function setTotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }

        public function getPagAtual(){
            return $this->pagAtual;
        }

        public function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }

        public function getAberto(){
            return $this->aberto;
        }

        public function setAberto($aberto){
            $this->aberto = $aberto;
        }
        
        public function getLeitor(){
            return $this->leitor;
        }

        public function setLeitor($leitor){
            $this->leitor = $leitor;
        }
        
        // Métodos Especiais
        public function abrir() {
            $this->aberto = true;
        }
        
        public function avancarPag() {
            $this->setPagAtual($this->getPagAtual() + 1);
        }

        public function fechar() {
            $this->aberto = false;
        }

        public function folhear($p) {
            if ($p > $this->getTotPaginas()) {
                $this->pagAtual = 0;
            } else {
                $this-> setPagAtual($p);
            }
        }
        
        public function voltarPag() {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }
?>