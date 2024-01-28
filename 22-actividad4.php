<?php

# Arrays
$lunes = ["Pecho", "Espalda", "Hombros"];
$martes = ["Piernas", "Glúteos"];
$miercoles = ["Bíceps", "Espalda", "Hombros"];
$jueves = ["Tríceps", "Bíceps"];
$viernes = ["Piernas", "Pantorrillas"];

# Manipular de acuerdo al dia deseado (Lunes, Martes, Miercoles, Jueves o Viernes)
$strdia = "Jueves";

# Dependiendo del día ingresado, se trabajará con el array correspondiente
switch($strdia){
    case "Lunes":
        $arraydia = $lunes;
        break;
    case "Martes":
        $arraydia = $martes;
        break;
    case "Miercoles":
        $arraydia = $miercoles;
        break;
    case "Jueves":
        $arraydia = $jueves;
        break;
    case "Viernes":
        $arraydia = $viernes;
        break;
    default:
        echo "Ingrese un día válido (Lunes, Martes, Miercoles, Jueves o Viernes)";
}

# Comprabando que sea un día válido
if($strdia == "Lunes" || $strdia == "Martes" || $strdia == "Miercoles" || $strdia == "Jueves" || $strdia == "Viernes"){
    
    # Imprime el dia y parte del texto
    echo $strdia . ": Tienes rutina de ";

    # Se encarga de imprimir los elementos del array, realizando un bucle hasta el último elemento
    for($i = 0; $i < count($arraydia); $i++){

        # Muestra el elemento encontrado de acuerdo al dia seleccionado previamente y a la posición (Comienza en 0)
        echo $arraydia[$i];
        
        # Si el iterador llega a la posición del penúltimo elemento, se muestra "y" en lugar de una coma
        if(count($arraydia) - 2 == $i){
            echo " y ";
        }

        # Si el iterador aun no llega a la penúltima posición del array, se muestra una coma
        else if(count($arraydia) - 2 > $i){
            echo ", ";
        }

    }

    # Punto final
    echo ". ";
}

?>



