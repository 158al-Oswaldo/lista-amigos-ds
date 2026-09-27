<?php
require_once __DIR__ . '/funcoes.php';
somentePost();
$nome = trim((string)($_POST['txtNome'] ?? ''));
$senha = (string)($_POST['txtSenha'] ?? '');
if ($nome === '' || $senha === '') { voltar('index.php', 'Informe nome e senha.'); }
require __DIR__ . '/conexaoBD.php';
$stmt = $conexao->prepare('SELECT senha FROM usuario WHERE nome = ? LIMIT 1');
$stmt->bind_param('s', $nome);
$stmt->execute();
$usuario = $stmt->get_result()->fetch_assoc();
if (!$usuario || !password_verify($senha, $usuario['senha'])) {
    voltar('index.php', 'Login inválido.');
}
session_regenerate_id(true);
$_SESSION['logado'] = $nome;
header('Location: principal.php');
exit;
