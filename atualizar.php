<?php
require __DIR__ . '/verificarAcesso.php';
require __DIR__ . '/buscarAmigo.php';
require __DIR__ . '/cabecalho.php';
?><h1>Editar amigo</h1><form class="formulario" action="atualizarAction.php" method="post">
<input type="hidden" name="csrf" value="<?= h(token()) ?>"><input type="hidden" name="txtID" value="<?= (int)$amigo['idamigo'] ?>">
<label>Nome <input name="txtNome" maxlength="45" value="<?= h($amigo['nome']) ?>" required></label>
<label>Apelido <input name="txtApelido" maxlength="45" value="<?= h($amigo['apelido']) ?>" required></label>
<label>E-mail <input name="txtEmail" type="email" maxlength="255" value="<?= h($amigo['email']) ?>" required></label>
<button>Salvar alterações</button></form><?php require __DIR__ . '/rodape.php'; ?>
