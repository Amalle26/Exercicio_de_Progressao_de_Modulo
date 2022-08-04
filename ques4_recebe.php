<?php

    $primeiroLado = $_POST['primeiroLado'];
    $segundoLado = $_POST['segundoLado'];
    $terceiroLado = $_POST['terceiroLado'];


    if($primeiroLado == $segundoLado && $primeiroLado == $terceiroLado && $segundoLado == $terceiroLado){
        echo "<h3>É um trângulo Equilátero</h3>";
    }if ( ($primeiroLado == $segundoLado && $primeiroLado != $terceiroLado) || ($segundoLado == $terceiroLado && $terceiroLado != $primeiroLado)) {
        echo "<h3>É um trângulo Isóceles</h3>";
    }if($primeiroLado != $segundoLado && $primeiroLado != $terceiroLado && $segundoLado != $terceiroLado) {
        echo "<h3>É um trângulo Escaleno</h3>";
    }
    

?>