<?php

require "../conexaoMysql.php";
$pdo = mysqlConnect();

$nome = $_POST["nome"] ?? "";
$telefone = $_POST["telefone"] ?? "";

try {
  // CÓDIGO CORRIGIDO USANDO PREPARED STATEMENTS
  $sql = <<<SQL
  INSERT INTO aluno (nome, telefone)
  VALUES (?, ?);
  SQL;

  $stmt = $pdo->prepare($sql);
  $stmt->execute([$nome, $telefone]);

  header("location: mostra-alunos.php");
  exit();
} 
catch (Exception $e) {  
  exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}
