<?php
require __DIR__ . '/verificarAcesso.php';
somentePost();
$id = idValido($_POST['txtID'] ?? null);
require __DIR__ . '/conexaoBD.php';
$stmt = $conexao->prepare('DELETE FROM amigo WHERE idamigo = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
voltar('listar.php', 'Amigo excluído.');
