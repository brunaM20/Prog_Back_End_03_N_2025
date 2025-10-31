<?php
require_once 'config.php'; // carrega o arquivo de configuração
require_once 'header.php'; // carrega o cabeçalho com o menu
// Não precisa de conecta.php, pois é apenas um formulário
?>

<h1>Agendar Atendimento</h1>

<p>Preencha os dados abaixo para realizar o agendamento do seu pet.</p>

<form method="post" action="insere.php">
  <label for="nome_dono">Nome do Dono:</label><br>
  <input type="text" name="nome_dono" id="nome_dono" required><br><br>
  
  <label for="telefone">Telefone:</label><br>
  <input type="tel" name="telefone" id="telefone"
         pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}"
         placeholder="Ex: 11-91234-5678" required><br><br>

  <label for="nome_pet">Nome do Pet:</label><br>
  <input type="text" name="nome_pet" id="nome_pet" required><br><br>

  <label for="procedimento">Procedimento:</label><br>
  <select name="procedimento" id="procedimento" required>
      <option value="">-- Selecione --</option>
      <option value="Banho">Banho</option>
      <option value="Tosa">Tosa</option>
      <option value="Banho e Tosa">Banho e Tosa</option>
      <option value="Vacina">Vacina</option>
      <option value="Consulta">Consulta Veterinária</option>
  </select><br><br>

  <label for="data_agendada">Data do Atendimento:</label><br>
  <input type="date" name="data_agendada" id="data_agendada"
         value="<?php echo date('Y-m-d'); ?>" required><br><br>

  <input type="submit" value="Agendar Atendimento">
</form>

<?php require_once 'footer.php'; // carrega o rodapé ?>
