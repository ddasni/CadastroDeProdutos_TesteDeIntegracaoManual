CREATE DATABASE IF NOT EXISTS testes;
USE testes;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL CHECK (preco > 0),
    descricao TEXT NOT NULL
);
    
select * from produtos;