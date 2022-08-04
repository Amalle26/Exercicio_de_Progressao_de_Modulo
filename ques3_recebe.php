<?php

    $nome = $_POST['nome'];
    $dtnasc = $_POST['dtnasc'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo "<h1>Olá ".$nome."!</h1>";
    echo "<h2>Seus dados cadastrados: </h2>";
    echo "<h2>CPF: ".$cpf."</h2>";
    echo "<h2>Data de Nascimento: ".$dtnasc."</h2>";
    echo "<h2>Telefone: ".$telefone."</h2>";
    echo "<h2>Email: ".$email."</h2>";
    echo "<h2>Senha: ".$senha."</h2>";


?>