<?php


class Livro{
    public $titulo ;
    public $autor ;
    public $paginas ;
    public $exemplares ; 
    public function __construct($t, $a, $p, $e){
        $this->titulo = $t;
        $this->autor = $a;
        $this->paginas = $p;
        $this->exemplares = $e;
    }

    public function emprestarLivro(){
        if($this->exemplares >= 1){
            $this->exemplares -= 1;
            return "<br>Livro emprestado. Devolva no tempo certo!";
        }
        return "<br>Estoque esgotado!";
    }
    public function devolverLivro(){
        $this->exemplares ++;
    }
    public function verificarDisponibilidade(){
        if($this->exemplares >= 1){
            return "<br>Há ". $this->exemplares . ' livros disponiveis no estoque';
        }
        return "<br>Nao ha estoque disponivel!";
    }   
    public function alterarPaginas($novo){
        $this->paginas = $novo;
        return "<br>Quantidade de paginas alterado com sucesso";
    }
    public function exibirInformacoes(){
        return "<br>TItulo: " . $this->titulo . "<br>Autor: " . $this->autor . "<br>Quantidade de paginas: " . $this->paginas . "<br>Quantidade de exemplares disponiveis: " . $this->exemplares;
    }
    public function compararPag($oto){
        if($this->paginas > $oto){
            return "<br>O livro " . $this->titulo . "contem mais paginas do que o comparado";
        } else if($this->paginas == $oto){
            return "<br> Os livros tem a mesma quantidade de paginas";
        } else{
            return "<br> O livro comparado e maior do que o livro " . $this->titulo;
        }
    }   
}

$l1 = new Livro("A arte da arte", "Pedrola de Junior", 500, 3);
echo $l1->verificarDisponibilidade();
$l1->emprestarLivro();
echo $l1->exibirInformacoes();
$l1->alterarPaginas(412);
$l1->devolverLivro();
echo $l1->exibirInformacoes();

$l2 = new Livro("Supinas", "Alanvancar", 751, 7);
echo $l2->verificarDisponibilidade();
$l2->emprestarLivro();
echo $l2->exibirInformacoes();
$l2->alterarPaginas(754);
$l2->devolverLivro();
echo $l2->exibirInformacoes();

$l3 = new Livro("Comundongus Solares", "Fin Vaulder", 200, 1);
echo $l3->verificarDisponibilidade();
$l3->emprestarLivro();
echo $l3->exibirInformacoes();
$l3->alterarPaginas(212);
$l3->devolverLivro();
echo $l3->exibirInformacoes();

echo $l1->compararPag($l2->paginas);
echo $l2->compararPag($l3->paginas);
echo $l3->compararPag($l1->paginas);