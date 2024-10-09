<?php
class ProdutoController {
    public function index() {
        $produtos = Produto::all();
        require_once('views/produto/index.php');
    }

    public function create() {
        require_once('views/produto/create.php');
    }

    public function store() {
        $produto = new Produto($_POST['nome'], $_POST['marca'], $_POST['descricao']);
        $produto->save();
        header('Location: ?controller=produto&action=index');
    }
}
?>
