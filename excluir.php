<?php
require __DIR__ . '/verificarAcesso.php';
require __DIR__ . '/buscarAmigo.php';
require __DIR__ . '/cabecalho.php';
?><h1>Excluir amigo</h1><p>Confirma a exclusão de <strong><?= h($amigo['nome']) ?></strong> (<?= h($amigo['email']) ?>)?</p>
<form action="excluirAction.php" method="post"><input type="hidden" name="csrf" value="<?= h(token()) ?>"><input type="hidden" name="txtID" value="<?= (int)$amigo['idamigo'] ?>"><button class="perigo">Confirmar exclusão</button> <a href="listar.php">Cancelar</a></form>
<?php require __DIR__ . '/rodape.php'; ?>
