<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Gera o hash da senha
    $hashSenha = password_hash($senha, PASSWORD_DEFAULT);

    // Abre o arquivo usuarios.txt e salva o email e o hash da senha
    $arquivo = fopen('usuarios.txt', 'a');
    fwrite($arquivo, $email . '|' . $hashSenha . "\n");
    fclose($arquivo);

    // Redireciona para a página principal
    header('Location: index.html');
    exit();
}
?>
