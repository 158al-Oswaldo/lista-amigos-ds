<?php
require __DIR__ . '/verificarAcesso.php';
somentePost();
$id = idValido($_POST['txtID'] ?? null);
[$nome, $apelido, $email] = camposAmigo();
require __DIR__ . '/conexaoBD.php';
$stmt = $conexao->prepare('UPDATE amigo SET nome = ?, apelido = ?, email = ? WHERE idamigo = ?');
$stmt->bind_param('sssi', $nome, $apelido, $email, $id);
$stmt->execute();
voltar('listar.php', 'Alterações salvas.');
