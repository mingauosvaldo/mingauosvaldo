<?php
    class PostgreSQL implements BancoDeDados {
        public function conectar($servidor) {
            echo "<p>Conexão realizada no PostgreSQL. Servidor: " . $servidor;
        }

        public function inserir() {
            echo "<p>Linha inserida no PostgreSQL.";
        }

        public function alterar() {
            echo "<p>Registro alterado no PostgreSQL.";
        }
    }