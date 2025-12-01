# 🗺️ Guia Turístico JP - João Pessoa

## Projeto Base para a Disciplina de Desenvolvimento de Sites

Um sistema web simples desenvolvido como projeto base para a disciplina de Desenvolvimento de Sites. O objetivo é fornecer um guia interativo para a cidade de João Pessoa (JP), Paraíba, abrangendo as principais categorias turísticas.

-----

## 🚀 Tecnologias Utilizadas


  * **Front-end:**
      * `HTML5`: Estrutura das páginas de conteúdo.
      * `CSS3`: Estilização e design responsivo.
      * `JavaScript`: Interatividade e funcionalidades do lado do cliente.
      * `Tailwind CSS`: Framework CSS utilitário de alto desempenho. Utilizado para criar o design responsivo de forma rápida e eficiente.
        
  * **Back-end:**
      * `PHP`: Lógica de servidor, manipulação de sessão e conexão com o banco de dados.

-----


## 📂 Estrutura do Projeto

A organização dos diretórios e arquivos foi planejada para separar os diferentes tipos de recursos do guia.

```
GuiaTuristicoJP/
├── images/               # Pasta de imagens genéricas
├── imggastronomia/       # Imagens para a seção de Gastronomia
├── imghospedagem/        # Imagens para a seção de Hospedagem
├── imgpontos/            # Imagens para a seção de Pontos Turísticos
├── imgpraias/            # Imagens para a seção de Praias
├── conexao.php           # Configuração de conexão com o Banco de Dados (DB)
├── index.php             # Página de login
├── gastronomia.html      # Página dedicada à Gastronomia
├── hospedagem.html       # Página dedicada à Hospedagem
├── pontos_turisticos.html# Página dedicada aos Pontos Turísticos
├── praias.html           # Página dedicada às Praias
├── painel.php            # Página principal do site (home)
├── protect.php           # Lógica PHP para proteger páginas restritas
├── register.php          # Formulário de registro de novos usuários
├── logout.php            # Lógica para finalizar a sessão do usuário
├── scripts.js            # Arquivo principal de scripts JavaScript
├── style.css             # Estilos CSS gerais do projeto
└── style_login.css       # Estilos CSS específicos para as telas de login/registro
```

-----

## 🛠️ Instalação e Configuração

Para executar o projeto localmente, você precisará de um ambiente de desenvolvimento que suporte PHP e MySQL.
Recomendado que use o WAMP server.

### Pré-requisitos

1.  Servidor Web (Apache) com suporte a PHP.
2.  Servidor de Banco de Dados (MySQL/MariaDB).

### Passos para a Configuração

1.  **Clone o Repositório:**
    ```bash
    git clone https://github.com/gleydsonbruno/GuiaTuristicoJP.git
    ```
2.  **Mova para a Pasta do Servidor:**
    Copie a pasta `GuiaTuristicoJP` para o diretório de documentos do seu servidor web (por exemplo, `htdocs` no XAMPP ou `www` no WAMP).
3.  **Configuração do Banco de Dados:**
      * Crie um banco de dados vazio no seu ambiente (ex: `guiaturistico`).
      * Edite o arquivo `conexao.php` com suas credenciais de acesso ao banco de dados (host, usuário, senha e nome do banco).
4.  **Acesso:**
    Acesse o projeto pelo seu navegador: `http://localhost/GuiaTuristicoJP/`



-----

Essa documentação está completa? Você gostaria de adicionar ou detalhar alguma seção específica, como a estrutura do `conexao.php`?
