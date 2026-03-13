<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1 class="text-center mb-4">Sistema de Descontos para E-commerce</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-3">
                    <?php
                    echo "<p class='fs-5'>";
                    if ($_POST['categoria'] == "C") {
                        if ($_POST['compra'] > 500) {
                            echo "Você <strong>Cliente Comum</strong> recebeu <span class='text-success'>5% de desconto</span> <br>";
                            echo "Valor a pagar: " . ($_POST['compra'] * 0.95);
                        } else {
                            echo "Valor a pagar: " . $_POST['compra'];
                        }
                    } elseif ($_POST['categoria'] == "V") {

                        if ($_POST['compra'] > 1000) {
                            echo "<span class='text-primary'>Você recebeu Frete GRÁTIS!</span><br>";
                        }

                        echo "Você <strong>Cliente VIP</strong> recebeu <span class='text-success'>10% de desconto</span><br>";
                        echo "Valor a pagar: " . ($_POST['compra'] * 0.90);
                    } else {

                        echo "Você <strong>Cliente Premium</strong> recebeu <span class='text-success'>15% de desconto</span> ";
                        echo "e <span class='text-primary'>Frete GRÁTIS!</span><br>";
                        echo "Valor a pagar: " . ($_POST['compra'] * 0.85);
                    }
                    echo "</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>