<?php
require_once 'config.php';
require_once 'conecta.php';

// Garante que o script só rode se DB_TYPE for SQLite
if (DB_TYPE !== 'sqlite') { 
    die("❌ Este script é apenas para SQLite. Altere DB_TYPE em config.php."); 
}

try {
    // Criação da tabela agendamentos
    $query = "CREATE TABLE IF NOT EXISTS agendamentos (
        id_agendamento INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
        nome_dono TEXT NOT NULL,
        telefone TEXT NOT NULL,
        nome_pet TEXT NOT NULL,
        procedimento TEXT NOT NULL,
        data_agendada DATE NOT NULL
    )";

    $pdo->exec($query);

    echo "✅ Tabela <b>agendamentos</b> (SQLite) criada/verificada com sucesso!";
} 
catch (PDOException $e) {
    die("❌ Erro ao criar tabela SQLite: " . $e->getMessage());
}

// Fecha conexão
$pdo = null;
?>
