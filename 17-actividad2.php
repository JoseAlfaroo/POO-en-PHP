<?php

# Indique el factorial que desee calcular
$num_factorial = 5;

# Variable inicializada, no manipular
$resultado = 1;


# Verifica que no haya un número negativo
if ($num_factorial < 0) {
    echo "Los negativos no tienen factorial";
}

# De no ser un número negativo, se procede a ejecutar el bucle
else{

    echo $num_factorial . "! = ";

    for($i = 1; $i <= $num_factorial; $i++){
        
        # Imprime los números requeridos para el factorial
        echo $i;
    
        # Añade un asterisco en caso de no ser el último término para el factorial
        if($num_factorial != $i){
            echo " * ";
        }

        # Al imprimirse el último número se imprime también el signo de igualdad para seguido imprimir el resultado
        else{
            echo " = ";
        }

        # La variable es asignada multiplicandose por los términos a los que se encuentra limitado el bucle
        $resultado *= $i;
    }

    # Se imprime el resultado terminada la ejecución del bucle
    echo $resultado;
}

/*

5! = 1 * 2 * 3 * 4 * 5 = 120
10! = 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10 = 3628800
15! = 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10 * 11 * 12 * 13 * 14 * 15 = 1307674368000
20! = 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10 * 11 * 12 * 13 * 14 * 15 * 16 * 17 * 18 * 19 * 20 = 2432902008176640000

*/

?>