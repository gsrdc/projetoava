<!DOCTYPE html>
<html lang="en">
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
            <?php 
                $nome= $_POST["nome"];
                $sobrenome= $_POST["sobrenome"];
                $repeticoes= $_POST["repeticoes"];

                if (empty($nome) || empty($sobrenome) || empty($repeticoes)) { 
                    echo "<div class=\"container mt-5\">";
                    echo "Preencha todos os campos!";
                    echo "<br>";
                    echo "<a href=\"javascript:history.go(-1)\"><button type=\"button\" class=\"btn btn-primary m-3\">Voltar</button></a>";
                } else {
                    echo "<div class=\"container mt-5\">";

                    //variavel para contagem 
                    $i = 1; // Inicializa a variável de controle $i
                    while ($i <= $repeticoes) {
                        echo "$i = $nome<br>";

                        $i++;

                        // Verifica se ainda é necessário imprimir o sobrenome
                        if ($i <= $repeticoes) {
                            echo "$i = $sobrenome<br>";
                            $i++;
                        }
                    }
                    echo "<a href=\"javascript:history.go(-1)\"><button type=\"button\" class=\"btn btn-primary m-3\">Voltar</button></a>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
