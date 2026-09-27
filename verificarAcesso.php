<?php
require_once __DIR__ . '/funcoes.php';
iniciarSessao();
if (empty($_SESSION['logado'])) {
    header('Location: acessoNegado.php');
    exit;
}
