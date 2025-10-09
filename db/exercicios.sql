CREATE DATABASE exercicios;

USE exercicios;

CREATE TABLE produtos (
    cod INT PRIMARY KEY,
    nome_produto VARCHAR(50),
    preco DECIMAL (5,2),
    data DATE,
    foto VARCHAR(100)
);

INSERT INTO produtos VALUES 
(1, "chocolate", 5.50, "2028-12-12"),
(2, "sabonete", 2.30, "2027-05-19"),
(3, "feijao", 7.34, "2030-04-02"),
(4, "shampoo", 8.99, "2032-10-29"),
(5, "racao", 10.22, "2029-07-30"),
(6, "arroz", 20.99, "2035-11-01");

SELECT * FROM produtos;