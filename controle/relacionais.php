<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(4 < 23);
var_dump(1 <= 7);
var_dump(1 != 1);
var_dump(1 <> 1);

var_dump(111 == '111');
// tipo estrito, faz a comparação e compara os tipos dos valores
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p>Relacionais no if else</p><br>";
$idade = 15;
if($idadae < 18){
    echo "Menor de idade<br>";
} else if ($idade <= 65){
    echo "Adulto = $idade<br>";
} else {
    echo "Terceira idade = $idade anos!";
}

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

?>

<style>
p{
    margin-bottom: 0px;
}
hr{
    margin-top: 0px;
}
</style>