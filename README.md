# Lista de Amigos com Login

Projeto desenvolvido em PHP para o curso Técnico em Desenvolvimento de Sistemas, disciplina de Programação WEB II.

## Sobre o projeto

Sistema de cadastro de amigos (CRUD) com autenticação de usuário via login e senha. A proteção de acesso foi adicionada após um problema real: informações da lista estavam sendo alteradas sem autorização, o que motivou a implementação de um sistema de login para restringir o acesso aos dados.

## Funcionalidades

- Cadastro de amigos
- Listagem de amigos
- Edição de amigos
- Exclusão de amigos
- Login com usuário e senha
- Controle de sessão (impede acesso às páginas via URL sem login)
- Logout

## Tecnologias utilizadas

- PHP
- MySQL (Mysqli)
- HTML / CSS (W3.CSS)
- Sessions e Cookies

## Estrutura de arquivos

| Arquivo | Função |
|---|---|
| `index.php` | Tela de login |
| `loginAction.php` | Valida usuário e senha, inicia a sessão |
| `conexaoBD.php` | Centraliza os dados de conexão com o banco |
| `verificarAcesso.php` | Verifica se há sessão ativa antes de liberar a página |
| `acessoNegado.php` | Exibida quando o acesso é negado |
| `logoutAction.php` | Encerra a sessão do usuário |
| `principal.php` | Página inicial após login (CRUD de amigos) |
| `cabecalho.php` / `rodape.php` | Cabeçalho e rodapé reutilizados nas páginas |

## Como executar

1. Configure um servidor local com suporte a PHP e MySQL (ex: USBWebServer, XAMPP).
2. Importe o banco de dados fornecido na pasta do projeto.
3. Ajuste os dados de conexão em `conexaoBD.php`, se necessário.
4. Acesse `index.php` pelo navegador e faça login.

Link da apresentação no Canva: https://canva.link/6kn58ujk7pxxpry
