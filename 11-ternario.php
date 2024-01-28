<?php

# Para pasar un curso, la nota final debe ser mayor a 4, si no, jala

$nota = 5;

/*

if ($nota > 3) {
    echo "Pasaste";
}
else{
    echo "Jalaste";
}

*/

echo ($nota > 4 ? "Pasaste" : "Jalaste");


?>