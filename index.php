<?php
require_once __DIR__ . '/funcoes.php';
iniciarSessao();
if (!empty($_SESSION['logado'])) { header('Location: principal.php'); exit; }
require __DIR__ . '/cabecalho.php';
?><h1>Entrar</h1><p>Identifique-se para acessar sua lista.</p>
<form action="loginAction.php" method="post" class="formulario">
<input type="hidden" name="csrf" value="<?= h(token()) ?>">
<label>Nome <input name="txtNome" maxlength="45" autocomplete="username" required></label>
<label>Senha <input name="txtSenha" type="password" autocomplete="current-password" required></label>
<button>Entrar</button></form><?php require __DIR__ . '/rodape.php'; ?>
