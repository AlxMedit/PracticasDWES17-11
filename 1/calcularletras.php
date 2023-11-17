<?php
include ("letras.php");

if (isset($_GET["dni"])) {
    $dni = $_GET["dni"];
} else {
    echo "Introduce algo";
}

if (is_numeric($dni) and strlen($dni) == 8) {
    $resto = $dni % 23;
    $letras[$resto];
    echo "Su DNI es: ". $dni . "". $letras[$resto] ."";
} else {
    echo "El formato del DNI no es válido";
}
?>