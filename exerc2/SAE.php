<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAE</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1> Sistema de Aprovação Escolar</h1>
        </div>
        <div class="row">
            <?php
    
            $notas = [$_POST["Nota1"], $_POST["Nota2"], $_POST["Nota3"]];
            $media = 0;
            $freq = $_POST['Freq'];
            foreach ($notas as $nota){
                $media += $nota;
            };
            echo "<p>Sua média: " . ($media/3) . "<br>Frequência: $freq <br>Situação: ";
            if($freq < 75){
                echo "Reprovado por Faltas";
            }
            elseif(($media/3) >= 7){
                echo "Aprovado";
            }
            elseif(($media/3) < 4){
                 echo "Reprovado por nota";
            }elseif(($media/3) < 7){
                 echo "Recuperação";
            };
            ?>
        </div>
    </div>
</body>
</html>