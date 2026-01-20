<?php
if (!isset($_GET['numero'])) {
    echo "Debes pasar un número como argumento. Ejemplo: ?numero=5";
    exit;
}

$numero = $_GET['numero'];

if (!is_numeric($numero)) {
    echo "El argumento debe ser un número válido.";
    exit;
}

if ($numero % 2 == 0) {
    echo "El número $numero es PAR";
} else {
    echo "El número $numero es IMPAR";
}
?>
