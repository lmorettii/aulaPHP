<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digite seu Nome</title>
</head>
<body>
    <h1>Digite seu Nome</h1> <!-- Cabeçalho principal da página, informando ao usuário para digitar seu nome -->
    
    <form method="POST"> <!-- Início do formulário, que usará o método POST para enviar dados ao servidor -->
        <input type="text" name="nome" placeholder="Seu nome aqui" required> <!-- Campo de entrada de texto para o nome. 'required' significa que o campo deve ser preenchido antes do envio -->
        <button type="submit">Enviar</button> <!-- Botão para enviar o formulário. Quando clicado, os dados do formulário são enviados -->
    </form>

    <?php
        // Verifica se o formulário foi enviado e se o campo 'nome' está definido
        if (isset($_POST['nome'])) { 
            $nome = $_POST['nome']; // Captura o valor do campo 'nome' enviado pelo formulário
            echo "<p>Olá, $nome!</p>"; // Exibe uma mensagem de saudação que inclui o nome digitado pelo usuário
        }
    ?>
</body>
</html>