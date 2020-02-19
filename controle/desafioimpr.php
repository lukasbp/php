<div class="titulo">Desafio Impressão</div>

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i< count($array); $i++){
    if($i % 2 === 1 ){
        echo "{$array[$i]}";
    }
}

foreach($array as $indice => $valor){
    if($indice % 2 !== 0){
        echo "$valor <br>";
    }
}