<?php
require __DIR__ . '/verificarAcesso.php';
require __DIR__ . '/conexaoBD.php';
$amigos = $conexao->query('SELECT idamigo, nome, apelido, email FROM amigo ORDER BY nome, idamigo');
require __DIR__ . '/cabecalho.php';
?><h1>Lista de amigos</h1><a class="botao" href="cadastro.php">Adicionar amigo</a>
<?php if ($amigos->num_rows === 0): ?><p>Nenhum amigo cadastrado.</p><?php else: ?>
<div class="tabela"><table><thead><tr><th>ID</th><th>Nome</th><th>Apelido</th><th>E-mail</th><th>Ações</th></tr></thead><tbody>
<?php while ($a = $amigos->fetch_assoc()): ?><tr><td><?= (int)$a['idamigo'] ?></td><td><?= h($a['nome']) ?></td><td><?= h($a['apelido']) ?></td><td><?= h($a['email']) ?></td><td><a href="atualizar.php?id=<?= (int)$a['idamigo'] ?>">Editar</a> · <a href="excluir.php?id=<?= (int)$a['idamigo'] ?>">Excluir</a></td></tr><?php endwhile; ?>
</tbody></table></div><?php endif; require __DIR__ . '/rodape.php'; ?>
