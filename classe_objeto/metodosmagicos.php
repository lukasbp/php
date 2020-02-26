<div class="titulo">Métodos mágicos</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function __destruct()
    {
     echo 'e morreu';   
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar(){
        echo $this."<br>";
    }

    public function __get($atrib){
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor)
    {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}";
    }

    public function __call($metodo, $params)
    {
        echo "Tentando executar método ${metodo}";
        echo ", com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa ('Ricardo', 40);
$pessoa -> apresentar(); //chamando o __toString()
echo $pessoa, '<br>'; // chamando o __toString()
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar();// chamando o metodos diretamente sem __call
$pessoa->nomeCompleto = 'Muito Legal!!!'; // __set
$pessoa->nomeCompleto = 'Muito Legal!!!';  // __get
echo $pessoa->nome;//acessa o atributo diretamente sem __get
$pessoa -> exec(1, 'Teste', true, [1,2,3]); // __call

$pessoa = null; //__destruct