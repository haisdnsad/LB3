<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 003</title>
</head>
<body>
    <h1>Aula 003</h1>
    <?php
for ($c=0;$c<10;$c+=2){
    echo "$c <br>";
};

while($c>0){
        echo $c-1 . " <br>";
    $c-=2;
};
    ?>

    <h4>Multiplos de 3 de 0 ate 100</h4>
    <ul>
        <?php for($c=0; $c<100; $c+=3){ ?>
            <li>Número: <?php echo $c; ?></li>
        <?php }; ?>
    </ul>

    <?php
    for ($c=100;$c>0;$c-=5){echo "$c - ";};
    echo "Acabou!";
    //------------------------------------------
    $tot = 0;
    $f = 0;
    for($c=14; $c<73; $c++){
        $tot += $c;
        $f++;
    }
    echo '<br> media igual = ' . $tot/$f; 
    //-------------------------------------
    echo "<br>";
    for($c=30;$c>0;$c--){
        if($c % 4 ==0){
            echo "[$c] ";
        }   else{
            echo "$c ";
        }
    }
    ?>
</body>
</html>