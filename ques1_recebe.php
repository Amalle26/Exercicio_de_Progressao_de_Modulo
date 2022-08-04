<?php

    $primeiroNumero = $_POST['primeiroNumero'];
    $segundoNumero = $_POST['segundoNumero'];
    $terceiroNumero = $_POST['terceiroNumero'];
    $quartoNumero = $_POST['quartoNumero'];
    $quintoNumero = $_POST['quintoNumero'];
    $sextoNumero = $_POST['sextoNumero'];
    $setimoNumero = $_POST['setimoNumero'];
    $oitavoNumero = $_POST['oitavoNumero'];
    $nonoNumero = $_POST['nonoNumero'];
    $decimoNumero = $_POST['decimoNumero'];

    $numeros = array($primeiroNumero,$segundoNumero,$terceiroNumero,$quartoNumero,$quintoNumero,$sextoNumero,$setimoNumero,$oitavoNumero,$nonoNumero,$decimoNumero);

    $soma =  array_sum($numeros);
    
    $media = $soma/count($numeros);

      
    echo "<h2>A Soma dos números é: ".$soma."</h2>";
    echo "<h2>A Média dos números é: ".$media."</h2>";


?>