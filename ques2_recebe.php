<?php

    $primeiroNumero = $_POST['primeiroNumero'];
    $segundoNumero = $_POST['segundoNumero'];


    $soma = $primeiroNumero + $segundoNumero;
    
    $subtracao = $primeiroNumero - $segundoNumero;

    $mult = $primeiroNumero * $segundoNumero;

    $dvisao = $primeiroNumero / $segundoNumero;

    echo "<h3>A Soma dos números: ".$soma."</h3>";
    echo "<h3>A Subtração dos números é: ".$subtracao."</h3>";
    echo "<h3>A Multiplicação dos números é: ",$mult."</h3>";
    echo "<h3>A Divisão dos números é: ". $dvisao."</h3>";


?>