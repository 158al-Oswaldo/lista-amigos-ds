<?php
require_once __DIR__ . '/verificarAcesso.php';
somentePost();
$_SESSION = [];
session_destroy();
header('Location: index.php');
exit;
