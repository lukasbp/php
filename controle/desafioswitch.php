<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM>Milha</option>
        <option value="milha-km">Milha>KM</option>
        <option value="metro-km">Metros>KM</option>
        <option value="km-metro">KM>Metro</option>
        <option value="celsius-fahrenheit">celsius>Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit>Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CELSIUS_FAHRENHEIT = 1.8;

$param = $_POST['param'] ;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Metro = $distancia KM";
        break;
    case 'metro-km':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metro";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metro";
        break;
    case 'celsius-fahrenheit':
        $temperatura = $param * FATOR_CELSIUS_FAHRENHEIT + 32;
        $mensagem = "$param Celsius = $temperatura Fahrenheit";
        break;
    case 'celsius-fahrenheit':
        $temperatura = ($param - 32) / FATOR_CELSIUS_FAHRENHEIT;
        $mensagem = "$param Celsius = $temperatura Fahrenheit";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";