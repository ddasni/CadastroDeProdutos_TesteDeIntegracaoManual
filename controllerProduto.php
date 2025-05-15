<?php
include ("Produto.php");
include ("modelProduto.php");

$nome = filter_input(INPUT_GET, "nome");
$preco = filter_input(INPUT_GET, "preco");
$descricao = filter_input(INPUT_GET, "descricao");


$produto = new Produto();
$produto->setNome($nome);
$produto->setPreco($preco);
$produto->setDescricao($descricao);

$modelProduto = new modelProduto();
$modelProduto->inserir($produto);
?>
