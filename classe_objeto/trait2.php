<div class="titulo">Trait 2</div>

<?php
trait validacao{
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor{
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class Usuario{
    use validacao,validacaoMelhor{
        validacaoMelhor::validarString insteadof validacao;
        //validacao::validarString insteadOf validacaoMelhor;
        validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));