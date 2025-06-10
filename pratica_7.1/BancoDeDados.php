<?php
    interface BancoDeDados {
        // Declaração dos métodos abstratos
        public function conectar($servidor);
        public function inserir();
        public function alterar();
    }