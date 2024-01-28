<?php

$nombre = "Joq";
$valor_neto = 55;

if ($valor_neto < 50){
    $valor_total = $valor_neto * 95/100;
}
else if ($valor_neto >= 50 && $valor_neto < 100){
    $valor_total = $valor_neto * 90/100;
}
else if ($valor_neto >= 100 && $valor_neto <= 250){
    $valor_total = $valor_neto * 85/100;
}
else if ($valor_neto > 250 && $valor_neto < 400){
    $valor_total = $valor_neto * 80/100;
}
else{
    $valor_total = 0;
}

echo "Cliente: " . $nombre . "<br>";
echo "Precio de compra: " . $valor_neto . "<br>";
echo "Precio a pagar: " . $valor_total . "<br>";

/* 
Juan Pablo pagará 49.5 USD
Kenia Ortiz pagará 102 USD
Angie Andrade pagará 220 USD
Eva Castro pagará 280 USD
*/


?>