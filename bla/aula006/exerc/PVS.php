<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PVS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Programa Vida Saudável</h1>
        </div>
        <div class="row">
            <?php
            $horas = $_POST["Horas"];
            if ($horas < 10) {
                $pontos = $horas * 2;
            } elseif ($horas < 20) {
                $pontos = $horas * 5;
            } else {
                $pontos = $horas * 10;
            }
            echo "você tem um total de: $pontos pts<br>que equivalem a: R$" . ($pontos * 0.05);
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>