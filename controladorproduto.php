<?php
include "Produto.php";
include "modelProduto.php";

$nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_GET, "preco", FILTER_VALIDATE_FLOAT);
$descricao = filter_input(INPUT_GET, "descricao", FILTER_SANITIZE_STRING);

if (!$nome || !$descricao || !$preco || $preco <= 0) {
    echo "Preencha todos os campos corretamente.";
    exit;
}

$produto = new Produto();
$produto->setNome($nome);
$produto->setPreco($preco);
$produto->setDescricao($descricao);

$model = new modelProduto();
$model->inserir($produto);
?>
