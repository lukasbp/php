<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 (terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (terça)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
</form>

<?php
echo $_POST['t1'];
echo $_POST['t2'];

$t1 = $_POST['t1'] === '1';
$t2 = !!$_POST['t2'];
$tv = '';
$sorvete = false;

if($t1 && $t2){
    $tv = '50';
}

if($t1 xor $t2){
    $tv = '32';
}

if($t1 or $t2){
    $sorvete = true;
}

if($tv){
    $resultado = "vamos comprar um tv de $tv";
} else {
    $resultado = "sem tv dessa vez";
}

if(!$sorvete){
    $resultado .= '<br>Estamos mais saudáveis!';
} else {
    $resultado .= '<br>Sorvete liberado';
}

echo "<p>$resultado</p>";
?>