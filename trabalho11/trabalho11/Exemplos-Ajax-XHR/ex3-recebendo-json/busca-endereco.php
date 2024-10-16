<?php

// Define a classe Endereco com propriedades para rua, bairro e cidade
class Endereco
{
  public $rua;      // Propriedade para armazenar a rua
  public $bairro;   // Propriedade para armazenar o bairro
  public $cidade;   // Propriedade para armazenar a cidade

  // Construtor da classe que inicializa as propriedades
  function __construct($rua, $bairro, $cidade)
  {
    $this->rua = $rua;        // Inicializa a propriedade rua
    $this->bairro = $bairro;  // Inicializa a propriedade bairro
    $this->cidade = $cidade;  // Inicializa a propriedade cidade
  }
}

// Obtém o valor do CEP da query string. Se não estiver definido, usa uma string vazia.
$cep = $_GET['cep'] ?? '';

// Verifica o valor do CEP e cria um novo objeto Endereco com base no CEP fornecido
if ($cep == '38400-100')
  $endereco = new Endereco('Av Floriano', 'Centro', 'Uberlândia'); // Dados para o CEP 38400-100
else if ($cep == '38400-200')
  $endereco = new Endereco('Rua Tiradentes', 'Fundinho', 'Uberlândia'); // Dados para o CEP 38400-200
else {
  // Se o CEP não corresponder a nenhum caso, cria um objeto Endereco vazio
  $endereco = new Endereco('', '', '');
}

// Define o cabeçalho da resposta como JSON
header('Content-type: application/json');

// Converte o objeto Endereco em uma string JSON e envia a resposta
echo json_encode($endereco);
