<div class="titulo">Arrays Constantes</div>

<?php

const FRUTAS = ['laranja', 'abacaxi'];
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const  CARROS = ["fiat"=>"uno", "ford" => "Fiesta"];
// CARROS["BMW"] = '325i'; inalteravel vars const
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));

echo '<br>' . CIDADES[1];