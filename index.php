<?php
    require "ContaCorrente.php";
    require "ContaEspecial.php";

    $minhaConta = new ContaEspecial("100","100-1","Manoel",500);
    $minhaConta->imprimir();
    $minhaConta->sacar(1000);
    $minhaConta->imprimir();