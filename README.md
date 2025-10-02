# CRUD de Produtos

Este projeto é um sistema simples de cadastro de produtos (CRUD) desenvolvido em PHP, utilizando MySQL como banco de dados. Permite cadastrar, listar, editar e excluir produtos.

## Funcionalidades

- **Listar produtos:** Exibe todos os produtos cadastrados.
- **Adicionar produto:** Formulário para inserir novos produtos.
- **Editar produto:** Atualiza informações de um produto existente.
- **Excluir produto:** Remove um produto do banco de dados.

## Estrutura do Projeto

- `pages/`
  - `index.php` — Página principal, lista os produtos.
  - `form.html` — Formulário para cadastro de produtos.
  - `inserir.php` — Insere um novo produto no banco.
  - `edit.php` — Formulário para editar um produto.
  - `update.php` — Atualiza os dados do produto.
  - `delete.php` — Exclui um produto.
- `db/exercicios.sql` — Script para criar o banco de dados e a tabela de produtos.
- `style/` — Arquivos CSS para estilização.
- `imgs/` — Imagens utilizadas no projeto.

## Como executar

1. **Banco de Dados**
   - Importe o arquivo `db/exercicios.sql` no seu MySQL para criar o banco e a tabela.
   - Certifique-se de que o usuário, senha e porta do banco estão corretos nos arquivos PHP.

2. **Servidor**
   - Coloque a pasta do projeto em um servidor local (ex: XAMPP, WAMP).
   - Acesse `pages/index.php` pelo navegador.

## Exemplo de uso

- Clique em "Adicionar Produto a Tabela" para cadastrar um novo produto.
- Use os botões de "Atualizar" ou o ícone de lixeira para editar ou excluir produtos.