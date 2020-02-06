<div class="titulo">Desafio String</div>


<?php

//ENUNCIADO:
//AVALIANDO OS MÉTODOS DA DOCUMENTAÇÃO DA STRING,
//QUAL O MÉTODO QUE A POSIÇÃO DE TEXTP 'ABC'
//NA STRING '!AbcaBcabc' RETORNE 1?

echo strpos('!AbcaBcabc', 'abc'). '<br>';
echo stripos('!AbcaBcabc', 'abc'). '<br>';
echo stripos(strtolower('!AbcaBcabc'), strtolower('abc')). '<br>';
