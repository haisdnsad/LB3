<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Índice de Massa Corpórea (IMC)</h1>
    <?php 
        $peso = $_POST["Peso"];
        $altura = $_POST["Altura"];
        $IMC = $peso / ($peso**2);

        echo "Sua massa corpórea é: $IMC <br>Sua classifição é: ";
        if ($IMC <18.5){
            echo "Abaixo do peso.";
        } elseif ($IMC < 25){
            echo "Peso ideal.";
        } elseif ($IMC < 30){
            echo "Sobrepeso";
        } elseif ($IMC < 40){
            echo "Obesidade";
        } else{
            echo "Obesidade mórbida.";
        };
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
</html>