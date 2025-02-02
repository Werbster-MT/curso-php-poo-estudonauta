<?php 
    class ContaBanco {
        // Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Métodos
        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            }
            elseif ($t == "CP") {
                $this->saldo = 150;
            }
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "<p>Conta ainda tem dinheiro, não posso fecha-lá!</p>";
            } elseif ($this->getSaldo() < 0) {
                echo "<p>Conta está em débito. Impossível encerrar!</p>";
            } else {
                $this->setStatus(false);
                echo "<p>Conta de {$this->getDono()} fechada com sucesso!</p>";
            }
        }

        public function depositar($v) {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de R\$ $v na conta de {$this->getDono()}</p>";
            }else {
                echo "<p>Conta fechada. Não consigo depositar.</p>";
            }
        }

        public function sacar($v) {
            if ($this->getStatus()){
                if ($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R\$ $v autorizado na conta {$this->getDono()}</p>";
                }else {
                    echo "<p>Saldo insuficiente para saque.</p>";
                }
            }else {
                echo "<p>Não posso sacar de uma conta fechada</p>";
            }
        }

        public function pagarMensal() {
            if ($this->getTipo() == "CC") {
                $v = 12;
            }elseif ($this->getTipo() == "CP") {
                $v = 20;
            }
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R\$ $v debitada na conta de {$this->getDono()}</p>";
            }else {
                echo "<p>Problemas com a conta não posso cobrar.</p>";
            }
        }

        // Métodos Especiais
        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(true);
            echo "<p>Conta criada com sucesso!</p>";
        }

        public function getNumConta() {
            return $this->numConta;
        }

        public function setNumConta($n) {
            $this->numConta = $n;
        }

        public function getTipo() {
            return $this->tipo;
        }
    
        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }
        
        public function getDono() {
            return $this->dono;
        }
    
        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function getSaldo() {
            return $this->saldo;
        }
    
        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }
    
        public function getStatus() {
            return $this->status;
        }
    
        public function setStatus($status) {
            $this->status = $status;
        }
    }
?>