<?php
    // Incluir os arquivos da interface e classes
    require "BancoDeDados.php";
    require "MySQL.php";
    require "PostgreSQL.php";

    // Instanciar um objeto do banco de dados
    $meuBanco = new PostgreSQL();
    $meuBanco->conectar("localhost");
    $meuBanco->inserir();
    $meuBanco->alterar();