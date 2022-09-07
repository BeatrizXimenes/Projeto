<?php include("cabecalho.php"); ?>

    <?php
    
    $nome = $_GET["nome"];
    $sobreno = $_GET["sobrenome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    
    $query = "insert into registro (nome, sobrenome, email, senha) values ('{$nome}', '{$sobreno}', '{$email}', '{$senha}')";
    
    $conexao = mysqli_connect('localhost', 'root', '', 'teste');

    if(mysqli_query($conexao, $query)) {
    ?>
        <p class="alert-success">
            Produto: <?= $nome; ?>, preco: <?= $senha; ?> - adicionado com sucesso!
        </p>
    <?php
    } else {    /* socorro */
    ?>
        <p class="alert-danger">
            ERRO - O produto não foi adicionado! 
        </p>
    <?php
    } 
    ?>
    <?php

        if(mysqli_query($conexao, $query) == ($nome && $sobreno && $email && $senha))


    ?>