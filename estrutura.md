# Estrutura Inicial do projecto

```
|-- 📂 client
|   |-- 📂 public
|   |   |-- index.html
|   |   |-- ...
|   |-- 📂 src
|   |   |-- 📂 assets
|   |   |   |-- 📂 imagens
|   |   |   |   |-- produto1.jpg
|   |   |   |   |-- produto2.jpg
|   |   |   |-- 📂 estilos
|   |   |       |-- estilos.css
|   |   |-- 📂 components
|   |   |   |-- BarraNavegacao.js
|   |   |   |-- Carrinho.js
|   |   |   |-- CatalogoProdutos.js
|   |   |   |-- Checkout.js
|   |   |   |-- ...
|   |   |-- 📂 context
|   |   |   |-- AutenticacaoContext.js
|   |   |   |-- CarrinhoContext.js
|   |   |-- 📂 pages
|   |   |   |-- PaginaAutenticacao.js
|   |   |   |-- PaginaCatalogo.js
|   |   |   |-- PaginaCarrinho.js
|   |   |   |-- PaginaCheckout.js
|   |   |   |-- ...
|   |   |-- App.js
|   |   |-- index.js
|   |   |-- theme.js
|-- 📂 server
|   |-- 📂 db
|   |   |-- config.php
|   |   |-- conexao.php
|   |   |-- esquema.sql
|   |-- 📂 endpoints
|   |   |-- autenticacao.php
|   |   |-- produtos.php
|   |   |-- pedidos.php
|   |-- 📂 middleware
|   |   |-- validacao.php
|   |-- 📂 utils
|   |   |-- resposta.php
|-- .gitignore
|-- README.md
|-- package.json
|-- ...

```


- **`public/`**: Armazena o arquivo `index.html` e outros assets públicos.
- **`src/`**: Contém o código-fonte do cliente.
    - **`assets/`**: Armazena imagens, estilos, e outros assets.
    - **`components/`**: Componentes reutilizáveis da aplicação.
    - **`context/`**: Contextos do React para gerenciar estados globais.
    - **`pages/`**: Componentes que representam páginas da aplicação.
    - **`App.js`**: Componente principal que organiza as rotas e layout da aplicação.
    - **`index.js`**: Ponto de entrada da aplicação React.
    - **`theme.js`**: Definições de tema para estilos globais.
    - **`database/`**: Contém o código do lado do servidor, desenvolvido em PHP.
    - **`db/`**: Configuração e scripts SQL para a base de dados.
    - **`endpoints/`**: Scripts PHP que servem como endpoints da API.
    - **`middleware/`**: Middleware para validação, autenticação, etc.
    - **`utils/`**: Utilitários PHP reutilizáveis.

- **`.gitignore`**: Lista de arquivos e pastas a serem ignorados pelo Git.
- **`README.md`**: Documentação principal do projeto.
- **`package.json`**: Arquivo de configuração do Node.js para o lado do cliente.

Esta é uma estrutura inicial e pode ser ajustada com base nas necessidades específicas do projeto. Certifique-se de adaptar conforme o desenvolvimento avança e novas necessidades surgem.