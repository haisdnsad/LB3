<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDE</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <h1>Sistema de Descontos para E-commerce</h1>
        </div>
        <div class="row">
            <?php
                var_dump($_POST);
                if($_POST['categoria'] == "C"){
                    if($_POST['compra'] > 500){
                        echo "Você Cliente Comum recebeu 5% de desconto <br>Valor a pagar: " . ($_POST['compra'] * 0.95);
                    }else{
                    echo "Valor a pagar: " . ($_POST['compra'] * 0.95);
                    }
                }elseif($_POST['categoria'] == "V"){
                     if($_POST['compra'] > 1000){
                        echo "Você recebeu Frete GRATIS!";
                     }
                     echo "Você Cliente VIP recebeu 10% de desconto <br>Valor a pagar: " . ($_POST['compra'] * 0.90);
                }else{
                    echo "Você Cliente Premium recebeu 15% de desconto e Frete GRATIS! <br>Valor a pagar: " . ($_POST['compra'] * 0.85);
                }
            ?>
        </div>
    </div>
</body>
</html>