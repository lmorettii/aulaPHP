<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voce pode dirigir?</title>
</head>
<body>
<h1>Verifique se você pode dirigir</h1> <!-- Cabeçalho principal da página, informando ao usuário para digitar seu nome -->
    
    <form method="POST" action=""> <!-- Início do formulário, que usará o método POST para enviar dados ao servidor -->
    <label for="idade">Digite sua idade:</label>
    <input type="number" id="idade" name="idade"  required> <!-- Campo de entrada de texto para o nome. 'required' significa que o campo deve ser preenchido antes do envio -->
        <button type="submit">Verifar</button> <!-- Botão para enviar o formulário. Quando clicado, os dados do formulário são enviados -->
    </form>

    <?php
        // Verifica se o formulário foi enviado e se o campo 'nome' está definido
        if (isset($_POST['idade'])) {
            $idade = $_POST['idade'];
        
            if ($idade >= 18) {
                echo "<p>Você pode dirigir</p>";
            } else {
                echo "<p>Você ainda não pode dirigir</p>";
            }
        }
    ?>

</body>
</html>
<!-- oi -->