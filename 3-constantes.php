<?php

# Utilizamos 'define' para declarar constantes
# Se recomienda nombrar las constantes con MAYÚSCULAS

/*
Se utiliza 'define' de la siguiente manera:

define('NOMBRE_DE_CONSTANTE', 'valor');
*/

define('PULGADA', 0.393701);
define('LIBRA', 2.20462);

$cm = 50;
$kilo = 5;


print "Convertir centímetros a pulgadas:". "<br>";
echo $cm. ' centímetros equivalen a '. $cm * PULGADA. ' pulgadas'. "<br>". "<br>";

print "Convertir kilogramos a libras:". "<br>";
echo $kilo. ' kilogramos equivalen a '. $kilo * LIBRA. ' libras'. "<br>". "<br>";

?>