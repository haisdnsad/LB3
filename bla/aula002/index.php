<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula  002</title>
</head>
<body>
    <h1>Hello world!</h1>
    <?php
        $nm = "User";
        echo "Bem vindo $nm" ;


        $valor = 2;
     
    ?>

    <h3>Lista de ex</h3>
    <ul> 
      
        
        
   
   


        <?php if($valor % 2 == 0){?>
            <li>A variavel valor é par</li>
            <li>Bacan</li>
        <?php } else { ?>
            <li>A variavel valor é Impar<li>
        <?php }; ?>
         
    </ul>
</body>
</html>