</div>

<footer>
    <hr>
    <p style="text-align: center; font-size: 0.8em; color: #666;">
        &copy; <?php echo date("Y"); ?> <strong>PHP PDO</strong>. Todos os direitos reservados.
        <br>
        Ferramentas de Banco de Dados: 
        <?php
        // Exibe o tipo de banco utilizado
        if (defined('DB_TYPE')) {
            echo 'Conectado via PDO a <strong>' . strtoupper(DB_TYPE) . '</strong>.';
        } else {
            echo 'Configuração de conexão pendente.';
        }
        ?>
    </p>
</footer>

</body>
</html>
