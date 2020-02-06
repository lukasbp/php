<div class="titulo"></div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("EU TAMBÉM");
echo '<br>';

//concatenção

echo "Nós também" . 'somos';
echo '<br>', "também aceito", "vírgulas";

echo "'Teste'". '"Teste"' . '\'Teste\' ' . "\"Teste\"" . "\\";

print("<br>Também existe o função print");
print "<br>Também existe o função print";

//algumas funções

echo '<br> ' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas  as palavras');
echo '<br>' . strlen('quantas palavras');
echo '<br>' . mb_strlen('Eu também');
echo '<br>' . substr('só uma parte mesmo', 7,6);//parte
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso isso');