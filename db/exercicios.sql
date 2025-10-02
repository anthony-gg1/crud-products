CREATE DATABASE exercicios;

USE exercicios;

CREATE TABLE produtos (
    cod INT PRIMARY KEY,
    nome_produto VARCHAR(50),
    preco DECIMAL (5,2),
    data DATE
);

INSERT INTO produtos VALUES (1, "chocolate", 5.50, "2028-12-12");
INSERT INTO produtos VALUES (2, "sabonete", 2.30, "2027-05-19");
INSERT INTO produtos VALUES (3, "feijao", 7.34, "2030-04-02");
INSERT INTO produtos VALUES (4, "shampoo", 8.99, "2032-10-29");
INSERT INTO produtos VALUES (5, "racao", 10.22, "2029-07-30");
INSERT INTO produtos VALUES (6, "arroz", 20.99, "2035-11-01");