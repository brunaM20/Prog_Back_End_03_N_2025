<?php
/**
 * ======================================
 * CONFIGURAÇÕES DE BANCO DE DADOS (PDO)
 * ======================================
 * Suporte a: SQLite e MySQL
 * Altere a constante DB_TYPE conforme o banco desejado.
 */

// Tipo de banco: 'sqlite' ou 'mysql'
define('DB_TYPE', 'sqlite'); // 🔄 Altere para 'mysql' se quiser usar MySQL

// =========================
// Configurações SQLite
// =========================
if (DB_TYPE === 'sqlite') {
    define('DATABASE_SQLITE', __DIR__ . '/database.sqlite3'); 
    // __DIR__ garante o caminho absoluto do arquivo (evita erro de diretório)
}

// =========================
// Configurações MySQL
// =========================
elseif (DB_TYPE === 'mysql') {
    define('HOST_MYSQL', 'localhost');
    define('DBNAME_MYSQL', 'test');
    define('USER_MYSQL', 'root');
    define('PASS_MYSQL', '');
}

// =========================
// Erro de configuração
// =========================
else {
    die('❌ Tipo de banco de dados não definido corretamente em config.php');
}
?>
