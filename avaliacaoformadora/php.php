<?php
// Verifica se os campos foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $repeticoes = $_POST["repeticoes"];

    // Verifica se o número de repetições é um número válido
    if (!is_numeric($repeticoes) || $repeticoes <= 0) {
        echo "<p>O número de repetições deve ser um número positivo.</p>";
    } else {
        // Redireciona para uma nova página para exibir os nomes e sobrenomes alternados
        header("Location: exibir_nomes.php?nome=$nome&sobrenome=$sobrenome&repeticoes=$repeticoes");
        exit();
    }
}
?>
