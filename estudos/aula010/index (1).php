<?php

class Veiculo {

    public $marca;
    public $modelo;
    public $ano;
    public $combustivel;
    public $consumoMedio;

    public function __construct($marca, $modelo, $ano, $combustivel, $consumoMedio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->combustivel = $combustivel;
        $this->consumoMedio = $consumoMedio;
    }

    public function abastecer($litros) {
        $this->combustivel = $this->combustivel + $litros;

        echo "Abastecido com $litros litros.<br>";
    }

    public function calcularAutonomia() {
        $autonomia = $this->combustivel * $this->consumoMedio;

        return $autonomia;
    }

    public function exibirInformacoes() {

        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
        echo "Combustível: " . $this->combustivel . " litros<br>";
        echo "Consumo médio: " . $this->consumoMedio . " km/l<br>";

    }

}

$veiculo1 = new Veiculo("Toyota", "Corolla", 2020, 20, 12);

$veiculo2 = new Veiculo("Honda", "Civic", 2019, 15, 10);

$veiculo3 = new Veiculo("Fiat", "Uno", 2015, 10, 14);



echo "<h2>Veículo 1</h2>";

echo "Informações iniciais:<br>";
$veiculo1->exibirInformacoes();

echo "<br>";

$veiculo1->abastecer(10);

echo "Autonomia: " . $veiculo1->calcularAutonomia() . " km<br>";

echo "<br>Dados atualizados:<br>";
$veiculo1->exibirInformacoes();

echo "<hr>";



echo "<h2>Veículo 2</h2>";

echo "Informações iniciais:<br>";
$veiculo2->exibirInformacoes();

echo "<br>";

$veiculo2->abastecer(20);

echo "Autonomia: " . $veiculo2->calcularAutonomia() . " km<br>";

echo "<br>Dados atualizados:<br>";
$veiculo2->exibirInformacoes();

echo "<hr>";


echo "<h2>Veículo 3</h2>";

echo "Informações iniciais:<br>";
$veiculo3->exibirInformacoes();

echo "<br>";

$veiculo3->abastecer(5);

echo "Autonomia: " . $veiculo3->calcularAutonomia() . " km<br>";

echo "<br>Dados atualizados:<br>";
$veiculo3->exibirInformacoes();

?>