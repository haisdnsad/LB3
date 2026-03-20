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
        if(!$numero)
            echo "O carai oia ai "

    ?>
    <div class="container-sm card ">
        <h1 class='text-center font-monospace' >Tabuada</h1>
        <div class="card mb-3">
            <?php 
            for($c=0;$c<11;$c++){
                echo "<p class='font-monospace '>$c x $numero = " . $numero*$c . "</p>";
            }
            
            ?>
            <h2> </h2>
        </div>


    </div>
            
</body>
</html>