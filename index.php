<?php
require_once 'config.php';
require_once 'header.php'; 
?>

<h1>🐾 Sistema de Agendamentos Pet Shop</h1>
<p>Bem-vindo(a)! Utilize o menu acima para cadastrar, visualizar ou atualizar agendamentos.</p>

<h2>⚙️ Ações de Configuração e Inicialização</h2>
<p>Execute um dos scripts abaixo para criar a tabela necessária no banco de dados:</p>
<ul>
    <li><a href="cria_tabela_sqlite.php" target="_blank">Criar Tabela - SQLite</a></li>
    <li><a href="cria_tabela_mysql.php" target="_blank">Criar Tabela - MySQL</a></li>
</ul>

<h2>🔍 Status Atual da Conexão</h2>
<?php 
try {
    require_once 'conecta.php';
    echo "<p style='color: green;'>✅ Conexão bem-sucedida! Banco de Dados em uso: <b>" . strtoupper(DB_TYPE) . "</b></p>";
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Falha na conexão: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>

<?php require_once 'footer.php'; ?>
