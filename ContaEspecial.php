<?php
    class ContaEspecial extends ContaCorrente {
        private $limite;

        public function __construct($agencia, $conta, $nome, $saldo) {
            parent::__construct($agencia, $conta, $nome, $saldo);
            $this->limite = 1000;
        }

        public function sacar($valor) {
            if($valor <= $this->saldo + $this->limite) 
                $this->saldo -= $valor;  
            else 
                echo "<p>Não é possível retirar. Limite insuficiente.";
        }

        public function imprimir() {
            parent::imprimir();
            echo "<p>Limite: " . $this->limite;
        }
    }