<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTEE</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Calculadora de Tarifas de Energia Elétrica</h1>
        </div>
        <div class="row">
            <?php
            if($_POST['imovel'] == "R"){
                if($_POST["kWh"] < 500){
                    echo "<p>Tipo de Instalção: Residencial <br>Consumo: " . $_POST["kWh"] . "<br>Valor total a ser pago: " . ($_POST['kWh'] * 0.4);
                } else{
                    echo "<p>Tipo de Instalção: Residencial <br>Consumo: " . $_POST["kWh"] . "<br>Valor total a ser pago: " . ($_POST['kWh'] * 0.65);
                }
            }elseif($_POST['imovel'] == "C"){
                if($_POST["kWh"] < 1000){
                    echo "<p>Tipo de Instalção: Comercial <br>Consumo: " . $_POST["kWh"] . "<br>Valor total a ser pago: " . ($_POST['kWh'] * 0.55);
                } else{
                    echo "<p>Tipo de Instalção: Comercial <br>Consumo: " . $_POST["kWh"] . "<br>Valor total a ser pago: " . ($_POST['kWh'] * 0.6);
                }
            }else{
                if($_POST["kWh"] < 5000){
                    echo "<p>Tipo de Instalção: Industrial <br>Consumo: " . $_POST["kWh"] . "<br>Valor total a ser pago: " . ($_POST['kWh'] * 0.55);
                } else{
                    echo "<p>Tipo de Instalção: Industrial <br>Consumo: " . $_POST["kWh"] . "<br>Valor total a ser pago: " . ($_POST['kWh'] * 0.6);
                }
            }

            ?>
        </div>
    </div>
</body>
</html>