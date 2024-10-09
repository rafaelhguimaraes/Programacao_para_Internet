<?php
$arquivo = "clientes.txt";
if (file_exists($arquivo)) {
    $clientes = file($arquivo);
} else {
    $clientes = [];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center">Lista de Clientes Cadastrados</h2>
    <table class="table table-bordered mt-4">
      <thead>
        <tr>
          <th>Nome Completo</th>
          <th>CPF</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th>Endereço</th>
        </tr>
      </thead>
      <tbody>
        <?php if (count($clientes) > 0): ?>
          <?php foreach ($clientes as $cliente): ?>
            <?php
              // Separando os dados do cliente
              list($nome, $cpf, $email, $telefone, $endereco) = explode(" | ", trim($cliente));
            ?>
            <tr>
              <td><?= htmlspecialchars($nome); ?></td>
              <td><?= htmlspecialchars($cpf); ?></td>
              <td><?= htmlspecialchars($email); ?></td>
              <td><?= htmlspecialchars($telefone); ?></td>
              <td><?= htmlspecialchars($endereco); ?></td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="5" class="text-center">Nenhum cliente cadastrado ainda.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
