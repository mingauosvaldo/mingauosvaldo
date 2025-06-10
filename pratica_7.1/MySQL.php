<?php
    class MySQL implements BancoDeDados {
        public function conectar($servidor) {
            echo "<p>Conexão realizada no MySQL. Servidor: " . $servidor;
        }

        public function inserir() {
            echo "<p>Linha inserida no MySQL.";
        }

        public function alterar() {
            echo "<p>Registro alterado no MySQL.";
        }
    }