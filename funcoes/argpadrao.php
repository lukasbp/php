<div class="titulo">Argumento padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente')
{
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(null);
echo saudacao(null, null);
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Agua')
{
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}


anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');
function anotarPedido2($bebida = 'Agua', $comida)
{
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido2('Hamburguer');
anotarPedido2('Refrigerante','Pizza');
