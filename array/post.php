<div class="titulo">Post</div>

<form action="#" method="POST">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>

<?php
print_r($_GET);
echo '<br>';
print_r($_POST);

echo '<br>' . count($_POST);