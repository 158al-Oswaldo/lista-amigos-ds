<?php
declare(strict_types=1);
function h(?string $valor): string {
    return htmlspecialchars($valor ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
function iniciarSessao(): void {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}
function token(): string {
    iniciarSessao();
    return $_SESSION['csrf'] ??= bin2hex(random_bytes(32));
}
function conferirToken(): void {
    iniciarSessao();
    if (!hash_equals(token(), (string)($_POST['csrf'] ?? ''))) {
        http_response_code(403);
        exit('Requisição inválida.');
    }
}
function somentePost(): void {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        exit('Método não permitido.');
    }
    conferirToken();
}
function idValido($valor): int {
    $id = filter_var($valor, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    if ($id === false) {
        http_response_code(400);
        exit('Identificador inválido.');
    }
    return $id;
}
function camposAmigo(): array {
    $nome = trim((string)($_POST['txtNome'] ?? ''));
    $apelido = trim((string)($_POST['txtApelido'] ?? ''));
    $email = trim((string)($_POST['txtEmail'] ?? ''));
    if ($nome === '' || $apelido === '' || strlen($nome) > 45 || strlen($apelido) > 45 || strlen($email) > 255 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(422);
        exit('Confira nome, apelido e e-mail.');
    }
    return [$nome, $apelido, $email];
}
function voltar(string $arquivo, string $mensagem): never {
    header('Location: ' . $arquivo . '?msg=' . rawurlencode($mensagem));
    exit;
}
