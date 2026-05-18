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
    //---------------------
    print "<h2> Ex 01 </h2>";
        for ($c=100;$c>0;$c-=5){echo "$c - ";};
        echo "Acabou!";
    //------------------------------------------
    print "<h2> Ex 02 </h2>";
        $tot = 0;
        $f = 0;
        for($c=14; $c<73; $c++){
            $tot += $c;
            $f++;
        }
        echo 'media igual = ' . $tot/$f; 
    
    //-------------------------------------
    print "<h2> Ex 03</h2>";
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