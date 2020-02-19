<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p>V ou F</p>";
var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p> Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p> Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo "<p> Tabela Verdade 'XOR' (OU)</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p>Divisao<p>";
$idade = 62;
$sexo = 'F';

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
}elseif($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhais um pouco...';
}
?>