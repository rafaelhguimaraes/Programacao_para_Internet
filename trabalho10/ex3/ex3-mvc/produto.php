class Produto {
    public $id;
    public $nome;
    public $marca;
    public $descricao;

    public function __construct($nome, $marca, $descricao) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->descricao = $descricao;
    }

    public static function all() {
        $lista = [];
        $conexao = Conexao::getConexao();
        $sql = 'SELECT * FROM produtos';
        foreach ($conexao->query($sql) as $row) {
            $lista[] = new Produto($row['nome'], $row['marca'], $row['descricao']);
        }
        return $lista;
    }

    public function save() {
        $conexao = Conexao::getConexao();
        $sql = "INSERT INTO produtos (nome, marca, descricao) VALUES (:nome, :marca, :descricao)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':marca', $this->marca);
        $stmt->bindValue(':descricao', $this->descricao);
        $stmt->execute();
    }
}
