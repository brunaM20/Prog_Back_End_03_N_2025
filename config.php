<?php
// Define o tipo de banco de dados: 'sqlite' ou 'mysql'
define('DB_TYPE', 'sqlite'); // Altere para 'mysql' para usar MySQL

// Configuração para SQLite
if (DB_TYPE === 'sqlite') {
    define('DATABASE_SQLITE', __DIR__ . '/database.sqlite3'); // caminho absoluto é mais seguro
} 
// Configuração para MySQL
elseif (DB_TYPE === 'mysql') {
    define('USER_MYSQL', 'root');
    define('PASS_MYSQL', '');
    define('DBNAME_MYSQL', 'test');
    define('HOST_MYSQL', 'localhost');
} 
else {
    die('SGBD não definido! <b>' . DB_TYPE . '</b>');
}
?>