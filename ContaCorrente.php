<?php
    class ContaCorrente {
        protected $agencia;
        protected $conta;
        protected $nome;
        protected $saldo;

        public function __construct($agencia, $conta, $nome, $saldo) {
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->nome = $nome;
            $this->saldo = $saldo;
        }

        public function sacar($valor) {
            if($valor <= $this->saldo) 
                $this->saldo -= $valor;  
            else 
                echo "<p>Não é possível retirar. Saldo insuficiente.";
        }

        public function imprimir() {
            echo "<p>Agencia: " . $this->agencia;
            echo "<p>Conta: " . $this->conta;
            echo "<p>Nome: " . $this->nome;
            echo "<p>Saldo: " . $this->saldo;
        }
    }