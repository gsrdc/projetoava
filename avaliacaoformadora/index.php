<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibindo Nomes</title>
</head>
<body>
    <?php
    // Obtém os dados passados via GET
    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    $repeticoes = $_GET["repeticoes"];

    // Exibe os nomes e sobrenomes alternados o número de vezes especificado
    for ($i = 0; $i < $repeticoes; $i++) {
        if ($i % 2 == 0) {
            echo "<p>$nome $sobrenome</p>";
        } else {
            echo "<p>$sobrenome $nome</p>";
        }
    }
    ?>
    
    <a href="index.php">Voltar para a página principal</a>
</body>
</html>
