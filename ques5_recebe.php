<?php 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $emailPadrao = "admin@email.com";
    $senhaPadrão = 123456;

    if($email != $emailPadrao && $senha == $senhaPadrão){
        echo "<h3>Você errou seu email!</h3>";
    }if ($email == $emailPadrao && $senha != $senhaPadrão){
        echo "<h3>Você errou sua senha!</h3";
    }if($email != $emailPadrao && $senha != $senhaPadrão){
        echo "<h3>Email não cadastrado!</h3";
    }if($email == $emailPadrao && $senha == $senhaPadrão){
        echo "<h3>Você entrou na conta!</h3";
    }

?>