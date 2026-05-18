<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
</head>
<body>
    <?php 
    class Funcionario{
        public $codigo;
        public $nome;
        public $salario;
        public $carga;

        public function calcularSalarioHora(){
            echo  "<p> O funcionario " . $this -> nome . " recebe R$" . number_format( $this -> salario /$this -> carga , 2) . " Por hora trabalhada. </p>";
        }
        public function aumentarSalario(float $v){
            $this -> salario = $this -> salario * (1 + $v / 100);
            echo "<p> O funcionario " . $this -> nome . " teve um aumento de <strong>$v%</strong> e agora recebe " . $this -> salario;
        }
        public function exibirDados(){
            echo "<p>Informações do funcionario: " . $this -> codigo . "<br>Nome: " . $this -> nome . "<br>Salario: R$" . number_format($this -> salario, 2) . "<br>Carga horaria: " . $this -> carga;
        }
    }


    $f1 = new Funcionario();
    $f1 -> nome = "Godolfredo";
    $f1 -> codigo = '178923';
    $f1 -> salario = 1860.80;
    $f1 -> carga = 40;
    $f1 -> exibirDados();
    $f1 -> calcularSalarioHora();
    $f1 -> aumentarSalario(10);
    $f1 -> exibirDados();


    $f2 = new Funcionario();
    $f2 -> nome = "Adolfe";
    $f2 -> codigo = '657893';
    $f2 -> salario = 2000.00;
    $f2 -> carga = 38;
    $f2 -> exibirDados();
    $f2 -> calcularSalarioHora();
    $f2 -> aumentarSalario(5);
    $f2 -> exibirDados();

    $f3 = new Funcionario();
    $f3 -> nome = "Roberto";
    $f3 -> codigo = '108239';
    $f3 -> salario = 1500.00;
    $f3 -> carga = 20;
    $f3 -> exibirDados();
    $f3 -> calcularSalarioHora();
    $f3 -> aumentarSalario(10);
    $f3 -> exibirDados();
    ?>
</body>
</html>