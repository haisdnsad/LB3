<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1 class="text-center mb-4">Sistema de Aprovação Escolar</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-3">
                    <?php
                    $notas = [$_POST["Nota1"], $_POST["Nota2"], $_POST["Nota3"]];
                    $media = 0;
                    $freq = $_POST['Freq'];

                    foreach ($notas as $nota) {
                        $media += $nota;
                    }

                    $media = $media / 3;

                    echo "<p class='fs-5'>";
                    echo "Sua média: $media <br>";
                    echo "Frequência: $freq <br>";
                    echo "<strong>Situação: </strong>";

                    if ($freq < 75) {
                        echo "<span class='text-danger'>Reprovado por Faltas</span>";
                    } elseif ($media >= 7) {
                        echo "<span class='text-success'>Aprovado</span>";
                    } elseif ($media < 4) {
                        echo "<span class='text-danger'>Reprovado por nota</span>";
                    } elseif ($media < 7) {
                        echo "<span class='text-warning'>Recuperação</span>";
                    }
                    echo "</p>";
                    ?>
                </div>
            </div>
        </div>

    </div>

</body>

</html>