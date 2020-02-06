<div class="titulo">Valor vs Referência</div>

<?php 
$variavel = 'valor inicial';
echo $variavel;

$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo "$variavelValor";

$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";