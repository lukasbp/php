<div class="titulo">Desafio pi</div>

<?php
echo pi();
$pi = 3.14;
echo '<br>';
var_dump($pi);

if($pi === pi()){
    echo "<br>Iguais!";
} else{
    echo "<br>Diferentes";
}

$piErrado = 2.8;

echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if($pi - pi() <= 0.01){
    echo '<br>praticamente iguais';
} else{
    echo '<br>Valor errado!!';
}