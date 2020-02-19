<div class="titulo">Argumentos Variaveis</div>

<?php
function soma($a,$b){
    return $a + $b;
}

echo soma(14,15) . '<br>';
echo soma(6,4,5) . '<br>';

function somaCompleta(...$numeros){
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

somaCompleta(1,2,3,4,5);

$array = [6,7,8];
echo '<br>' . somaCompleta(...$array);

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach ($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';
membros("Ana", "pedro", "Rafaela");

echo '<br>';
membros("bruhh");