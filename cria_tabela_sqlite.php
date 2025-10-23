<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tabela SQLite - Sistema de Usuários</title>
</head>
<body>
<?php
require_once 'config.php';
require_once 'conecta.php';

// Verifica se o tipo de banco é SQLite
if (DB_TYPE !== 'sqlite') {
    exit("<p style='color:red;'>Este script é apenas para SQLite. Verifique a configuração em <code>config.php</code>.</p>");
}

// Criação da tabela
$query = "
CREATE TABLE IF NOT EXISTS usuarios (
    id_user INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    email TEXT NOT NULL UNIQUE,
    senha TEXT NOT NULL,
    data DATE
);
";

try {
    $pdo->exec($query);
    echo "<p>Tabela <b>usuarios</b> (SQLite) criada/verificada com sucesso. Campo <code>email UNIQUE</code>.</p>";
} catch (PDOException $e) {
    echo "<p style='color:red;'>Erro ao criar tabela: " . htmlspecialchars($e->getMessage()) . "</p>";
}

$pdo = null;
?>
</body>
</html>
