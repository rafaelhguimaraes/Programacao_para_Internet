<?php

require "../conexaoMysql.php";
$pdo = mysqlConnect();

$nome = $_POST["nome"] ?? "";
$telefone = $_POST["telefone"] ?? "";

try {
  // NÃO FAÇA ISSO! 
  // Neste código, os dados recebidos do usuário são diretamente inseridos na instrução SQL.
  // Isso permite que um usuário maldosos modifique a estrutura da consulta ao enviar 
  // caracteres especiais que alterem o comportamento original, gerando um efeito indesejado.
  $sql = <<<SQL
  INSERT INTO aluno (nome, telefone)
  VALUES ('$nome', '$telefone');
  SQL;  

  $pdo->exec($sql);
  header("location: mostra-alunos.php");
  exit();
} 
catch (Exception $e) {  
  exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}
