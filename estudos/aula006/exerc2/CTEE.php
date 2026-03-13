<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTEE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1 class="text-center mb-4">Calculadora de Tarifas de Energia Elétrica</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-3">
                <?php
                echo "<p class='fs-5'>";
                if($_POST['imovel'] == "R"){
                    if($_POST["kWh"] < 500){
                        echo "Tipo de Instalação: <strong>Residencial</strong><br>";
                        echo "Consumo: " . $_POST["kWh"] . " kWh<br>";
                        echo "Valor total a ser pago: " . ($_POST['kWh'] * 0.4);
                    } else{
                        echo "Tipo de Instalação: <strong>Residencial</strong><br>";
                        echo "Consumo: " . $_POST["kWh"] . " kWh<br>";
                        echo "Valor total a ser pago: " . ($_POST['kWh'] * 0.65);
                    }
                }elseif($_POST['imovel'] == "C"){
                    if($_POST["kWh"] < 1000){
                        echo "Tipo de Instalação: <strong>Comercial</strong><br>";
                        echo "Consumo: " . $_POST["kWh"] . " kWh<br>";
                        echo "Valor total a ser pago: " . ($_POST['kWh'] * 0.55);
                    } else{
                        echo "Tipo de Instalação: <strong>Comercial</strong><br>";
                        echo "Consumo: " . $_POST["kWh"] . " kWh<br>";
                        echo "Valor total a ser pago: " . ($_POST['kWh'] * 0.6);
                    }
                }else{
                    if($_POST["kWh"] < 5000){
                        echo "Tipo de Instalação: <strong>Industrial</strong><br>";
                        echo "Consumo: " . $_POST["kWh"] . " kWh<br>";
                        echo "Valor total a ser pago: " . ($_POST['kWh'] * 0.55);
                    } else{
                        echo "Tipo de Instalação: <strong>Industrial</strong><br>";
                        echo "Consumo: " . $_POST["kWh"] . " kWh<br>";
                        echo "Valor total a ser pago: " . ($_POST['kWh'] * 0.6);
                    }
                }
                echo "</p>";
                ?>
            </div>
        </div>
    </div>

</div>

</body>
</html>