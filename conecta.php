<?php
require_once 'config.php'; // carrega apenas uma vez o arquivo config.php

try {
    if (DB_TYPE === 'sqlite') {
        // Conexão com SQLite
        $pdo = new PDO('sqlite:' . DATABASE_SQLITE);
    } 
    elseif (DB_TYPE === 'mysql') {
        // Conexão com MySQL
        $dsn = 'mysql:host=' . HOST_MYSQL . ';dbname=' . DBNAME_MYSQL . ';charset=utf8mb4';
        $pdo = new PDO($dsn, USER_MYSQL, PASS_MYSQL);
    } 
    else {
        throw new Exception("Tipo de banco de dados não suportado em config.php");
    }

    // Define o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Define o modo padrão de fetch
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} 
catch (PDOException $e) {
    die("ERRO DE CONEXÃO: " . $e->getMessage());
} 
catch (Exception $e) {
    die("ERRO DE CONFIGURAÇÃO: " . $e->getMessage());
}
?>
