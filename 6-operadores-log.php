<?php

# Definir variables bool
$x = true;
$y = false;

echo "<p>Si sale 1, es verdadero. Si sale en blanco, es falso.</p>";

echo '<h4 style="margin: 0px">Variables</h4>';
echo "x = ", var_dump($x), "<br>";
echo "y = ", var_dump($y), "<br>"; 
echo "<br>";


# Operador AND (&&)
echo '<h4 style="margin: 0px">Operador AND (&&)</h4>';
//echo "¿Ambos son verdaderos?: " , $x AND $y, "<br>";
echo "¿Ambos son verdaderos?: " , $x && $y, "<br>";
echo "<br>";


# Operador OR (!!)
echo '<h4 style="margin: 0px">Operador OR (||)</h4>';
//echo "¿Alguno es verdadero?: " , $x OR $y, "<br>";
echo "¿Alguno es verdadero?: " , $x || $y, "<br>";
echo "<br>";


# Operador XOR
echo '<h4 style="margin: 0px">Operador XOR</h4>';
echo "¿Ambos son diferentes?: " , $x XOR $y, "<br>";
echo "<br>";


# Negación (!)
echo '<h4 style="margin: 0px">Negación (!)</h4>';
echo "Valor inverso de X: " , !$x, "<br>";
echo "Valor inverso de Y: " , !$y, "<br>";

?>