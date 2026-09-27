<?php require __DIR__ . '/verificarAcesso.php'; require __DIR__ . '/cabecalho.php'; ?>
<h1>Cadastrar amigo</h1><form class="formulario" action="cadastroAction.php" method="post">
<input type="hidden" name="csrf" value="<?= h(token()) ?>">
<label>Nome <input name="txtNome" maxlength="45" required></label>
<label>Apelido <input name="txtApelido" maxlength="45" required></label>
<label>E-mail <input name="txtEmail" type="email" maxlength="255" required></label>
<button>Salvar amigo</button></form><?php require __DIR__ . '/rodape.php'; ?>
