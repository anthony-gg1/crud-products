# Copilot Instructions for CRUD de Produtos

## Visão Geral
Este projeto é um CRUD de produtos em PHP com MySQL, organizado para facilitar cadastro, listagem, edição e exclusão de produtos. O fluxo principal está em `pages/`, com cada arquivo PHP responsável por uma ação do CRUD.

## Estrutura e Fluxo
- **Banco de Dados:**
  - O script `db/exercicios.sql` cria o banco e a tabela de produtos. Todos os scripts PHP assumem conexão local padrão (ajuste usuário/senha conforme necessário).
- **Pages:**
  - `index.php`: Lista produtos e exibe ações.
  - `form.html`: Formulário de cadastro.
  - `inserir.php`: Recebe POST do formulário e insere no banco.
  - `edit.php`: Carrega dados do produto para edição.
  - `update.php`: Atualiza dados do produto no banco.
  - `delete.php`: Remove produto pelo ID.
- **Style:**
  - CSS modularizado em `style/` para formulários e listagem.
- **Imgs:**
  - Ícones e imagens de interface.

## Convenções e Padrões
- **Conexão com o banco:**
  - Normalmente feita no início de cada script PHP. Centralize em um arquivo separado se for refatorar.
- **Fluxo de dados:**
  - O padrão é: formulário HTML → script PHP → redirecionamento para `index.php`.
- **Mensagens e feedback:**
  - Não há sistema de flash messages; feedback é dado por redirecionamento ou reload.
- **URLs e Navegação:**
  - Todas as ações são feitas via links ou formulários em `index.php`.

## Exemplos de Padrão
- Para adicionar produto: POST para `inserir.php`.
- Para editar: GET em `edit.php?id=...`, depois POST para `update.php`.
- Para excluir: GET em `delete.php?id=...`.

## Dicas para Agentes
- Sempre valide dados recebidos do usuário.
- Mantenha a navegação simples e sem AJAX.
- Use os arquivos existentes como referência para novos endpoints ou páginas.
- Se criar novos scripts, siga o padrão de nomeação e fluxo dos arquivos em `pages/`.

## Referências
- Estrutura detalhada no `README.md`.
- Script SQL em `db/exercicios.sql`.
- Exemplos de uso e fluxo em `pages/index.php`.
