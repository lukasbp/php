<div class="titulo">Primeira classe</div>

<?php

class Cliente
{
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar()
    {
        return "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Silva';
$c1->idade = 27;

$c2 = new Cliente();
$c2->nome = 'Gabriel';
$c2->idade = 42;

echo $c1->apresentar();
echo $c2->apresentar();
