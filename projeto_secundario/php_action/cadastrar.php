<?php
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])) {
    $nome      = mysqli_real_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($connect, $_POST['sobrenome']);
    $email     = mysqli_real_escape_string($connect, $_POST['email']);
    $senha     = mysqli_real_escape_string($connect, $_POST['senha']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, senha) 
            VALUES ('$nome', '$sobrenome', '$email', '$senha')";

    if (mysqli_query($connect, $sql)) {
        header('Location: ../index.php?sucesso');
        exit();
    } else {
        header('Location: ../index.php?erro');
        exit();
    }
}
?>
