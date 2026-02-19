<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 003</title>
</head>
<body>
    <h1>Aula 004</h1>
    <?php
    //-----------------------------------------------
    print "<h2> Ex 01</h2>";
        for($c=-10;$c<11;$c++){
            echo "$c ";
        }
    //------------------------------------------
    print "<h2> Ex 02</h2>";
        $tot=0;
        for($c=1;$c<=500;$c++){
            if($c%3==0 and $c%2==1){
                $tot+=$c;
            }
        }
        echo "total: $tot";
    //----------------------------------------------
    print "<h2> Ex 03</h2>";
        for($c=100;$c>=0;$c-=10){
            echo "$c ";
        }
    echo "Acabou!";
    //-------------------------------------------------
        print "<h2> Ex 04</h2>";
        for($c=100;$c>00;$c--){
        if(($c % 5 == 0) and ($c % 2 == 1)){
            echo "[$c] ";
        }   else{
            echo "$c ";
        }
    }
    //--------------------------------------------------------
    print "<h2> Ex 05</h2>";
        for($c=150;$c>=0;$c-=5){
            echo "$c ";
        }
        echo "Acabou!";
    //-----------------------------------------------------
    print "<h2> Ex 06</h2>";
    $c=150;
    while($c>=0){
        echo "$c ";
        $c-=5;
    }
    echo "Acabou!";
    ?>
</body>
</html>