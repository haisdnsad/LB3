<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Locadora de Veículos</h1>
        </div>
        <div class="row">
            <h2>Total a pagar</h2>
            <?php
            $tipo = $_POST["Tipo"];
            $dias = $_POST["Dias"];
            $kms = $_POST["Km"];
            if ($tipo == "Luxo") {
                $tot = ($dias * 150) + ($kms < 100 ? $kms * 0.3 : $kms * 0.25);
            } else {
                $tot = ($dias * 90) + ($kms < 100 ? $kms * 0.2 : $kms * 0.1);
            };
            echo "O carro alugado foi de $tipo, alugado por $dias dia(s), e percorrido(s) $kms Km(s). <br>Valor total a pagar: R$$tot";
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>