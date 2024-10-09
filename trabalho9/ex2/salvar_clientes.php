<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeCompleto = htmlspecialchars($_POST['nomeCompleto']);
    $cpf = htmlspecialchars($_POST['cpf']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $endereco = htmlspecialchars($_POST['endereco']);

    $cliente = "$nomeCompleto | $cpf | $email | $telefone | $endereco" . PHP_EOL;

    $arquivo = fopen("clientes.txt", "a"); 
    if ($arquivo) {
        fwrite($arquivo, $cliente);
        fclose($arquivo);
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao salvar os dados!";
    }
}
?>
