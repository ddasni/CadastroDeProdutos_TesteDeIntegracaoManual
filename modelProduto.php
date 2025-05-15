<?php
include "conexao.php";

class modelProduto {
    public function inserir(Produto $produto) {

        $sql = "INSERT INTO produtos(nome, preco, descricao) VALUES (?, ?, ?)";
        $con = new Conexao();
        $bd = $con->pegarConexao();
        
        
        $stm = $bd->prepare($sql);
        $stm->bindValue(1, $produto->getNome());
        $stm->bindValue(2, $produto->getPreco());
        $stm->bindValue(3, $produto->getDescricao());
        $resultado = $stm->execute();

        echo $resultado ? "Produto cadastrado com sucesso." : "Erro ao cadastrar o produto.";
    }
}
?>
