<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    $senhacript = md5($senha);

    include "C_conexao_WEB_SQL.php";

    mysqli_query($con, "INSERT INTO usuarios (nome, email, senha, cpf) VALUES ('$nome', '$email', '$senhacript', '$cpf')");

?>
