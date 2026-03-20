<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburgueria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   
</head>
<body>
    <?php 
        $nome = $_POST['nome'];
        $extra = [$_POST['a1']??false , $_POST['a2']??false, $_POST['a3']?? false, $_POST['a4']??false];
        $total = 20;

    ?>
    <div class="container-sm card ">
        <h1 class='text-center font-monospace' >Podrão de R$20.00</h1>
        <div class="card mb-3">
            <h2>Opçoes complementares selecionadas: </h2>
            <input disabled <?= $extra[0] ? 'checked' : '' ?>  class="form-check-input"  type="checkbox" name="a1" id="Ia1" value="1">
            <label class="form-label" for="Ia1">Bacon: R$ 3,00</label>
            <input disabled <?= $extra[1] ? 'checked' : '' ?>  class="form-check-input" type="checkbox" name="a2" id="Ia2" value="2">
            <label class="form-label" for="Ia2">Cheddar Cremoso: R$ 2,50</label>
            <input disabled <?= $extra[2] ? 'checked' : '' ?>  class="form-check-input" type="checkbox" name="a3" id="Ia3" value="3">
            <label class="form-label" for="Ia3">Cebola Caramelizada: R$ 2,00</label>
            <input disabled <?= $extra[3] ? 'checked' : '' ?>  class="form-check-input" type="checkbox" name="a4" id="Ia4" value="4">
            <label class="form-label" for="Ia4">Hambúrguer Extra: R$ 5,00</label>
        </div>
        <div class="container-sm card mb-3">
            <h2>Resumo do pedido: </h2>
            <?= "<p>Cliente: $nome </p>"?>
                <?php echo '<p>Adicionais: '; 
                foreach($extra as $po => $va){
                    if($va){
                        if($po==0){
                            echo 'Bacon; ';
                            $total+=3;
                        } elseif($po==1){
                            echo 'Cheddar Cremoso; ';
                             $total+=2.5;
                        }elseif($po==2){
                            echo 'Cebola Caramelizada; ';
                             $total+=2;
                        }else{
                            echo 'Hambúrguer Extra; </p>';
                             $total+=5;
                        };    
                    };
                };?>
                <?= "<p> <strong> Total: R$$total <strong></p>" ?>
        </div>

    </div>
            
</body>
</html>