<?php
if (isset($_GET["factorizado"])) {
    $factorizado = $_GET["factorizado"];

    if (is_numeric($factorizado) && $factorizado > 1) {
        $factores = array();
        $num = 2;
        $output = "";

        while ($factorizado > 1) {
            if ($factorizado % $num == 0) {
                $factores[] = $num;
                $output .= $factorizado . " | " . $num . "<br>";
                $factorizado /= $num;
            } else {
                $num++;
            }
        }

        echo $output . "Factores: ";
        for ($i = 0; $i < count($factores); $i++) {
            echo $factores[$i];
            if ($i < count($factores) - 1) {
                echo ", ";
            }
        }
    } else {
        echo "Introduce un número mayor que 1";
    }
} else {
    echo "Introduce algo";
}
?>