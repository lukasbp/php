<div class="titulo">Desafio Tabela 2</div>

<form action="$" method="post">
    <div>
        <label for="linhas"></label>
        <input type="numer" name="linhas" id="linhas">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" name="colunas" id="colunas">
    </div>
    <button>Gerar Tabela</button>
</form>

<table>
    <?php
    $linhas = intval($_POST['linhas']);
    $colunas = intval($_POST['colunas']);
    if (!$linhas) $linhas = 10;
    if (!$colunas) $colunas = 10;
    $num = 1;
    for ($i = 0; $i < $linhas; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $linhas; $j++) {
            echo "<td>$num</td>";
            $num++;
        }
        echo "</tr>";
    }
    ?>
</table>