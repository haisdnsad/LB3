<?php

class ContaBancaria
{
    public int $numero;
    public string $titular;
    public int $agencia;
    public int $saldo;
    public  string $dataAbertura;
    public int $status;

    public function depositar(float $v): void
    {
        if ($v > 0) {
            $this->saldo += $v;
        } else {
            echo "Valor inserido invalido";
        }
    }
    public function sacar(float $v): void
    {
        if ($v > 0 and $v <= $this->saldo) {
            $this->saldo -= $v;
        } else {
            echo "Valor inserido incorreto ou indisponivel, por favor tente novamente";
        }
    }

    public function transferir(float $v, object $c): bool
    {
        if ($c and $c->status and $v > 0) {
            $this->saldo -= $v;
            $c->depositar($v);
            return true;
        } else {
            return false;
        }
    }

    public function fecharConta(): void
    {
        if ($this->saldo == 0) {
            $this->status = 0;
        } else {
            echo "Primeiro retire o dinheiro ou quite as dividas da conta para fechala";
        }
    }
    public function consultarSaldo(): float
    {
        return $this->saldo;
    }
}

class ContaCorrente extends ContaBancaria
{
    public float $limiteChequeEspecial;
    public string $taxaManutencaoMensal;
    public float $cartaoCreditoVencimento;
    public float $valorCartaoCredito;

    public function __construct($l, $t, $c, $v)
    {
        $this->limiteChequeEspecial = $l;
        $this->taxaManutencaoMensal = $t;
        $this->cartaoCreditoVencimento = $c;
        $this->valorCartaoCredito = $v;
    }

    public function sacar(float $v): void
    {
        if ($v > 0 and $v <= ($this->saldo + $this->limiteChequeEspecial)) {
            $this->saldo -= $v;
        } else {
            echo "Valor inserido incorreto ou indisponivel, por favor tente novamente";
        }
    }
    public function cobrarTaxaMensal(): void
    {
        $this->saldo -= $this->taxaManutencaoMensal;
    }
    public function solicitarAumentoLimite(float $v): void
    {
        if ($v > 0 and $v <= (($this->limiteChequeEspecial * 0.3) + $this->limiteChequeEspecial)) {
            $this->limiteChequeEspecial = $v;
        } else {
            echo "Valor solicitado indisponivel";
        }
    }
    public function pagarFaturaCartao(): void
    {
        $data = 10;
        if ($this->cartaoCreditoVencimento == $data) {
            $this->saldo -= $this->valorCartaoCredito;
            $this->valorCartaoCredito = 0;
        } else {
            echo "O tempo para pagar a fatura foi ultrapassado";
        }
    }
}


class ContaPoupanca extends ContaBancaria{
    public int $diaAniversario;
    public float $taxaRendimento;
    public int $diasSemMovimentacao;
    public function creditarRendimento():void{
        $dia = 10;
        if($this->diaAniversario == $dia){
            $this->saldo = $this->saldo * $this->taxaRendimento;
        }
    }
    public function preverProximoRendimento():float{
        return "A conta com o saldo de $this->saldo no proximo aniversario rendera: ". $this->saldo * $this->taxaRendimento;
    }
}



