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
        $numero = $_GET['num']??false;
        
        
           

    ?>
    <div class="container-sm card ">
        <h1 class='text-center font-monospace' >Tabuada</h1>
        <div class="card mb-3">
            <table class="table table-hover table-striped table-bordered">
            <?php 
            if($numero != false) {
            for($c=0;$c<11;$c++){
                echo "<tr>
                   <td class='text-center'>$c</td><td class='text-center'>x</td><td class='text-center'>$numero</td><td class='text-center'>=</td><td class='text-center'>" . $numero*$c . "</td>
                </tr>";
            }
        ?>
        </table>
        <?php 
         } else {
            echo '<div class="alert alert-danger" role="alert"> Valor numerico nao informado! Por favor, tente novamente </div>
            ';
        }
            
            
            ?>
            <h2> </h2>
        </div>


    </div>
            
</body>
</html>