<?php

$num_limite = 256;

# Imprimir desde 1 al 666 donde sean pares

echo "<h3>Todos los numeros pares desde 1 hasta " . $num_limite . ":<h3>";

echo "<ul>";
for($i = 1; $i <= $num_limite; $i++) {

    if($i %2 == 0) {
        echo "<li>" . $i . "</li>";
    }
}
echo "</ul>";

?>