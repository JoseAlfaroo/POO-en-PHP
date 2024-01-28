<?php
/*

# Enviar mensaje si tiene menos de 100 letras
# Arrojar error en caso contrario

$total_letras = strlen("Hola. Cómo tas? Qué haces?");

if ($total_letras < 100){
    echo "Mensaje enviado con éxito";
}
else{
    echo "Mensaje no enviado porque tiene ". $total_letras. " letras";
}

*/

# Crear programa que indique si en un país se habla cierto idioma

$pais = "USA";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "Idioma: Español";
}
else{
    echo "Idioma: Otro";
}


?>


