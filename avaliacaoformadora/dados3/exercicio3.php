DOCTYPE html>
<html lang="en"!>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ex1css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercício 1</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="../avaliacaoformadora/index.html">Principal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="../avaliacaoformadora/exercicio1.html">Exercicio 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../avaliacaoformadora/exercicio2.html">Exercicio 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../avaliacaoformadora/exercicio3.html">Exercicio 3</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
  <div class="container">
      <div class="row">
          <h1>calculador de densidade</h1>
          <form action="exercicio1.php" method="POST">
          <h2>Resultado da Densidade</h2>
  <?php
  // Verifica se o formulário foi enviado via POST
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Verifica se a massa e o volume foram enviados
      if (isset($_POST["massa"]) && isset($_POST["volume"])) {
          // Obtém os valores da massa e do volume do formulário
          $massa = $_POST["massa"];
          $volume = $_POST["volume"];
          
          // Calcula a densidade
          $densidade = $massa / $volume;
          
          // Exibe o resultado
          echo "<p>A densidade é de: $densidade g/cm³</p>";
      } else {
          // Se algum campo estiver vazio, exibe mensagem de erro
          echo "<p>Preencha todos os campos do formulário.</p>";
      }
  } else {
      // Se o formulário não foi enviado via POST, redireciona para o formulário de entrada
      header("Location: index.php");
      exit(); // Termina o script para evitar que mais conteúdo seja enviado
  }
  ?>>
              </a>
          </form>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado da Densidade</title>
</head>
<body>
 