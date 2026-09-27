<?php
// Execute somente no terminal: php criarUsuario.php gabi
if (PHP_SAPI !== 'cli') { http_response_code(403); exit('Apenas terminal.'); }
require __DIR__ . '/conexaoBD.php';
$nome = trim((string)($argv[1] ?? ''));
if ($nome === '' || strlen($nome) > 45) { exit("Uso: php criarUsuario.php NOME\n"); }
fwrite(STDOUT, 'Senha: ');
$senha = trim((string)fgets(STDIN));
if (strlen($senha) < 8) { exit("A senha precisa ter ao menos 8 caracteres.\n"); }
$hash = password_hash($senha, PASSWORD_DEFAULT);
$stmt = $conexao->prepare('INSERT INTO usuario (nome, senha) VALUES (?, ?)');
$stmt->bind_param('ss', $nome, $hash);
try { $stmt->execute(); echo "Usuário cadastrado.\n"; }
catch (mysqli_sql_exception $e) { exit("Não foi possível criar o usuário. Verifique se o nome já existe.\n"); }
