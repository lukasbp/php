<div class="titulo">Desafio Tabela</div>

<?php
$array = [
    ['01','02','03','04','05'],
    ['06','07','08','09','10']
];

foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        echo "$valor";      
    }
    echo "<br>";
}
?>

<table>
    <?php
    foreach ($matriz as $linha) {
        echo '<tr>';
        foreach ($linha as $valor) {
            echo "<td>$valor<td>";
        }
    }
    ?>
</table>
<table>
    <?php
    foreach ($matriz as $index => $linha) {
        $style = $index % 2 === 1 ? 'background-color: lightblue;' : '';
        echo "<tr style='{$style}'>";
        foreach ($linha as $valor) {
            echo "<td>$valor<td>";
        }
        echo '</tr>';
    }
    ?>
</table>
