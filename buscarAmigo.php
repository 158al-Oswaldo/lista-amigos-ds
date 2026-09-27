<?php
require_once __DIR__ . '/conexaoBD.php';
$id = idValido($_GET['id'] ?? null);
$stmt = $conexao->prepare('SELECT idamigo, nome, apelido, email FROM amigo WHERE idamigo = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$amigo = $stmt->get_result()->fetch_assoc();
if (!$amigo) { http_response_code(404); exit('Amigo não encontrado.'); }
