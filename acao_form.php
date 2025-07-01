<?php
    require "ContaCorrente.php";
    require "ContaEspecial.php";

    // Receber os dados do form
    $agencia = $_POST['agencia'];
    $conta = $_POST['conta'];
    $nome = $_POST['nome'];
    $saldo = $_POST['saldo'];

    // Instanciar o objeto da classe ContaEspecial
    $minhaConta = new ContaEspecial($agencia, $conta, $nome, $saldo);
    $minhaConta->imprimir();