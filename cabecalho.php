<?php
require_once __DIR__ . '/funcoes.php';
?><!doctype html>
<html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de Amigos</title><link rel="stylesheet" href="estilo.css"></head><body>
<header><a href="principal.php">Lista de Amigos</a><?php if (!empty($_SESSION['logado'])): ?>
<span>Olá, <?= h((string)$_SESSION['logado']) ?></span>
<form action="logoutAction.php" method="post"><input type="hidden" name="csrf" value="<?= h(token()) ?>"><button>Sair</button></form>
<?php endif; ?></header><main>
<?php if (isset($_GET['msg'])): ?><p class="aviso"><?= h((string)$_GET['msg']) ?></p><?php endif; ?>
