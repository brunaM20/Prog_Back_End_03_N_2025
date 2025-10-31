<?php
require_once 'config.php';
require_once 'conecta.php';

// Garante que o script só rode se DB_TYPE for MySQL
if (DB_TYPE !== 'mysql') { 
    die("❌ Este script é apenas para MySQL. Altere DB_TYPE em config.php."); 
}

try {
    // Criação da tabela agendamentos
    $query = "CREATE TABLE IF NOT EXISTS agendamentos (
        id_agendamento INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome_dono VARCHAR(100) NOT NULL,
        telefone VARCHAR(20) NOT NULL,
        nome_pet VARCHAR(100) NOT NULL,
        procedimento VARCHAR(100) NOT NULL,
        data_agendada DATE NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

    $pdo->exec($query);

    echo "✅ Tabela <b>agendamentos</b> (MySQL) criada/verificada com sucesso!";
} 
catch (PDOException $e) {
    die("❌ Erro ao criar tabela MySQL: " . $e->getMessage());
}

// Fecha conexão
$pdo = null;
?>
