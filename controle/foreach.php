<div class="titulo">For each</div>
<?php
$array = [
    1000 => 'Domingo',
    'Segunda',
    'Terça'
];

foreach($array as $valor){
    echo "$valor <br>";
}

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a','b','c'],
    ['d','e','f']
];

foreach ($matrix as $linha) {
    foreach ($linha as $letra) {
        echo "$letra";
    }
    echo '<br>';
}

$numero = [1,2,3,4,5];
foreach ($numeros as $dobrar) {
    $dobrar *=2;
    echo "$dobrar <br>";
}

print_r($numeros);