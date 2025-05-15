<?php
include "conexao.php";

class modelProduto {
    public function inserir(Produto $produto) {

        // verificação dos dados, se possui dados obrigatorios e se o valor não é negativo
        if (!$produto->getNome() || !$produto->getDescricao() || $produto->getPreco() <= 0) {

            echo "Dados inválidos.";

            return;
        }

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
