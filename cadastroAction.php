<?php
require __DIR__ . '/verificarAcesso.php';
somentePost();
[$nome, $apelido, $email] = camposAmigo();
require __DIR__ . '/conexaoBD.php';
$stmt = $conexao->prepare('INSERT INTO amigo (nome, apelido, email) VALUES (?, ?, ?)');
$stmt->bind_param('sss', $nome, $apelido, $email);
$stmt->execute();
voltar('listar.php', 'Amigo cadastrado.');
